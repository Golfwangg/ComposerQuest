<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite5f5ee9e8a1e82d4422eed1d9e118a36
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

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite5f5ee9e8a1e82d4422eed1d9e118a36::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite5f5ee9e8a1e82d4422eed1d9e118a36::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite5f5ee9e8a1e82d4422eed1d9e118a36::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
