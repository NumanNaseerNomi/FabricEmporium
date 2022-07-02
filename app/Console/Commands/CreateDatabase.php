<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CreateDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new database by taking database name from ENV file.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $dbName = env('DB_DATABASE');

        if(DB::connection()->getDatabaseName())
        {
            $this->info(" Database <" . $dbName . "> already exists.");
        }
        else
        {
            $serverName = env('DB_HOST');
            $userName = env('DB_USERNAME');
            $password = env('DB_PASSWORD');
            $sql = "CREATE DATABASE " . $dbName;

            $conn = mysqli_connect($serverName, $userName, $password);
            mysqli_query($conn, $sql);
            mysqli_close($conn);

            $this->info(" Database <" . $dbName . "> created successfully.");
        }
    }
}
