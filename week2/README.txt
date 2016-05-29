# Hello Docker 
_Hello Docke_ is a simple program that prints out **"Hello, Docker"** on the console when you run the Docker container.

## Prerequisites
To run the *Hello Docker* program, you need to install Docker depending on the Operating System and architecture of the computer you are working on. The detailed documentation can be found [here](https://docs.docker.com/engine/installation/)

## Creating a Docker image
You need to create a text file titled Dockerfile which contains all the commands a user could call on the command line to assemble an image. Once this Dockerfile is created, you need to give the **docker build** command to build a Docker image from the commands contained in the Dockerfile. The format for creating the image is 
```sh 
$sudo docker build -t [tag-name] .
```
This build process may take some time depending on the packages included in the Docker file.

## Run a Docer image
To runa docker image, you need to invoke the **docker run** command. To run the file just enter
```sh
$ docker run [tag-name]
```
in your shell. In case of our image, **Hello, docker** is output on the shell .
