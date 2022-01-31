# Ameotoko FeatherIcons Bundle

Simple Symfony/Twig wrapper for [FeatherIcons][1] and [pixelrobin/php-feather][2] library.

## Installation

1. Install using Composer:

```bash
composer require ameotoko/feathericon-bundle
```

2. Enable the bundle:

```php
// config/bundles.php
return [
    // ...
    Ameotoko\FeatherIcon\AmeotokoFeatherIconBundle::class => ['all' => true],
];
```

## Usage

The bundle provides new function in your Twig templates, which simply uses `getIcon()` from [php-feather][2] under the hood.

This code in your `.html.twig` template:

```html
<button type="submit">{{ feathericon('send', {stroke: '#ddd', 'stroke-width': 4}) }} Submit</button>
```

will produce the same result as:

```php
<?php $icons = new \Feather\Icons(); ?>
<button type="submit"><?= $icons->get('send', ['stroke' => '#ddd', 'stroke-width' => 4], false) ?> Submit</button>
```

[See more][3] about using `php-feather`.

[1]: https://feathericons.com/
[2]: https://github.com/Pixelrobin/php-feather
[3]: https://github.com/Pixelrobin/php-feather#usage
