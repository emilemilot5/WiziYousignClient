<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3e1948ad6a01d585e4a77979d36688c5
{
    public static $prefixesPsr0 = array (
        'W' => 
        array (
            'WiziYousignClient' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit3e1948ad6a01d585e4a77979d36688c5::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
