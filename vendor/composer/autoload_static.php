<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3e9be691e72361811659c2aebf994bce
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Itobuztech\\Contact\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Itobuztech\\Contact\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3e9be691e72361811659c2aebf994bce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3e9be691e72361811659c2aebf994bce::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}