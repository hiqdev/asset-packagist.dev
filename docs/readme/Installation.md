Use the following script:

```sh
git clone https://github.com/hiqdev/asset-packagist.dev asset-packagist-directory
cd asset-packagist-directory
composer update
./vendor/bin/hidev install
./vendor/bin/hidev asset-package/update-all
```

Known bugs:

- `composer create-project` doesn't work by a strange reason :(
- excessive red error messages 'Couldn't read ...' are unimportant

