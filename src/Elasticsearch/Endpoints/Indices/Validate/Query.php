<?php

namespace Iprice\Elasticsearch\Endpoints\Indices\Validate;

use Iprice\Elasticsearch\Endpoints\AbstractEndpoint;
use Iprice\Elasticsearch\Common\Exceptions;

/**
 * Class Query
 *
 * @category Elasticsearch
 * @package  Iprice\Elasticsearch\Endpoints\Indices\Validate
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Query extends AbstractEndpoint
{
    /**
     * @param array $body
     *
     * @throws \Iprice\Elasticsearch\Common\Exceptions\InvalidArgumentException
     * @return $this
     */
    public function setBody($body)
    {
        if (isset($body) !== true) {
            return $this;
        }

        $this->body = $body;

        return $this;
    }

    /**
     * @return string
     */
    public function getURI()
    {
        return $this->getOptionalURI('_validate/query');
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'explain',
            'ignore_indices',
            'operation_threading',
            'source',
            'q',
            'df',
            'default_operator',
            'analyzer',
            'analyze_wildcard',
            'lenient',
            'lowercase_expanded_terms'
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
