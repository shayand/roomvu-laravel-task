## Roomvu Laravel Task

For starting simply use this command
~~~ 
docker-compose up -d
~~~ 
For stopping the containers use this command
~~~ 
docker-compose down
~~~
Then Run migration inside php container
~~~ 
php artisan migrate
~~~
## Usage
All task example has been defined as a test case, you can run it with bellow command
~~~ 
php artisan test
~~~ 
You can use postman for api guide in this directory
~~~ 
./public/roomvu.postman_collection.json
~~~
command to show users balances. Note: this command runs on daily basis
~~~ 
php artisan app:show-users-balance
~~~
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
