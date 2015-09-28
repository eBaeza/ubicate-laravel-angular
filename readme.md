# Demo ubícate searcher with Laravel and Angular

### Install laravel dependencies
```sh
$ sudo composer install
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

### Are you having troubles with this in Mac OS?
![alt text](https://s3.amazonaws.com/uploads.hipchat.com/12808/41232/sZ1uvBux6RHyWnP/Captura%20de%20pantalla%202015-09-27%20a%20la%28s%29%2017.24.39.png "trouble")

The solution is this:

* Create the `/mysql` directory into `/var`
* To know the location of mysql.sock execute: `$ ps -ax|grep mysql` and search `--socket=/path/of/mysql.sock`
* And do this
```sh
$ cd /var/mysql
$ ln -s /path/of/mysql.sock /tmp/mysql.sock
```
* Restart the serve of mysql