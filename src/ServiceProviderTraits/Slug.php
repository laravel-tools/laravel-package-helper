<?php


namespace LaravelTools\LaravelPackageHelper\ServiceProviderTraits;


use Illuminate\Support\Str;

trait Slug
{
    use Name;

    public function slug() {
        return Str::slug($this->name());
    }
}