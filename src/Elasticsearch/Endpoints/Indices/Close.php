<?php

namespace Iprice\Elasticsearch\Endpoints\Indices;

use Iprice\Elasticsearch\Endpoints\AbstractEndpoint;
use Iprice\Elasticsearch\Common\Exceptions;

/**
 * Class Close
 *
 * @category Elasticsearch
 * @package  Iprice\Elasticsearch\Endpoints\Indices
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Close extends AbstractEndpoint
{
    /**
     * @throws \Iprice\Elasticsearch\Common\Exceptions\RuntimeException
     * @return string
     */
    public function getURI()
    {
        if (isset($this->index) !== true) {
            throw new Exceptions\RuntimeException(
                'index is required for Close'
            );
        }
        $index = $this->index;
        $uri   = "/$index/_close";

        if (isset($index) === true) {
            $uri = "/$index/_close";
        }

        return $uri;
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'timeout',
            'master_timeout',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
        );
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return 'POST';
    }
}
