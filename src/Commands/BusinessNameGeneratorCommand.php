<?php

namespace Designbycode\LaravelBusinessNameGenerator\Commands;

use Illuminate\Console\Command;

class BusinessNameGeneratorCommand extends Command
{
    public $signature = 'laravel-business-name-generator';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
