<?php
/**
 * 获取access_token
 * User: zhangwenzong
 * Date: 2019/1/21
 * Time: 10:31
 */

namespace AuthenticationOauth\V1;

use core\Profile\RpcRequest;

class GetAccessToken extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    protected $url = '/oauth2/access_token/';

    protected $cotent_type = 'application/json';
}