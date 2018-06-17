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

The framework contains the following structure, that we'll study next:

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
The **/app** folder represents the 'public directory'.
