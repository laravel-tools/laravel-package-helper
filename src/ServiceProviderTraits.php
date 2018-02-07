<?php


namespace LaravelTools\LaravelPackageHelper;


use LaravelTools\LaravelPackageHelper\ServiceProviderTraits\Assets;
use LaravelTools\LaravelPackageHelper\ServiceProviderTraits\BladeDirective;
use LaravelTools\LaravelPackageHelper\ServiceProviderTraits\Config;
use LaravelTools\LaravelPackageHelper\ServiceProviderTraits\Migrations;
use LaravelTools\LaravelPackageHelper\ServiceProviderTraits\PublicAssets;
use LaravelTools\LaravelPackageHelper\ServiceProviderTraits\Translations;
use LaravelTools\LaravelPackageHelper\ServiceProviderTraits\Views;

trait ServiceProviderTraits
{
    use Assets;
    use BladeDirective;
    use Config {
        Assets::tag insteadof Config;
        Assets::slug insteadof Config;
    }
    use Migrations {
        Assets::tag insteadof Migrations;
        Assets::slug insteadof Migrations;
    }
    use PublicAssets {
        Assets::slug insteadof PublicAssets;
        Assets::tag insteadof PublicAssets;
    }
    use Translations {
        Assets::tag insteadof Translations;
        Assets::slug insteadof Translations;
    }
    use Views {
        Assets::tag insteadof Views;
        Assets::slug insteadof Views;
    }
}