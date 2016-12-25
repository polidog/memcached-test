# phpのmemcachedにおけるESTABLISHEDが大量に発生する問題を再現するためのDocker

php-memcachedおよびphp-memcached-devでのmemcached接続においてconnectionsのclose処理をおこなってないpersistent接続において、ESTABLISHEDが大量に発生する問題の再現をするためのDocker環境です。  

## 使い方


```$bash
$ docker-compose build
$ docker-compose start
```
