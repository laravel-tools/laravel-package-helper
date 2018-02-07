<?php


namespace LaravelTools\LaravelPackageHelper\ServiceProviderTraits;


trait Tag
{
    use Slug;

    public function tag($category) {
        return "{$this->slug()}-$category";
    }
}