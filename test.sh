#!/bin/bash
set -e

# yarn
yarn install
yarn prod

# php code quality
./vendor/bin/phpcs --standard=PSR2 --extensions=php ./app ./tests
./vendor/bin/phpstan analyse tests/Unit tests/Feature app/Http/Controllers/*Controller.php --level=5

# php tests
./vendor/phpunit/phpunit/phpunit tests/Unit/*
./vendor/phpunit/phpunit/phpunit tests/Feature/*

# js tests
yarn js:test:prod
