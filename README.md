[![Build Status](https://travis-ci.com/elasyaf/wordpress.svg?branch=master)](https://travis-ci.com/elasyaf/wordpress)

# wordpress

__wordpress__ builder using docker

## How To

1. Clone.

   ```
   git clone https://github.com/elasyaf/wordpress
   ```

2. Build docker image.
 
   ```
   docker build -t <your_repo_name>/wordpress:<tag> 
   example : 0xelasyaf/wordpress:latest
   ``` 

3. With docker compose.
 
```
version: "2.0"
services:
  mariadb:
    image: '0xelasyaf/mariadb:latest'
    container_name: dbserver
    environment:
      - NEW_USER=<your_new_user>
      - NEW_PASSWORD=<your_password_for_new_user>
      - NEW_DATABASE=<your_db_for_wordpress>

  webserver:
    image: 0xelasyaf/wordpress:latest
    container_name: wordpress
    links:
        - mariadb
    ports:
        - '80:80'

 ``` 

License
------------------

GPL-3.0


Author Information
------------------

elasyaf @ 2019

