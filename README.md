# Test Boutique

As part of a recruitment, I had to make a web application for an ecommerce website respecting a specification. 

Here is the specs : https://github.com/Assoumani/test_boutique/blob/master/Test%20Symfony.pdf 

Here is the result

## 1. Import project

```
$ git clone https://github.com/Assoumani/test_boutique.git
```
```
$ cd test_boutique
```

## 2. install project

Requirements : composer and npm

```
$ composer install
```
```
$ npm install
```
```
$ npm run build
```

## 3. Create and filling database

```
$ php bin/console doctrine:database:create
```
```
$ php bin/console doctrine:schema:update --force
```
```
$ php bin/console doctrine:fixtures:load (Respond "yes" about the database's purge)
```

## 4. preparing

```
$ APP_ENV=prod APP_DEBUG=0 php bin/console cache:clear
```
```
In your .env file change APP_ENV=dev to APP_ENV=prod
```

## 5. Run project
Using symfony server (recommanded)
```
$ symfony serve -d
$ symfony open:local (to navigate to the home page)
```
Using php server
```
$ php -S localhost:8000 -t public ## (port 8000 must be free, if not choose another one free in place)
```
In your browser, navigate to http://localhost:8000

## 6. Usage
How to access admin dashboard 
```
http://localhost:8000/en/admin
    login: admin
    password: password
```
How to access to the API
```
http://localhost:8000/api/products
```
How to export products in csv file
```
http://localhost:8000/csv
```
How to play tests
```
$ php bin/phpunit tests/Util
$ php bin/phpunit tests/Controller
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.
Please make sure to update tests as appropriate.

## License
no license
