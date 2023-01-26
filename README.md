
# Discord Permission Converter

Easily convert Discord permissions hashes to human-understandable words.

## Installation

This libary requires at least PHP 7.4 and PHP [Composer][] installed

```bash
composer require maaaathis/discordpermissionconverter
```
    
## Usage

#### Get result as a sequential array:
```php
$PermissionConverter = new \Maaaathis\DiscordPermissionConverter\PermissionConverter;
$result = $PermissionConverter->convertPermission("551903302016");
```
or
#### Get result as a json array:
```php
$PermissionConverter = new \Maaaathis\DiscordPermissionConverter\PermissionConverter;
$result = $PermissionConverter->convertPermission("551903302016", true);
```
## Copyright and License

The maaaathis/discordpermissionconverter library is copyright © [Mathis](https://github.com/Maaaathis) and
licensed for use under the Apache 2 License (APACHE-2). Please see [LICENSE][] for more
information.



[composer]: http://getcomposer.org/
[license]: https://github.com/Maaaathis/DiscordPermissionConverter/blob/main/LICENSE