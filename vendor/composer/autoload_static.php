<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit954ca4018255913fb741273edb6250fd
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Main\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Main\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Main\\DaoInterfaces\\GameDaoInterface' => __DIR__ . '/../..' . '/src/DaoInterfaces/GameDaoInterface.php',
        'Main\\DaoInterfaces\\SeasonDaoInterface' => __DIR__ . '/../..' . '/src/DaoInterfaces/SeasonDaoInterface.php',
        'Main\\Dao\\GameDaoMySql' => __DIR__ . '/../..' . '/src/Dao/GameDaoMySql.php',
        'Main\\Dao\\SeasonDaoMySql' => __DIR__ . '/../..' . '/src/Dao/SeasonDaoMySql.php',
        'Main\\Models\\Game\\Game' => __DIR__ . '/../..' . '/src/Models/Game.php',
        'Main\\Models\\Season' => __DIR__ . '/../..' . '/src/Models/Season.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit954ca4018255913fb741273edb6250fd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit954ca4018255913fb741273edb6250fd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit954ca4018255913fb741273edb6250fd::$classMap;

        }, null, ClassLoader::class);
    }
}
