<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/2/1
 * Time: 16:04
 */

require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new \core\Profile\TouTiaoClient(TOKEN);
$req = new \Tool\AdConvert\V1\ToolsAdConvertUpdateStatus();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setConvertId(1624067041686558);
$req->setOptStatus('AD_CONVERT_OPT_STATUS_DISABLE');

print_r($client->excute($req));