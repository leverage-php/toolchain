# architech/php-tools

## Introduction

This project is designed to make it easier to get new PHP projects off the ground with strong tooling already in place.

It provides -

- Code style using PHP CS Fixer with a .php-cs-fixer.php config file
- Linting using phplint
- Static analysis using PHPStan with a phpstan.neon config file
- Unit testing using PHPUnit with the PHPStan extension installed

## Tooling

### Docker

The provided Dockerfile is capable of running everything.  Checkout docker-compose.yml for an example of the minimum config required to build and run it.

### PHP CS Fixer

PHP Tools provides a DFY config file for PHP CS Fixer.  You'll need to reach
inside the vendor directory for this project to access it.

Remove --dry-run to execute the diffs.

```
docker-compose run php vendor/bin/php-cs-fixer fix \
    --config vendor/architech/php-tools/conf/.php-cs-fixer.php \
    --diff \
    --dry-run \
    src/ test/
```

### PHPLint

PHPLint requires no additional config and can be run straight out of the box.

```
docker-compose run php vendor/bin/phplint . --exclude=vendor
```

### PHPStan

PHP Tools provides a DFY config file for PHPStan.  You'll need to reach inside the vendor directory for this project to access it.

```
docker-compose run php vendor/bin/phpstan analyse \
    -c vendor/architech/php-tools/conf/phpstan.neon \
    --level 8 \
    src/ test/
```

### PHPUnit

PHPUnit requires no additional config and can be run straight out of the box.

```
docker-compose run php vendor/bin/phpunit test/
```

## Development

If you need to contribute to this project, you should check out the scripts in dev/, specifically dev/verify.  That is setup to run the same checks as BitBucket pipeline will so you can run them locally without needing to push to run all the tools together.

It'll tell you what steps failed, then you can rerun just the steps you need from dev/ to get the full output.
