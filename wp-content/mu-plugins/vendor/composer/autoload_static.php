<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit87a487411a16ba3e3cf0d3786be194f7
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wptool\\' => 7,
            'Wpsec\\twofa\\' => 12,
            'Wpsec\\captcha\\' => 14,
        ),
        'R' => 
        array (
            'RedisCachePro\\' => 14,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Container\\' => 14,
        ),
        'I' => 
        array (
            'Illuminate\\Contracts\\' => 21,
            'Illuminate\\Container\\' => 21,
        ),
        'G' => 
        array (
            'GoDaddy\\WordPress\\Plugins\\Launch\\' => 33,
            'GoDaddy\\Styles\\' => 15,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wptool\\' => 
        array (
            0 => __DIR__ . '/..' . '/wptool/wp-admin-dash/src',
        ),
        'Wpsec\\twofa\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpsec/wp-2fa-plugin/src',
        ),
        'Wpsec\\captcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpsec/wp-captcha-plugin/src',
        ),
        'RedisCachePro\\' => 
        array (
            0 => __DIR__ . '/../..' . '/object-cache-pro/src',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Illuminate\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/container',
        ),
        'GoDaddy\\WordPress\\Plugins\\Launch\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpex/godaddy-launch/includes',
        ),
        'GoDaddy\\Styles\\' => 
        array (
            0 => __DIR__ . '/..' . '/godaddy-wordpress/styles',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'RedisCachePro\\Support\\AnalyticsConfiguration' => __DIR__ . '/../..' . '/object-cache-pro/src/Support/Types.php',
        'RedisCachePro\\Support\\ObjectCacheInfo' => __DIR__ . '/../..' . '/object-cache-pro/src/Support/Types.php',
        'RedisCachePro\\Support\\ObjectCacheMetricsGroup' => __DIR__ . '/../..' . '/object-cache-pro/src/Support/Types.php',
        'RedisCachePro\\Support\\PluginApiResponse' => __DIR__ . '/../..' . '/object-cache-pro/src/Support/Types.php',
        'RedisCachePro\\Support\\RelayConfiguration' => __DIR__ . '/../..' . '/object-cache-pro/src/Support/Types.php',
        'RedisCachePro_DebugBar_Insights' => __DIR__ . '/../..' . '/object-cache-pro/src/Extensions/Debugbar/Insights.php',
        'RedisCachePro_DebugBar_Panel' => __DIR__ . '/../..' . '/object-cache-pro/src/Extensions/Debugbar/Panel.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit87a487411a16ba3e3cf0d3786be194f7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit87a487411a16ba3e3cf0d3786be194f7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit87a487411a16ba3e3cf0d3786be194f7::$classMap;

        }, null, ClassLoader::class);
    }
}
