# IDE Helpers

This plugin adds [barryvdh/ide-helpers](https://github.com/barryvdh/laravel-ide-helper) package to October for better IDE support. Also extends the `models` command to add the magic in helper file/docblocks. For now it looks to methods, properties from the `ExtendableTrait` (added by plugins or extended by you) and also adds every relation you define in models or is defined using OC Extendable.

## Installation

- `composer require filipac/oc-idehelper-plugin` OR `git clone` into _/plugins/filipac/idehelper_
- `composer install`
- `php artisan ide-helper:generate --helpers --no-interaction`
- `php artisan ide-helper:models --nowrite --reset --no-interaction`

## Configuration

No configuration is necessary, but for use of `php artisan ide-helper:models` you may need to edit `/config/config.php` to include the model files you wish to be scanned. You can also copy the config file to `config/filipac/idehelper` to avoid overwrite on update.

## TODO

- Auto clear-compiled/generate/optimize after update
