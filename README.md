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

### Root directory

Third-party libraries and config files are under the 'top directory' and they are not accessible from web.

### app/ folder

The **/app** folder represents the 'public directory' or the `DOCUMENT_ROOT`, and all assets under this folder are accessible from the web. Note the existence of these two .htaccess files:

   1. `app/.htaccess` prevents from the users to 'browse' the directory.
   2. `app/src/.htaccess` prevents from the user to access files directly.
   
Configuration files and thirdty-party libraries are at the same level of the `app/` folder and they are inaccessible from the web.
   

