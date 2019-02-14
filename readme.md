# Lumen REST example

A small example service set up with mongo db and RESTful resource structure.

## How to run


```
# clone the repo
git clone git@github.com:sugarfixx/rest-service.git

# install dependencies
cd rest-servicew && composer install

# copy example environment
cp .env.example .env
````

Run project

````
cd laradock && docker-compose up -d nginx mongo
````

Open browser at localhost/users to interact with the sample user resource.
If no user :

```
# log into the container using
docker-compose exec --user=laradock workspace bash

# manually run the migrations
php artisan db:seed
```
