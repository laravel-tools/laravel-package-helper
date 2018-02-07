<?php


namespace LaravelTools\LaravelPackageHelper\ServiceProviderTraits;


trait Publishes
{
    protected abstract function publishes(array $paths, $group = null);
}