<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit17586210b8a40a78e3683031df09689a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Popcorn\\' => 8,
            'Pop\\View\\' => 9,
            'Pop\\Validator\\' => 14,
            'Pop\\Session\\' => 12,
            'Pop\\Pdf\\' => 8,
            'Pop\\Paginator\\' => 14,
            'Pop\\Nav\\' => 8,
            'Pop\\Mail\\' => 9,
            'Pop\\Log\\' => 8,
            'Pop\\Loader\\' => 11,
            'Pop\\Image\\' => 10,
            'Pop\\I18n\\' => 9,
            'Pop\\Http\\' => 9,
            'Pop\\Ftp\\' => 8,
            'Pop\\Form\\' => 9,
            'Pop\\Dom\\' => 8,
            'Pop\\Dir\\' => 8,
            'Pop\\Debug\\' => 10,
            'Pop\\Db\\' => 7,
            'Pop\\Csv\\' => 8,
            'Pop\\Css\\' => 8,
            'Pop\\Cookie\\' => 11,
            'Pop\\Console\\' => 12,
            'Pop\\Config\\' => 11,
            'Pop\\Code\\' => 9,
            'Pop\\Cache\\' => 10,
            'Pop\\Auth\\' => 9,
            'Pop\\Audit\\' => 10,
            'Pop\\Acl\\' => 8,
            'Pop\\' => 4,
            'Pab\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Popcorn\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/popcorn/src',
        ),
        'Pop\\View\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-view/src',
        ),
        'Pop\\Validator\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-validator/src',
        ),
        'Pop\\Session\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-session/src',
        ),
        'Pop\\Pdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-pdf/src',
        ),
        'Pop\\Paginator\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-paginator/src',
        ),
        'Pop\\Nav\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-nav/src',
        ),
        'Pop\\Mail\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-mail/src',
        ),
        'Pop\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-log/src',
        ),
        'Pop\\Loader\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-loader/src',
        ),
        'Pop\\Image\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-image/src',
        ),
        'Pop\\I18n\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-i18n/src',
        ),
        'Pop\\Http\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-http/src',
        ),
        'Pop\\Ftp\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-ftp/src',
        ),
        'Pop\\Form\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-form/src',
        ),
        'Pop\\Dom\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-dom/src',
        ),
        'Pop\\Dir\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-dir/src',
        ),
        'Pop\\Debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-debug/src',
        ),
        'Pop\\Db\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-db/src',
        ),
        'Pop\\Csv\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-csv/src',
        ),
        'Pop\\Css\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-css/src',
        ),
        'Pop\\Cookie\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-cookie/src',
        ),
        'Pop\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-console/src',
        ),
        'Pop\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-config/src',
        ),
        'Pop\\Code\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-code/src',
        ),
        'Pop\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-cache/src',
        ),
        'Pop\\Auth\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-auth/src',
        ),
        'Pop\\Audit\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-audit/src',
        ),
        'Pop\\Acl\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-acl/src',
        ),
        'Pop\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/popphp/src',
        ),
        'Pab\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit17586210b8a40a78e3683031df09689a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit17586210b8a40a78e3683031df09689a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit17586210b8a40a78e3683031df09689a::$classMap;

        }, null, ClassLoader::class);
    }
}