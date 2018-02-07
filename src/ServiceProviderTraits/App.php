<?php


namespace LaravelTools\LaravelPackageHelper\ServiceProviderTraits;


use Illuminate\Contracts\Container\Container;

trait App
{
    /**
     * Return the container instance
     *
     * @return Container
     */
    protected abstract function getContainer();
}