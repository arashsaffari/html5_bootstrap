<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit830abcea391eed9596261074b956ee92
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit830abcea391eed9596261074b956ee92::$classMap;

        }, null, ClassLoader::class);
    }
}