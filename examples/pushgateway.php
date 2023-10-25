<?php

/***
 * As of v2.0.0 the PushGateway support was moved to a dedicated package.
 * Make sure the run composer require promphp/push_gateway_php before using that example
 *
 */

/*
require __DIR__ . '/../vendor/autoload.php';

use Prometheus\CollectorRegistry;
use Prometheus\Storage\Redis;
use PrometheusPushGateway\PushGateway;

$adapter = $_GET['adapter'];

if ($adapter === 'redis') {
    Redis::setDefaultOptions(['host' => $_SERVER['REDIS_HOST'] ?? '127.0.0.1']);
    $adapter = new Prometheus\Storage\Redis();
} elseif ($adapter === 'apc') {
    $adapter = new Prometheus\Storage\APC();
} elseif ($adapter === 'in-memory') {
    $adapter = new Prometheus\Storage\InMemory();
}

$registry = new CollectorRegistry($adapter);

$counter = $registry->registerCounter('test', 'some_counter', 'it increases', ['type']);
$counter->incBy(6, ['blue']);

$pushGateway = new PushGateway('192.168.59.100:9091');
$pushGateway->push($registry, 'my_job', ['instance' => 'foo']);
*/
