#!/bin/bash
sudo docker run --rm --interactive --tty \
  --volume $PWD/www:/app \
  composer update
