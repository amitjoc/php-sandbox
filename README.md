# php-sandbox
Php sandbox environment


## Git Action Added 


## Dev Dependency  
```
composer require --dev phpunit/phpunit
```

## Core Php 

### Interface

### Iterator

### SPL

## Design Pattern Code added 

### Singleton Pattern

- [x] Simple implemetations of Database singleton implementation 
  - [x] `private static instance` variable with default `null` so that outside access restricted by private 
  - [x] instance creation is controlled by `public static function getInstance()`
  - [x] `constructor()` is private no posibility of accidental `new`
  - [x] instance creation is safe due to `getInstance()` function 
  - [ ] but it is not  `clone` safe

