<?php

namespace Iprice\Elasticsearch\ConnectionPool;

use Iprice\Elasticsearch\ConnectionPool\Selectors\SelectorInterface;
use Iprice\Elasticsearch\Connections\Connection;
use Iprice\Elasticsearch\Connections\ConnectionFactoryInterface;

class SimpleConnectionPool extends AbstractConnectionPool implements ConnectionPoolInterface
{

    /**
     * {@inheritdoc}
     */
    public function __construct($connections, SelectorInterface $selector, ConnectionFactoryInterface $factory, $connectionPoolParams)
    {
        parent::__construct($connections, $selector, $factory, $connectionPoolParams);
    }

    /**
     * @param bool $force
     *
     * @return Connection
     * @throws \Iprice\Elasticsearch\Common\Exceptions\NoNodesAvailableException
     */
    public function nextConnection($force = false)
    {
        return $this->selector->select($this->connections);
    }

    public function scheduleCheck()
    {
    }
}
