<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit799e21e7db621e3e93a6704f53d54a4c
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

        spl_autoload_register(array('ComposerAutoloaderInit799e21e7db621e3e93a6704f53d54a4c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit799e21e7db621e3e93a6704f53d54a4c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInit799e21e7db621e3e93a6704f53d54a4c::getInitializer($loader)();

        $loader->register(true);

        return $loader;
    }
}