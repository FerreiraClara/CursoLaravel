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

    // definindo parametro
    protected $signature = 'make:view {view}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cria uma nova View';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //definindo argumentos
        $view = $this->argument('view');
        //criando o novo arquivo    |   w+ serve para poder acrescentar uma informação no arquivo que está sendo criado
        $fp = fopen(\resource_path()."\\views\\".$view.".blade.php", "w+");
        //adicionando comentario dentro do arquivo
        fputs($fp, "{{ --  Nova View  -- }}");
        fclose($fp);

        //mandando mensagem no terminal
        $this->info("View: {$view} criada!");
    }
}
