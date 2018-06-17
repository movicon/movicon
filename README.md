# MoViCon

A minimalist framework for PHP based on the following principles:

  * **Fast**: It's fast because it uses simple and efficient algorithms.
  * **Light**: It's light because it occupies 104kB of disk space.
  * **Soft**: It's "soft" because it only requires MySQL and PHP5.6 or later.

## Requirements

This framework requires [Composer](https://getcomposer.org/), [MySQL](https://www.mysql.com/) or [compatible](https://mariadb.org/) and a server capable of executing [PHP5.6](http://php.net/downloads.php) or later.

## Install

Open a terminal and execute the [create-project](https://getcomposer.org/doc/03-cli.md#create-project) command to generate the project structure (replace `<myproject>` by your project name):
```bash
composer create-project movicon/movicon <myproject>
```

## Project structure

The framework contains the following structure, that we'll discuss later:

```text
app/
  |-- src/
  |     |-- core/
  |     |     |-- http/
  |     |     |     |-- Controller.php
  |     |     |     |-- View.php
  |     |-- controllers/
  |     |     |-- Route1Controller.php
  |     |     |-- Route2Controller.php
  |     |     |-- ...
  |     |-- models/
  |     |     |-- Entity1Model.php
  |     |     |-- Entity2Model.php
  |     |     |-- ...
  |     |-- views/
  |     |     |-- Route1View.php
  |     |     |-- Route2View.php
  |     |     |-- ...
  |     |-- .htaccess
  |-- .htaccess
  |-- route1.php
  |-- route2.php
  |-- ...
vendor
.gitignore
composer.json
composer.lock
config.php
LICENSE
phpcs.xml
README.md
```

### top directory

Third-party libraries and config files are under the 'top directory' and they are not accessible from web.

### app/ folder

The **/app** folder represents the 'public directory' or the `DOCUMENT_ROOT`, and it is accessible from web. Note the existence of two .htaccess files:

   1. `app/.htaccess` prevents from the users to 'list' the directory.
   2. `app/src/.htaccess` prevents from the user to access files directly.
   
The files `route1.php`, `route2.php`, etc... represents the different `routes`. We'll talk about `routes` later in this tutorial.

### app/src/ folder

The **app/src/** folder contains the source code of the application. Specifically, it contains the following three important directories:

  1. `app/src/models` contains the 'models'.
  2. `app/src/views` contains the 'views'.
  3. `app/src/controllers` contains the 'controllers'.

