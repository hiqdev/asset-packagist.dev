asset-packagist.dev
===================

[![Latest Stable Version](https://poser.pugx.org/hiqdev/asset-packagist.dev/v/stable)](https://packagist.org/packages/hiqdev/asset-packagist.dev)
[![Total Downloads](https://poser.pugx.org/hiqdev/asset-packagist.dev/downloads)](https://packagist.org/packages/hiqdev/asset-packagist.dev)
[![Build Status](https://img.shields.io/travis/hiqdev/asset-packagist.dev.svg)](https://travis-ci.org/hiqdev/asset-packagist.dev)
[![Scrutinizer Code Coverage](https://img.shields.io/scrutinizer/coverage/g/hiqdev/asset-packagist.dev.svg)](https://scrutinizer-ci.com/g/hiqdev/asset-packagist.dev/)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/hiqdev/asset-packagist.dev.svg)](https://scrutinizer-ci.com/g/hiqdev/asset-packagist.dev/)
[![Dependency Status](https://www.versioneye.com/php/hiqdev:asset-packagist.dev/dev-master/badge.svg)](https://www.versioneye.com/php/hiqdev:asset-packagist.dev/dev-master)

## Installation

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

## License

This project is released under the terms of the BSD-3-Clause [license](LICENSE).
Read more [here](http://choosealicense.com/licenses/bsd-3-clause).

Copyright © 2016, HiQDev (http://hiqdev.com/)
