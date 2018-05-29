# Base58 PHP compat

Userspace fallback for [base58 PHP extension](https://github.com/legalthings/base58-php-ext) using the
[stephenhill/base58](https://github.com/stephen-hill/base58php) library.

Relying on userspace functions for base58 encoding an decoding is **not** recommended as these perform 100 times slower
than the base58 extension.

