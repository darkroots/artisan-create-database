<?php

namespace Darkroots\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CreateDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Create:Database {name}';

    protected $name;
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a New Database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        return $this->create();
    }

    protected function create()
    {
        $name = $this->argument('name');

        $msg = 'Sure you would like to create '.$name.' database';

        $confirm = $this->confirm($msg);

        if($confirm)
        {
            $msg = 'Database '. $name . ' successfully created!!!';

            $stat = "create database ".$name;

            if($db = DB::statement($stat))
            {
                return $this->info($msg);
            }
        }
    }
}
