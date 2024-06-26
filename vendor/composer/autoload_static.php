<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit611074c724d3a20cdf1e373fe4d0865e
{
    public static $files = array (
        'cb4b8860fa8466c3c8e021a68090da9d' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Collect\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Collect\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit611074c724d3a20cdf1e373fe4d0865e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit611074c724d3a20cdf1e373fe4d0865e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit611074c724d3a20cdf1e373fe4d0865e::$classMap;

        }, null, ClassLoader::class);
    }
}
