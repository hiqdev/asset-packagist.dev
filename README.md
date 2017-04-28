# asset-packagist.org

[![Latest Stable Version](https://poser.pugx.org/hiqdev/asset-packagist.org/v/stable)](https://packagist.org/packages/hiqdev/asset-packagist.org)
[![Total Downloads](https://poser.pugx.org/hiqdev/asset-packagist.org/downloads)](https://packagist.org/packages/hiqdev/asset-packagist.org)
[![Build Status](https://img.shields.io/travis/hiqdev/asset-packagist.org.svg)](https://travis-ci.org/hiqdev/asset-packagist.org)
[![Scrutinizer Code Coverage](https://img.shields.io/scrutinizer/coverage/g/hiqdev/asset-packagist.org.svg)](https://scrutinizer-ci.com/g/hiqdev/asset-packagist.org/)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/hiqdev/asset-packagist.org.svg)](https://scrutinizer-ci.com/g/hiqdev/asset-packagist.org/)
[![Dependency Status](https://www.versioneye.com/php/hiqdev:asset-packagist.org/dev-master/badge.svg)](https://www.versioneye.com/php/hiqdev:asset-packagist.org/dev-master)

## Installation

Create the DB in MySQL:

```sql
CREATE DATABASE asset_packagist;
CREATE USER 'asset-packagist'@'localhost' IDENTIFIED BY 'GOOD_PASSWORD';
GRANT ALL PRIVILEGES ON asset_packagist.* TO 'asset-packagist'@'localhost';
FLUSH PRIVILEGES;
```

Clone this project:

```sh
git clone https://github.com/hiqdev/asset-packagist.dev asset-packagist-directory
cd asset-packagist-directory
```

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

Install the project:

```php
composer update
./vendor/bin/hidev install
sudo ./vendor/bin/hidev deploy
```

Configure your web-server and try to fetch your first package from web-interface or using the
following command:

```sh
./yii asset-package/update bower jquery
```

## Working with queues

Some operations such as package update will push tasks to queue.
Run queue to execute that tasks:

```bash
./yii queue/run 
```

It is recommended to run all console commands from the same user you are running the web application
to prevent permissions problems in `web/p` directory. 

## Known bugs:

- `composer create-project` doesn't work by a strange reason :(
- just skip red error messages `Couldn't read ...`, the are unimportant

## License

This project is released under the terms of the BSD-3-Clause [license](LICENSE).
Read more [here](http://choosealicense.com/licenses/bsd-3-clause).

Copyright © 2016-2017, HiQDev (http://hiqdev.com/)
