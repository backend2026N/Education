<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Console\GeneratorCommand;

// #[Signature('app:create-service-command')]
// #[Description('Command description')]

class CreateServiceCommand extends GeneratorCommand {
    
    protected $signature = "make:service {name}";

    protected $description = "Create a new service";
    
    protected function getStub() {

        return base_path( "stubs/service.stub" );
    }

    protected function getDefaultNamespace( $rootNamespace ) {

        return $rootNamespace . "\services";
    }
}
