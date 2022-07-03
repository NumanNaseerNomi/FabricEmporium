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
        $sql = "CREATE SCHEMA IF NOT EXISTS " . env('DB_DATABASE') . " DEFAULT CHARACTER SET utf8";

        $conn = mysqli_connect(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'));
        $status = mysqli_query($conn, $sql);
        mysqli_close($conn);

        $this->info("Done");
    }
}
