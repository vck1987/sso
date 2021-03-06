<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit941af58e4111fe16985c3888ab543d81
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit941af58e4111fe16985c3888ab543d81::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit941af58e4111fe16985c3888ab543d81::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
