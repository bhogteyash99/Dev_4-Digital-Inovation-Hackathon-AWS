<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b2a2c909c6199de140597783e388f82
{
    public static $classMap = array (
        'WP_Requirements_Check' => __DIR__ . '/..' . '/wearerequired/wp-requirements-check/WP_Requirements_Check.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit3b2a2c909c6199de140597783e388f82::$classMap;

        }, null, ClassLoader::class);
    }
}