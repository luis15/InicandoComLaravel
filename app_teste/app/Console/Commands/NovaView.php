<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class NovaView extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {view}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cria uma nova view!';

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
        $view = $this->argument('view');
        $fp = fopen(resource_path()."\\views\\".$view.".blade.php","w+");
        fputs($fp,"{{ -- nova view --}}");
        fclose($fp);
        $this->info("View: {$view} criada!");
    }
}
