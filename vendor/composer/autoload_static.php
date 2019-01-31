<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1596c01335cf379e2545a4a1578b856a
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Transbank\\Onepay\\Exceptions\\' => 28,
            'Transbank\\Onepay\\' => 17,
        ),
        'F' => 
        array (
            'Freshwork\\Transbank\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Transbank\\Onepay\\Exceptions\\' => 
        array (
            0 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/exceptions',
        ),
        'Transbank\\Onepay\\' => 
        array (
            0 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib',
            1 => __DIR__ . '/..' . '/transbank/transbank-sdk/lib/utils',
        ),
        'Freshwork\\Transbank\\' => 
        array (
            0 => __DIR__ . '/..' . '/freshwork/transbank/src',
        ),
    );

    public static $classMap = array (
        'WSSESoap' => __DIR__ . '/..' . '/freshwork/transbank/src/wss/soap-wsse.php',
        'XMLSecEnc' => __DIR__ . '/..' . '/freshwork/transbank/src/wss/xmlseclibs.php',
        'XMLSecurityDSig' => __DIR__ . '/..' . '/freshwork/transbank/src/wss/xmlseclibs.php',
        'XMLSecurityKey' => __DIR__ . '/..' . '/freshwork/transbank/src/wss/xmlseclibs.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1596c01335cf379e2545a4a1578b856a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1596c01335cf379e2545a4a1578b856a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1596c01335cf379e2545a4a1578b856a::$classMap;

        }, null, ClassLoader::class);
    }
}
