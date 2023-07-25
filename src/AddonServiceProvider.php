<?php

namespace Dwedaz\Versionable;

use Illuminate\Support\ServiceProvider;

class AddonServiceProvider extends ServiceProvider
{
    use AutomaticServiceProvider;

    protected $vendorName = 'dwedaz';
    protected $packageName = 'versionable';
    protected $commands = [];
}
