### Requirements:
- PHP 5.5 or newer
- PDO PHP Extension

### Features
- PHP View
- Twig Template Engine
- Eloquent Laravel
- Sentinel Authentication provider
- Include SDK Facebook
- Logger Monolog
- AdminLTE soon


##### 1 Manual Install
You can manually install by cloning this repo or download the zip file from this repo, and run ```composer install```.
```
$ git clone https://github.com/clsystems/venduse.git
$ composer install
```

##### 2 Alternative install via ```composer```
```
$ composer create-project --no-interaction --stability=dev clsystems/venduse [folder-name]
```

##### 3 Setup Permission
After composer finished install the dependencies, you need to change file and folder permission.
```
$ chmod -R 777 storage
$ chmod 666 config/database.php
```

##### 4 Configuration Database and Setting App
Configuration file located in ```config```, edit the database.php, setting.php

##### 5 Run ```php migrate```
```
$ php migrate
```

##### 6 Run Server  ```php -S localhost:8000 -t public```
```
$ php -S localhost:8000 -t public
```

### That's it!
