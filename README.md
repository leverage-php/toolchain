# Leverage Toolchain

## Introduction

This project is designed to make it easier to get new PHP projects off the ground with strong tooling already in place.

It provides -

- Code style using PHP CS Fixer with a .php-cs-fixer.php config file
- Linting using phplint
- Static analysis using PHPStan with a phpstan.neon config file
- Unit testing using PHPUnit with the PHPStan extension installed
- A verify script that runs them all to make it easy to test everything before
you push

## Usage

```
    "require-dev": {
        "leverage-php/toolchain": "*"
    },
```

This will install all the scripts into your `vendor/bin` directory.

Most stuff will "just work" but you'll probably want to symlink PHPStan's config
file so your editor knows what the settings are.

```
ln -s vendor/leverage-php/toolchain/conf/phpstan.neon phpstan.neon
```
