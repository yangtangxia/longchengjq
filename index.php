<?php
require_once './dignitary/src/client.php'; // 确保路径正确

use Longchengjq\Dignitary\Src\Client;

// 创建 Client 类实例并调用方法
$client = new Client();
$client->sayHello(); // 调用 Client 类的 sayHello 方法