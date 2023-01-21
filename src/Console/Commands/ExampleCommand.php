<?php

namespace Example3\Console\Commands;

use Example3\Library\Example3Helper;
use Example3\Models\Example3;
use Example3\Models\Example3Setting;
use Carbon\Carbon;
use Illuminate\Console\Command;

class ExampleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'example3:example';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Заготовка команды example3';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


    public function handle()
    {

        $this->info("example3 - Команда выполнена");
    }
}
