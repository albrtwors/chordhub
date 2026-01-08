<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackupController extends Controller
{
    public static function backupDatabase()
    {
        
        $host = env('DB_HOST');
        $username = env('DB_USERNAME');
        $password = env('DB_PASSWORD');
        $database = env('DB_DATABASE');

        $backupPath = storage_path('app/backups/');
        if (!file_exists($backupPath)) {
            mkdir($backupPath, 0755, true);
        }

        $fileName = 'backup_' . date('Y-m-d_H-i-s') . '.sql';
        $filePath = $backupPath . $fileName;

        $command = "mysqldump --host={$host} --user={$username} --password={$password} {$database} > {$filePath}";

        $returnVar = null;
        exec($command, $output, $returnVar);

        
        return ['status'=>'success','message' => 'Backup realizado con éxito!', 'file' => $backupPath];
     
    }
}