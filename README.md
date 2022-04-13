# Micro-Framework
A simple MVC framework for study using PHP.
 
## Project
* Status: Done :white_check_mark:

### 🛠 Technologies
The following technologies were used to build this project.

<ul>
 <li><a href="https://www.php.net/">PHP</a></li>
 <li><a href="https://getcomposer.org/">Composer</a></li>
 <li><a href="https://getbootstrap.com/">Bootstrap</a></li>
 </ul>


## How to use

### Install the dependencies

 ```bash 
 
composer install

```

### Start the server

```bash

php -S localhost:8000

```

### Creating the database table

You can create a users table for this example.

``` postgresql

CREATE TABLE users (
    id int PRIMARY KEY,
    name varchar(100) NOT NULL,
    email varchar(90) NOT NULL,
    password varchar(61) NOT NULL
);

```

### Start the server

```bash

php -S localhost:8000/register.php

```

### Router
The router.php file is where the routes are

Inside of initRoutes function you can create new routes if you need.

``` php

    $router['routename'] = [
            'route' => '/url',
            'controller' => 'controller',
            'action' => 'index'
        ];

```


### Author:
```
yantenorio64@gmail.com
```
<script src="https://gist.github.com/rxaviers/7360908.js"></script>
