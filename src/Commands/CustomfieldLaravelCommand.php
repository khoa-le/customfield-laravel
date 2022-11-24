<?php

namespace Khoale\CustomfieldLaravel\Commands;

use Illuminate\Console\Command;

class CustomfieldLaravelCommand extends Command
{
    public $signature = 'customfield-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
