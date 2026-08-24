<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('bcomp:hello', function () {
    $this->info('B-COMP Laravel website is ready.');
})->purpose('Test B-COMP application');
