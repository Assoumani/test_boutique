# Test Boutique

As part of a recruitment, I had to make a web application for an ecommerce website respecting a specification. Here is the result

## 1. Import project

Requirements : composer and npm

```
$ git clone https://github.com/Assoumani/test_boutique.git
```
```
$ cd test_boutique
```

## 2. install project

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
$ php bin/console doctrine:fixtures:load
```

## 4. preparing

```
$ php bin/console cache:clear
```

## 5. Run project

```
$ php -S localhost:8000 -t public ## (port 8000 must be free, if not choose another one free in place)
```
```
$ In your browser, navigate to [http://localhost:8000](http://localhost:8000)
```


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
How to play tests
```
$ php bin/phpunit tests/Util
$ php bin/phpunit tests/Controller
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
no licence
