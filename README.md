# Kirby GA

*Verion 0.1 beta*

Google Analytics for Kirby CMS.

- Doesn't run the GA script on localhost.
- Doesn't run the GA script if you are logged in.

**Table of contents**

- [Changelog](docs/changelog.md)

## Usage

1. Add the config `jenstornell.ga.id` to `config.php`.
1. Add the code below to your footer snippet.

```php
<?= snippet('ga'); ?>
```

## Options

Only the `jenstornell.ga.id` is required.

```php
return [
    'jenstornell.ga.id' => false,
    'jenstornell.ga.active' => true,
    'jenstornell.ga.blacklist' => ['127.0.0.1', '::1'],
    'jenstornell.ga.debug' => false,
];
```

### `id` (required)

The Google Analytics ID. Set it to something like `UA-12345678-12`.

```php
'jenstornell.ga.id' => false
```

### `active`

You can deactivate the script by setting this value to `false`.

```php
'jenstornell.ga.active' => true
```

### `blacklist`

Localhost is in the blacklist as default. You can change it.

```php
'jenstornell.ga.blacklist' => ['127.0.0.1', '::1']
```

### `debug`

The script is only active for not logged in users and users not on localhost.

If you want to always run the script, set this option to `true`.

```php
'jenstornell.ga.debug' => false
```

<!--
### `plugin.ga.snippet`

Change the snippet name with this option. You can override the snippet as well.

```php
c::set('plugin.ga.snippet', 'ga');

-->
```

## Requirements

- [**Kirby**](https://getkirby.com/) 3+

## Disclaimer

This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please create a new issue.

## License

[MIT](https://opensource.org/licenses/MIT)

It is discouraged to use this plugin in any project that promotes racism, sexism, homophobia, animal abuse, violence or any other form of hate speech.

## Credits

- [Jens Törnell](https://github.com/jenstornell)