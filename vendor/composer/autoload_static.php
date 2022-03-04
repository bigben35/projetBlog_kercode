<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc27f4f7199df158e386223b47443b073
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'ProjetBlogKercode\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ProjetBlogKercode\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc27f4f7199df158e386223b47443b073::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc27f4f7199df158e386223b47443b073::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc27f4f7199df158e386223b47443b073::$classMap;

        }, null, ClassLoader::class);
    }
}
