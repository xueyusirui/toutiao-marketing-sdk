<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/2/1
 * Time: 15:14
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);

$req = new \Tool\AdConvert\ToolsAdConvertUpdate();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setConvertId('1624248653889560');
$req->setDownloadUrl('https://www.baidu.com');

print_r($client->excute($req));