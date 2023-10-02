#!/bin/bash
#
# Linting.
#
set -e

echo 'Linting PHP files with https://github.com/dcycle/docker-php-lint'
echo 'If you are getting a false positive, use:'
echo ''
echo '// @codingStandardsIgnoreStart'
echo '...'
echo '// @codingStandardsIgnoreEnd'
echo ''
echo 'To automatically fix errors, you can run:'
echo ''
echo './scripts/lint-php-fix.sh'
echo ''

docker run --rm -v \
  "$(pwd)"/drupal/custom-modules:/code \
  dcycle/php-lint:3 \
  --ignore=*/lineIcons.css \
  --standard=DrupalPractice /code
docker run --rm -v \
  "$(pwd)"/drupal/custom-modules:/code \
  dcycle/php-lint:3 \
  --ignore=*/lineIcons.css \
  --standard=Drupal /code

echo 'Linting shell scripts with https://github.com/dcycle/docker-shell-lint'
echo ''
echo 'To ignore certain lines you can do'
echo ''
echo '# shellcheck disable=SC2016'
echo ''

docker run --rm -v "$(pwd)":/code dcycle/shell-lint:2 ./scripts/lint.sh
docker run --rm -v "$(pwd)":/code dcycle/shell-lint:2 ./scripts/https-deploy.sh
