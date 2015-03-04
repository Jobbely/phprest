<?php namespace Phprest\Service\Logger;

trait Getter
{
    /**
     * @return \Monolog\Logger
     */
    protected function serviceLogger()
    {
        return $this->getContainer()->get(Config::getServiceName());
    }

    /**
     * Returns the DI container
     *
     * @return \League\Container\Container
     */
    abstract protected function getContainer();
}
