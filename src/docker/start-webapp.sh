#!/bin/bash -eu

nginx -g 'daemon off;' &

php-fpm --nodaemonize
