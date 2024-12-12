<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2252752be7f014c9f300e689a2f8e4a1
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2252752be7f014c9f300e689a2f8e4a1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2252752be7f014c9f300e689a2f8e4a1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2252752be7f014c9f300e689a2f8e4a1::$classMap;

        }, null, ClassLoader::class);
    }
}