<br><br><p align="center"><a target="_blank"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvIvhVFy1MDmQuS45t5y_w2SAYaFaM84SU0fTVYUMZPY3tsBcxLtodacf7iulwWFTK9xU&usqp=CAU" width="300" alt="Loja Leiturinha"></a></p><br>

## About

-

### Requirements:

- [PHP >= 7.3](https://www.php.net/);
- [Docker](https://www.docker.com/) and [Docker-Compose](https://docs.docker.com/compose/);
- [Composer](https://getcomposer.org/download/);

### Standards:

- [PHP - PSR-12](https://www.php-fig.org/psr/psr-12/);
- [Conventional Commits](https://www.conventionalcommits.org/);

## Let's get started!

After completing all requirements, you can navigate to your application directory and run the following commands on your terminal:

- `composer install`
- `cp .env.example .env`
- `php artisan key:generate`
- `php artisan jwt:secret`

_After that, you should register your personal keys on the **.env** file._

### To build the project, you may run the following command:

This project was built using the Lumen framework, so to run it locally, you may run the following command:

* `docker-compose up -d`

Now do you have two new containers running...
* `nft_app`
* `nft_db`

If this is your first try at this project, you should do this:

- Run on your project folder terminal the following command: `docker exec -it nft_app bash`;

- And then, inside the application container, run `php artisan migrate`;

## API Documentation

To apply the changes made to the controller notations, run the command `composer docs`.
After that can you go to url `http://localhost/api/documentation`

Maybe the error 'Failed to load API definition' appears in the /documentation route. To solve it, you need to grant write permission to the storage/api-docs/ directory.

Run the command: `chmod -R 777 storage/api-docs/`

## Running Tests
To run tests, execute same the follow commands in the bash terminal.
* `composer test`  or
* `composer testdox`  or
* `vendor/bin/phpunit --testdox`


## Good luck and have fun :)
