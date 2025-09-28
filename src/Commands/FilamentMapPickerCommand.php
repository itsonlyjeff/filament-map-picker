<?php

namespace ItsOnlyJeff\FilamentMapPicker\Commands;

use Illuminate\Console\Command;

class FilamentMapPickerCommand extends Command
{
    public $signature = 'filament-map-picker';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
