<?php
// 利用http协议 204 的特性
header('HTTP/1.1 204 no content');

$vote = file_get_contents('vote.txt');
$vote += 1;
file_put_contents('vote.txt', $vote);
