<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit477991271d32a382c6bbe28f5fc64265
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'mvc\\' => 4,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'P' => 
        array (
            'Phroute\\Phroute\\' => 16,
        ),
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
        'K' => 
        array (
            'Klein\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'mvc\\' => 
        array (
            0 => 'C:\\OSPanel\\domains\\mvc\\vendor',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/mvc',
        ),
        'Phroute\\Phroute\\' => 
        array (
            0 => __DIR__ . '/..' . '/phroute/phroute/src/Phroute',
        ),
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
        'Klein\\' => 
        array (
            0 => __DIR__ . '/..' . '/klein/klein/src/Klein',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit477991271d32a382c6bbe28f5fc64265::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit477991271d32a382c6bbe28f5fc64265::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
