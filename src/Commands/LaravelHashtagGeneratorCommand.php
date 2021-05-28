<?php

namespace Mdhesari\LaravelHashtagGenerator\Commands;

use Illuminate\Console\Command;

class LaravelHashtagGeneratorCommand extends Command
{
    public $signature = 'laravel-hashtag-generator';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
