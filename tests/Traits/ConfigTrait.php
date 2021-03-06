<?php

namespace RrEarring\BaiduTongji\Tests\Traits;

/**
 * trait ConfigTraits
 * @package RrEarring\BaiduTongji\Tests\Traits
 *
 * @author rr-earring <ahwei000001@gmail.com>
 */
trait ConfigTrait
{
    /**
     * @var array
     */
    static $config = [
        'is_business'   => true,
        'username'      => '',
        'password'      => '',
        'token'         => '',
        'site_id'       => 1,
        'response_type' => 'array',
        'log'           => [
            'file' => './baidu-tongji.log',
        ],
    ];

}