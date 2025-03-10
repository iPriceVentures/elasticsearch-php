<?php

namespace Iprice\Elasticsearch\Endpoints\Indices;

use Iprice\Elasticsearch\Endpoints\AbstractEndpoint;
use Iprice\Elasticsearch\Common\Exceptions;

/**
 * Class ShardStores
 *
 * @category Elasticsearch
 * @package Iprice\Elasticsearch\Endpoints\Indices
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */

class ShardStores extends AbstractEndpoint
{
    /**
     * @throws \Iprice\Elasticsearch\Common\Exceptions\RuntimeException
     * @return string
     */
    public function getURI()
    {
        $index = $this->index;
        $uri   = "/_shard_stores";

        if (isset($index) === true) {
            $uri = "/$index/_shard_stores";
        }

        return $uri;
    }


    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'status',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'operation_threading'
        );
    }


    /**
     * @return string
     */
    public function getMethod()
    {
        return 'GET';
    }
}
