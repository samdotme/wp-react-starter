# Wordpress React Theme Dev Starter
## wp-react-starter
This is a full-featured Wordpress theme development environment to get a Wordpress website up and running quick. 

- Uses React with Typescript. 
- Builds with webpack and npm scripts.
- Runs on Docker.
- Includes a `bitbucket-pipelines.yml`, if you're into that.

## Getting started
### Compile scripts and styles
Run `$ npm run dev` to compile scss and js files.

### Running with Docker
Run `$ docker-compose up -d` to get going. Once everything is finished, visit `http://localhost`.

Note: This assumes nothing else is already running on localhost. If you're on a Mac, that may not be the case by default. You can get around this by adding a port to your `docker-compose.yml`.

Also, you'll need to have Docker [installed](https://docs.docker.com/install/).

## Going to Production
The purpose of this repo is to give you a local environment for building out your own Wordpress theme. However, if you're comfortable running Docker in a production environment, you certainly can use this repo as a base for that as well.

Before going to production, just make sure you use real passwords instead of the dummy ones in the `secrets` folder, deal? ;) A good example of how to dynamically insert secure passwords via a build pipeline is in `bitbucket-pipelines.yml`.

## Next steps for dev
- Add Jest test framework for testing React and Gutenberg modules.
- Add php unit tests for Wordpress.
