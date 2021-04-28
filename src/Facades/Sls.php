<?php

namespace Johnny\AliyunSls\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Johnny\AliyunSls\AliyunLogger logger(string $logstore = '')
 * @method static void info(string $title, array $context = [])
 * @method static void warning(string $title, array $context = [])
 * @method static void error(string $title, array $context = [])
 * @method static void debug(string $title, array $context = [])
 *
 * @see \Johnny\AliyunSls\AliyunLogger
 * @package Johnny\AliyunSls\Facades
 */
class Sls extends Facade
{

    protected static function getFacadeAccessor()

    {
        return 'AliyunSls';

    }
}
