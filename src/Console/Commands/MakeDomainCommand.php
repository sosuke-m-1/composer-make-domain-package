<?php

namespace Sosuke\MakeDomain\Console\Commands;

use Illuminate\Console\Concerns\CreatesMatchingTest;
use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputOption;

class MakeDomainCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:domain {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Domain classes';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Domain';

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
     * Resolve the fully-qualified path to the stub.
     *
     * @param  string  $stub
     * @return string
     */
    protected function resolveStubPath($stub)
    {
        return file_exists($customPath = $this->laravel->basePath(trim($stub, '/')))
            ? $customPath
            : __DIR__ . $stub;
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return is_dir(app_path('Actions')) ? $rootNamespace . '\\Actions' : $rootNamespace;
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

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('make:entity', ['name' => $this->getNameInput()]);
        $this->call('make:factory', ['name' => $this->getNameInput()]);
        $this->call('make:repository', ['name' => $this->getNameInput()]);
        $this->call('make:service', ['name' => $this->getNameInput()]);
    }
}
