# CardGamePhpTraining

[![Project Status: WIP – Initial development is in progress, but there has not yet been a stable, usable release suitable for the public.](https://www.repostatus.org/badges/latest/wip.svg)](https://www.repostatus.org/#wip)

<!--[![GitHub Release](https://img.shields.io/github/release/Speedelfe/CardGamePhpTraining.svg)](https://github.com/Speedelfe/CardGamePhpTraining/releases/latest)
[![Github Pre-Release](https://img.shields.io/github/release/Speedelfe/CardGamePhpTraining/all.svg?label=prerelease)](https://github.com/Speedelfe/CardGamePhpTraining/releases)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/01010101010101010101010?branch=production)](https://app.codacy.com/manual/Speedelfe/CardGamePhpTraining/dashboard?bid=01010101)-->

[![GitHub License](https://img.shields.io/badge/license-MIT-blue.svg)](https://raw.githubusercontent.com/Speedelfe/CardGamePhpTraining/master/LICENSE.txt)

## Development

<!--[![Build Status](https://github.com/Speedelfe/CardGamePhpTraining/workflows/Continuous%20Integration/badge.svg)](https://github.com/Speedelfe/CardGamePhpTraining/actions)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/01010101010101010101010?branch=master)](https://app.codacy.com/manual/Speedelfe/CardGamePhpTraining/dashboard?bid=01010101)-->

### Dependencies

-   [Docker](https://www.docker.com/)
-   [Docker Compose](https://docs.docker.com/compose/install/)
-   npm
-   maybe PHP for Intellisense

### Windows

On Windows you have to share the folder with this project inside of docker, otherwise docker can not start the containers.

### Linux

Make sure you can run docker commands without sudo:  
<https://askubuntu.com/questions/477551/how-can-i-use-docker-without-sudo>

### Used Tools

We write the code in "Visual Studio Code" (<https://code.visualstudio.com/>).  
Helpful for frontend development with vue.js is one of these extensions: <https://github.com/vuejs/vue-devtools#vue-devtools>

### Scripts

#### `start-server`

Starts the webserver. You can access it on port 8081.  
<http://localhost:8081>

#### `stop-server`

Stop the webserver.

## Acknowledgements

Big THANKS to:

-   <https://github.com/albertcolom/docker-lemp> which we used for basic docker setup
