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

### Working with queues

Some operations such as package update will push tasks to queue.
Run queue to execute that tasks:

```bash
./yii queue/run
```

It is recommended to run all console commands from the same user you are running the web application
to prevent permissions problems in `web/p` directory.

### Known bugs:

Just skip red error messages `Couldn't read ...`, they are unimportant.

