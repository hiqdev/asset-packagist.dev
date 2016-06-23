Use the following script:

```sh
git clone https://github.com/hiqdev/asset-packagist.dev asset-packagist-directory
cd asset-packagist-directory
composer update
./vendor/bin/hidev install
sudo ./vendor/bin/hidev deploy
./vendor/bin/hidev asset-package/update-all
```

Known bugs:

- `composer create-project` doesn't work by a strange reason :(
- just skip red error messages 'Couldn't read ...', the are unimportant

