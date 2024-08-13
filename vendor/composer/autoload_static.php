<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe4934012c00c61cb802962da0722af0
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DB' => __DIR__ . '/..' . '/sergeytsalkov/meekrodb/db.class.php',
        'DBTransaction' => __DIR__ . '/..' . '/sergeytsalkov/meekrodb/db.class.php',
        'MeekroDB' => __DIR__ . '/..' . '/sergeytsalkov/meekrodb/db.class.php',
        'MeekroDBException' => __DIR__ . '/..' . '/sergeytsalkov/meekrodb/db.class.php',
        'MeekroDBParsedQuery' => __DIR__ . '/..' . '/sergeytsalkov/meekrodb/db.class.php',
        'MeekroDBWalk' => __DIR__ . '/..' . '/sergeytsalkov/meekrodb/db.class.php',
        'MeekroORM' => __DIR__ . '/..' . '/sergeytsalkov/meekrodb/orm.class.php',
        'MeekroORMColumn' => __DIR__ . '/..' . '/sergeytsalkov/meekrodb/orm.class.php',
        'MeekroORMException' => __DIR__ . '/..' . '/sergeytsalkov/meekrodb/orm.class.php',
        'MeekroORMScope' => __DIR__ . '/..' . '/sergeytsalkov/meekrodb/orm.class.php',
        'MeekroORMTable' => __DIR__ . '/..' . '/sergeytsalkov/meekrodb/orm.class.php',
        'WhereClause' => __DIR__ . '/..' . '/sergeytsalkov/meekrodb/db.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe4934012c00c61cb802962da0722af0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe4934012c00c61cb802962da0722af0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfe4934012c00c61cb802962da0722af0::$classMap;

        }, null, ClassLoader::class);
    }
}
