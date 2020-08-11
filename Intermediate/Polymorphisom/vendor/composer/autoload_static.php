<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdd602b95d5b343a72e50154a650d2829
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdd602b95d5b343a72e50154a650d2829::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdd602b95d5b343a72e50154a650d2829::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdd602b95d5b343a72e50154a650d2829::$classMap;

        }, null, ClassLoader::class);
    }
}