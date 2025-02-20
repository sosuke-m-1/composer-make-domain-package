<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf046a08d09ebe0d1691d8166972476a6
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sosuke\\MakeDomain\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sosuke\\MakeDomain\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf046a08d09ebe0d1691d8166972476a6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf046a08d09ebe0d1691d8166972476a6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf046a08d09ebe0d1691d8166972476a6::$classMap;

        }, null, ClassLoader::class);
    }
}
