<?php


$memcached = new \Memcached(1);
if ($memcached->isPristine()) {
    $memcached->addServer('memcached', 11211, 1);
}

echo (string)$memcached->get('time').'<br>';
$memcached->set('time', time());

foreach ($memcached->getServerList() as $server) {
    echo "SERVER:{$server['host']}, PORT:{$server['port']}<br>";
}



