### setup
    docker compose up

you have to include **127.0.0.1 docker.localhost** under your host files
and it will be avaliabe on [docker.localhost](docker.localhost)
you can change the name on [site.conf](/site.conf)

### access containers
    docker exec -it php-fpm bash
    docker exec -it mysql bash

### migrate
this framework have an build in migration feature, and you can migrate doing

    docker exec -it php-fpm sh -c "cd scripts/ && php migrate.php"

### models
for models referr to [models](https://redbeanphp.com/index.php?p=/models)


#### saving for later
https://redbeanphp.com/index.php?p=/import_and_export