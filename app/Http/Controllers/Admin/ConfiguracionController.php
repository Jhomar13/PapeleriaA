<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Configuracion;
use App\Exports\DatosNegocioExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ConfiguracionController extends Controller
{
    public function index()
    {
        $configuraciones = Configuracion::all();
        return view('admin.configuraciones.index', compact('configuraciones'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'session_lifetime' => 'required|integer|min:1|max:1440',
            'max_login_attempts' => 'required|integer|min:1|max:10',
        ]);

        Configuracion::where('clave', 'session_lifetime')->update(['valor' => $request->session_lifetime]);
        Configuracion::where('clave', 'max_login_attempts')->update(['valor' => $request->max_login_attempts]);

        return redirect()->route('admin.configuraciones.index')->with('success', 'Configuración actualizada correctamente');
    }

    public function actualizarIva(Request $request)
    {
        $request->validate([
            'iva_porcentaje' => 'required|numeric|min:0|max:100',
        ]);

        Configuracion::actualizarIva($request->iva_porcentaje);

        return redirect()->route('admin.configuraciones.index')->with('success', 'IVA actualizado correctamente');
    }

    public function backupDatabase()
    {
        $filename = 'backup_artes_' . date('Y-m-d_H-i-s') . '.sql';
    
    $tables = \DB::select("SELECT tablename FROM pg_tables WHERE schemaname = 'public'");
    
    $sql = "-- Backup generado el " . date('Y-m-d H:i:s') . "\n";
    $sql .= "-- Base de datos: " . env('DB_DATABASE') . "\n\n";
    
    foreach ($tables as $table) {
        $tableName = $table->tablename;
        
        // Obtener estructura de la tabla
        $sql .= "-- Tabla: {$tableName}\n";
        $sql .= "DROP TABLE IF EXISTS \"{$tableName}\" CASCADE;\n";
        
        // Obtener columnas
        $columns = \DB::select("
            SELECT column_name, data_type, is_nullable, column_default
            FROM information_schema.columns 
            WHERE table_name = ? AND table_schema = 'public'
            ORDER BY ordinal_position
        ", [$tableName]);
        
        if (count($columns) > 0) {
            $sql .= "CREATE TABLE \"{$tableName}\" (\n";
            $colDefs = [];
            foreach ($columns as $col) {
                $def = "    \"{$col->column_name}\" {$col->data_type}";
                if ($col->is_nullable === 'NO') {
                    $def .= " NOT NULL";
                }
                if ($col->column_default) {
                    $def .= " DEFAULT {$col->column_default}";
                }
                $colDefs[] = $def;
            }
            $sql .= implode(",\n", $colDefs);
            $sql .= "\n);\n\n";
            
            // Obtener datos
            $rows = \DB::table($tableName)->get();
            if ($rows->count() > 0) {
                foreach ($rows as $row) {
                    $values = [];
                    foreach ((array)$row as $value) {
                        if (is_null($value)) {
                            $values[] = 'NULL';
                        } elseif (is_numeric($value)) {
                            $values[] = $value;
                        } else {
                            $values[] = "'" . addslashes($value) . "'";
                        }
                    }
                    $sql .= "INSERT INTO \"{$tableName}\" VALUES (" . implode(', ', $values) . ");\n";
                }
                $sql .= "\n";
            }
        }
    }
    
    return response($sql)
        ->header('Content-Type', 'application/sql')
        ->header('Content-Disposition', "attachment; filename=\"{$filename}\"");
    }

    public function exportarDatosNegocio()
    {
        $filename = 'datos_negocio_' . date('Y-m-d_H-i-s') . '.xlsx';
        return Excel::download(new DatosNegocioExport, $filename);
    }
}