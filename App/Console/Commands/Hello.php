<?php

namespace App\Console\Commands;

use Zest\Console\Command;
use Zest\Console\Input;
use Zest\Console\Output;

class Hello extends Command
{
    protected $sign = 'hello';
    protected $description = 'Command to print hello message on screen';

    protected $flags = [];

    public function handle(Output $output, Input $input, $param = []): void
    {
        $password = $input->secret("Enter password");
        echo $password;
        $this->write('<green>Hello World.</green>');
    }
}