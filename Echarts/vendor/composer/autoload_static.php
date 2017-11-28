<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13a5e603ef195dbd7262aa6764115d7a
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hisune\\EchartsPHP\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hisune\\EchartsPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/hisune/echarts-php/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit13a5e603ef195dbd7262aa6764115d7a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit13a5e603ef195dbd7262aa6764115d7a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}