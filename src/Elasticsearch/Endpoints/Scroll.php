<?php

namespace Iprice\Elasticsearch\Endpoints;

use Iprice\Elasticsearch\Common\Exceptions;

/**
 * Class Scroll
 *
 * @category Elasticsearch
 * @package  Iprice\Elasticsearch\Endpoints
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Scroll extends AbstractEndpoint
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
     * @return array
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param $scroll
     *
     * @return $this
     */
    public function setScroll($scroll)
    {
        if (isset($scroll) !== true) {
            return $this;
        }

        $this->body['scroll'] = $scroll;

        return $this;
    }

    /**
     * @param $scroll_id
     *
     * @return $this
     */
    public function setScrollId($scroll_id)
    {
        if (isset($scroll_id) !== true) {
            return $this;
        }

        $this->body['scroll_id'] = $scroll_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getURI()
    {
        $uri   = "/_search/scroll";
        return $uri;
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'scroll',
        );
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return isset($this->body) ? 'POST' : 'GET';
    }
}
