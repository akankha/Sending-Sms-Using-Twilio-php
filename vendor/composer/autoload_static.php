<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd337330bd5b3437b4b5553d3b4a5a1e7
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd337330bd5b3437b4b5553d3b4a5a1e7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd337330bd5b3437b4b5553d3b4a5a1e7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
