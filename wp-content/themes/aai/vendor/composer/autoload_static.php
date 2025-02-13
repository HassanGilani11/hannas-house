<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd9d8d297247291ed0ab840d6a5c34e68
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aai\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aai\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd9d8d297247291ed0ab840d6a5c34e68::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd9d8d297247291ed0ab840d6a5c34e68::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd9d8d297247291ed0ab840d6a5c34e68::$classMap;

        }, null, ClassLoader::class);
    }
}
