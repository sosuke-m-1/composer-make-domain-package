<?php

namespace Sosuke\MakeDomain\Console\Commands;

use Illuminate\Support\Str;

class MakeEntityCommand extends MakeCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:entity {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Entity class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Entity';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return $this->resolveStubPath('/../stubs/entity.stub');
    }

    /**
     * Get the destination class path.
     *
     * @param  string  $name
     * @return string
     */
    protected function getPath($name)
    {
        $name = Str::replaceFirst($this->rootNamespace(), '', $name);

        return $this->laravel['path'] . '/' . str_replace('\\', '/', $name) . 'Entity.php';
    }
}
