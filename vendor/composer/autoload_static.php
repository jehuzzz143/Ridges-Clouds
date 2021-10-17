<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5e40a2f8a33e4cc74f91d17c261e77a0
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5e40a2f8a33e4cc74f91d17c261e77a0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5e40a2f8a33e4cc74f91d17c261e77a0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5e40a2f8a33e4cc74f91d17c261e77a0::$classMap;

        }, null, ClassLoader::class);
    }
}