#!/bin/bash
docker run --rm --interactive --tty \
  --volume $PWD/www:/app \
  composer install
