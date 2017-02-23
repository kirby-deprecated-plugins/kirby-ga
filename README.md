# Kirby GA

*Verion 0.2*

Google Analytics for Kirby CMS.

- Doesn't run the GA script on localhost.
- Doesn't run the GA script if you are logged in.

**Table of contents**

- [Installation instructions](docs/install.md)
- [Changelog](docs/changelog.md)

## Usage

1. Add the config `plugin.ga.id` to `config.php`.
1. Add the code below to your footer snippet.

```php
<?php echo snippet('ga'); ?>
```

## Options

Only the `plugin.ga.id` is required.

```php
c::set('plugin.ga.id', '');
c::set('plugin.ga', true);
c::set('plugin.ga.blacklist', [ '127.0.0.1', '::1' ] );
c::set('plugin.ga.debug', false);
c::set('plugin.ga.snippet', 'ga');
```

### `plugin.ga.id` (required)

The Google Analytics ID. Set it to something like `UA-12345678-12`.

```php
c::set('plugin.ga.id', '');
```

### `plugin.ga`

You can deactivate the script by setting this value to `false`.

```php
c::set('plugin.ga', true);
```

### `plugin.ga.blacklist`

Localhost is in the blacklist as default. You can change it.

```php
c::set('plugin.ga.blacklist', [ '127.0.0.1', '::1' ] );
```

### `plugin.ga.debug`

The script is only active for not logged in users and users not on localhost.

If you want to always run the script, set this option to `true`.

```php
c::set('plugin.ga.debug', false);
```

### `plugin.ga.snippet`

Change the snippet name with this option. You can override the snippet as well.

```php
c::set('plugin.ga.snippet', 'ga');
```

## Requirements

- [**Kirby**](https://getkirby.com/) 2.4.1+

## Disclaimer

This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please [create a new issue](https://github.com/jenstornell/kirby-ga/issues/new).

## License

[MIT](https://opensource.org/licenses/MIT)

It is discouraged to use this plugin in any project that promotes racism, sexism, homophobia, animal abuse, violence or any other form of hate speech.

## Credits

- [Jens Törnell](https://github.com/jenstornell)
- [iksi](https://github.com/iksi) - Inspired by [KirbyAnalytics](https://github.com/iksi/KirbyAnalytics)