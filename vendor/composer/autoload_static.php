<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5b958a9890f313993bd760d5685bad3d
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'pidan\\' => 6,
            'pidan\\app\\' => 10,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'pidan\\app\\' => 
        array (
            0 => __DIR__ . '/..' . '/jetee/pidan-multi-app/src',
        ),
        'pidan\\' => 
        array (
            0 => __DIR__ . '/../jetee/framework/pidan', 
            1 => __DIR__ . '/../jetee/pidan-helper',
        ),
 
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5b958a9890f313993bd760d5685bad3d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5b958a9890f313993bd760d5685bad3d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5b958a9890f313993bd760d5685bad3d::$classMap;

        }, null, ClassLoader::class);
    }
}