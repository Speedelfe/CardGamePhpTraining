# README for developers

## Dependencies

-   [Docker](https://www.docker.com/)
-   [Docker Compose](https://docs.docker.com/compose/install/)
-   npm
-   maybe PHP for Intellisense

## Used Tools

We write the code in "Visual Studio Code" (<https://code.visualstudio.com/>).  
Helpful for frontend development with vue.js is one of these extensions: <https://github.com/vuejs/vue-devtools#vue-devtools>

## Setup

Install dependencies, run `Start server` and `Composer install` tasks.

### Windows

On Windows you have to share the folder with this project inside of docker, otherwise docker can not start the containers.

### Linux

Make sure you can run docker commands without sudo:  
<https://askubuntu.com/questions/477551/how-can-i-use-docker-without-sudo>

## Scripts

All scripts can be called from within VScode as there are tasks for them.

### `start-server`

Starts the webserver. You can access it on port 8081.  
<http://localhost:8081>

### `stop-server`

Stop the webserver.
