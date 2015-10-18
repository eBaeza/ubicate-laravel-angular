# Demo ubícate searcher with Laravel and Angular

### Install laravel dependencies
```sh
$ sudo composer install
```

###  Configurate the database in .env file
* Create in the root directory the `.env` file based in `.env.example` file
* Generate a key `$ php artisan key:generate`
* Set the configuration of your database inside the `.env` file
```
DB_HOST=localhost
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

### Create migrations and generate seeders
```sh
$ php artisan migrate --seed
```

### Execute All Registered Gulp Tasks Once
First you need to install all dependencies

```sh
$ sudo npm install
```
And execute
```sh
$ gulp
```
Watch Assets For Changes
```sh
$ gulp watch
```

### Are you having troubles with this [PDOException] SQLSTATE[HY000] [2002] No such file or directory  in Mac OS?

The solution is this:

* Create the `/mysql` directory into `/var`
* To know the location of mysql.sock execute: `$ ps -ax|grep mysql` and search `--socket=/path/of/mysql.sock`
* And do this
```sh
$ cd /var/mysql
$ ln -s /path/of/mysql.sock /var/mysql/mysql.sock
```
* Restart the serve of mysql