<p align="center">
    <a href="https://github.com/yii-extension" target="_blank">
        <img src="https://lh3.googleusercontent.com/ehSTPnXqrkk0M3U-UPCjC0fty9K6lgykK2WOUA2nUHp8gIkRjeTN8z8SABlkvcvR-9PIrboxIvPGujPgWebLQeHHgX7yLUoxFSduiZrTog6WoZLiAvqcTR1QTPVRmns2tYjACpp7EQ=w2400" height="100px">
    </a>
    <h1 align="center">Flash message service</h1>
    <br>
</p>

[![Total Downloads](https://poser.pugx.org/yii-extension/flash-message-service/downloads.png)](https://packagist.org/packages/yii-extension/flash-message-service)
[![static analysis](https://github.com/yii-extension/flash-message-service/workflows/static%20analysis/badge.svg)](https://github.com/yii-extension/flash-message-service/actions?query=workflow%3A%22static+analysis%22)
[![type-coverage](https://shepherd.dev/github/yii-extension/flash-message-service/coverage.svg)](https://shepherd.dev/github/yii-extension/flash-message-service)

## Installation

```shell
composer require yii-extension/flash-message-service
```

## Usages:

Automatically detects if you use `yii-extension/flash-message-bulma` or `yii-extension/alert-message-bootstrap5`, and format the messages according to the widget.

You can inject flash-message-service into the controller or action, and automatically all dependencies are resolved by autowired in di-container.

```php
<?php

declare(strict_types=1);

namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Yii\Extension\Service\ServiceFlashMessage;

final class Example
{
    public function run(ServiceFlashMessage $serviceFlashMessage): ResponseInterface
    {
        $serviceFlashMessage->run('success', 'Header message', 'Body message');
    }
}
```

### Static analysis

The code is statically analyzed with [Psalm](https://psalm.dev/docs). To run static analysis:

```php
./vendor/bin/psalm
```

### License

The Flash message service for Yii Packages is free software. It is released under the terms of the BSD License.
Please see [`LICENSE`](./LICENSE.md) for more information.

Maintained by [Yii Extension](https://github.com/yii-extension).
