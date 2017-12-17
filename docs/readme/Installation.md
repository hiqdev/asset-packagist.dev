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

Copy `.env.example` to `.env` and adjust it:

```sh
cp .env.example
edit .env
```

Be sure to set `COOKIEVALIDATIONKEY` and `DB_PASSWORD`:

```sh
COOKIEVALIDATIONKEY=GOOD_RANDOM_STRING_HERE
DB_PASSWORD=YOUR_DB__PASSWORD
```

### Deploy the project

```sh
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

```sh
./vendor/bin/hidev queue/run
```

It is recommended to run all console commands from the same user you are running the web application
to prevent permissions problems in `web/p` directory.

### Known bugs:

Just skip yellow warnings `Couldn't read ...` - they are unimportant.

