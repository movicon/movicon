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
public/  <!-- public directory or DOCUMENT_ROOT
  |-- route1.php
  |-- route2.php
  |-- ...
  |-- .htaccess
src/ <!-- source code
  |-- core/ <!-- 'internal classes'
  |     |-- http/
  |     |     |-- Controller.php <!-- the base class of any controller
  |     |     |-- View.php       <!-- the base class of any view
  |-- models/      <!-- the 'models'
  |     |-- Entity1Model.php
  |     |-- Entity2Model.php
  |     |-- ...
  |-- views/       <!-- the 'views'
  |     |-- Route1View.php
  |     |-- Route2View.php
  |     |-- ...
  |-- controllers/ <!-- the 'controllers'
  |     |-- Route1Controller.php
  |     |-- Route2Controller.php
  |     |-- ...
vendor/        <!-- third-party libraries
config.php     <!-- config file
composer.json  <!-- composer libraries
composer.lock
.gitignore
LICENSE
phpcs.xml
README.md
```

### `public/` folder

The `public/` folder contains the 'routes' and any other assets accessible from the web. It represents the `DOCUMENT_ROOT`. We'll talk about 'routers' later in this manual.

### `source/` folder

The `source/` folder contains the source code of the project. It has three relevant folders representing the [Model View Controller](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller) pattern:

 1. `source/models`: This folder contains the 'models'.
 2. `source/views`: This folder contains the 'views'.
 3. `source/controllers`: This folder contains the 'controllers'.

Additionally this folder contains the `source/core` folder, containing the 'internal classes'.
