<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcae1d1e1b9657b016dd5634cfa6d0233
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcae1d1e1b9657b016dd5634cfa6d0233::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcae1d1e1b9657b016dd5634cfa6d0233::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
