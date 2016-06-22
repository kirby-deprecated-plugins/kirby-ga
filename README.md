# Kirby GA

*Verion 0.1*

Google Analytics for Kirby. Set it and forget it. Only Google Analytics ID required as a setting.

```php
<?php echo ga(); ?>
```

**Features**

- Load script only for not logged in users.
- Load script only if not on a localhost enviroment.
- Possible to disable the script completely.
- Possible to debug and always load the script.
- Possible to change the script template/snippet path.
- Possible to change the IP blacklist.

## Install

1. Add `ga` folder in `site/plugins/`.
1. Set Google Analytics id to your `config.php`. See options.
1. Add `<?php echo ga(); ?>` in your footer snippet. 

## Options

### ID (required)

The Google Analytics ID is required for the script to work.

```php
c::set('plugin.ga.id', 'UA-12345678-12');
```

### Active

You can deactivate the script by setting this value to `false`.

```php
c::set('plugin.ga', true);
```

### Debug

The script is only active for not logged in users that are not on a localhost environment. If you always want to have the code active, set this value to `true`.

```php
c::set('plugin.ga.debug', false);
```

### Template path

If you don't like the script and want to change it, change the template path. You have access to `$ua`, `$page`, `$pages` and `$site` in the template.

```php
c::set('plugin.ga.template', __DIR__ . DS . 'template.php');
```

`$ua` is the Google Analytics ID.

### Blacklist

As default the localhost IP addresses are in the blacklist. That mean that the script will not run on these IP:s except if debug is turned on.

```php
c::set('plugin.ga.blacklist', [ '127.0.0.1', '::1' ] );
```

## Requirements

Kirby 2.3

## License

MIT

## Inpiration

I got inspired with the way KirbyAnalytics handle localhost enviroment.

https://github.com/iksi/KirbyAnalytics