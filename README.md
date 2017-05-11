# asset-packagist.dev

[![Latest Stable Version](https://poser.pugx.org/hiqdev/asset-packagist.dev/v/stable)](https://packagist.org/packages/hiqdev/asset-packagist.dev)
[![Total Downloads](https://poser.pugx.org/hiqdev/asset-packagist.dev/downloads)](https://packagist.org/packages/hiqdev/asset-packagist.dev)
[![Build Status](https://img.shields.io/travis/hiqdev/asset-packagist.dev.svg)](https://travis-ci.org/hiqdev/asset-packagist.dev)
[![Scrutinizer Code Coverage](https://img.shields.io/scrutinizer/coverage/g/hiqdev/asset-packagist.dev.svg)](https://scrutinizer-ci.com/g/hiqdev/asset-packagist.dev/)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/hiqdev/asset-packagist.dev.svg)](https://scrutinizer-ci.com/g/hiqdev/asset-packagist.dev/)
[![Dependency Status](https://www.versioneye.com/php/hiqdev:asset-packagist.dev/dev-master/badge.svg)](https://www.versioneye.com/php/hiqdev:asset-packagist.dev/dev-master)

## Installation

### Create the DB in MySQL:

```sql
CREATE DATABASE asset_packagist;
CREATE USER 'asset-packagist'@'localhost' IDENTIFIED BY 'GOOD_PASSWORD';
GRANT ALL PRIVILEGES ON asset_packagist.* TO 'asset-packagist'@'localhost';
FLUSH PRIVILEGES;
```

### Create the project with composer:

```sh
composer create-project --stability=dev "hiqdev/asset-packagist.dev:*" dir
```

### Make configuration tuning:

Create `src/config/params-local.php` with the following content:

```php
return [
    'cookieValidationKey'   => 'set_any_random_string_here',
    'db.password'           => 'GOOD_PASSWORD',
];
```

Copy `.env.example` to `.env` and adjust it:

```bash
cp .env.example
edit .env
```

### Deploy the project

```php
./vendor/bin/hidev deploy
```

Configure your web-server.
(hidev can install nginx config for you, run `./vendor/bin/hidev nginx/deploy`).

Try to fetch your first package from web-interface or using the following command:

```sh
./vendor/bin/hidev asset-package/update bower jquery
```

### Working with queues

Some operations such as package update will push tasks to queue.
Run queue to execute that tasks:

```bash
./vendor/bin/hidev queue/run
```

It is recommended to run all console commands from the same user you are running the web application
to prevent permissions problems in `web/p` directory.

### Known bugs:

Just skip red error messages `Couldn't read ...`, they are unimportant.

## License

This project is released under the terms of the BSD-3-Clause [license](LICENSE).
Read more [here](http://choosealicense.com/licenses/bsd-3-clause).

Copyright © 2016-2017, HiQDev (http://hiqdev.com/)
