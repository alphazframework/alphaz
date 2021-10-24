<?php

namespace Config;
use Zest\Console\Commands as InternalCommands;

class Commands extends InternalCommands {
    protected $commands = [
        ['hello',  \App\Console\Commands\Hello::class],
    ];
}
