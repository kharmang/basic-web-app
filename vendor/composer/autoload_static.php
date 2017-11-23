<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf564031a80ddbecbc074121a0f04ab83
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf564031a80ddbecbc074121a0f04ab83::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf564031a80ddbecbc074121a0f04ab83::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}