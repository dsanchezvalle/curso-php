<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitde090659cc04ddcf02e612ca0aea0c3c
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitde090659cc04ddcf02e612ca0aea0c3c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitde090659cc04ddcf02e612ca0aea0c3c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
