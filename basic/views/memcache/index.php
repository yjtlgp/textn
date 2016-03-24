<?php
/* 连接memcacheq server */
$memcache_obj = new Memcache;
$memcache_obj->connect('192.168.1.40', 11212); // default port 22201

/* 添加到对列 */
$memcache_obj->set('demoqueue1', 'dsa', MEMCACHE_COMPRESSED, 0);
$memcache_obj->set('demoqueue1', 'hg body here2', MEMCACHE_COMPRESSED, 0);
$memcache_obj->set('demoqueue1', 'message body here3', MEMCACHE_COMPRESSED, 0);
$memcache_obj->set('demoqueue1', 'message body here4', MEMCACHE_COMPRESSED, 0);

/* 移出对列 */
echo $memcache_obj->get('demoqueue1').'<br>';
echo $memcache_obj->get('demoqueue1').'<br>';
echo $memcache_obj->get('demoqueue1').'<br>';
echo $memcache_obj->get('demoqueue1').'<br>';

$memcache_obj->close();
?>