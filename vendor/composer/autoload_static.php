<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2871515bb4d531aad44cfef45159f015
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'App\\Controller\\LoginController' => __DIR__ . '/../..' . '/src/Controller/LoginController.php',
        'App\\Controller\\RegisterController' => __DIR__ . '/../..' . '/src/Controller/RegisterController.php',
        'App\\Database\\DatabaseController' => __DIR__ . '/../..' . '/src/Database/DatabaseController.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2871515bb4d531aad44cfef45159f015::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2871515bb4d531aad44cfef45159f015::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2871515bb4d531aad44cfef45159f015::$classMap;

        }, null, ClassLoader::class);
    }
}