<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd18df351b3a2c4bd74bd41ba456deeb7
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitd18df351b3a2c4bd74bd41ba456deeb7', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd18df351b3a2c4bd74bd41ba456deeb7', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd18df351b3a2c4bd74bd41ba456deeb7::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
