#!/bin/bash
#
# Get a one-time login link to your development environment.
#
set -e

echo ''
echo ' => Drupal (superadmin): '"$(docker-compose exec -T drupal /bin/bash -c "drush -l http://$(docker-compose port webserver 80) uli --name=superadministrator")"
echo ' => Drupal (admin): '"$(docker-compose exec -T drupal /bin/bash -c "drush -l http://$(docker-compose port webserver 80) uli --name=administrator")"
echo ' => Drupal (editor): '"$(docker-compose exec -T drupal /bin/bash -c "drush -l http://$(docker-compose port webserver 80) uli --name=content_editor")"
source ./.env
export TARGET_ENV="$CURRENT_TARGET_ENV"
source ./scripts/lib/hook.source.sh uli
echo ''
