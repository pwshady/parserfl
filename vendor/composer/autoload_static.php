<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc3764fda0a43f763430042170c53f255
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc3764fda0a43f763430042170c53f255::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc3764fda0a43f763430042170c53f255::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc3764fda0a43f763430042170c53f255::$classMap;

        }, null, ClassLoader::class);
    }
}