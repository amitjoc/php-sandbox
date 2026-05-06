# php-sandbox
Php sandbox environment

Please refer to the [CHANGELOG.md](CHANGELOG.md) for detailed release notes and feature updates.


## Git Action Added 


## Dev Dependency  
```
composer require --dev phpunit/phpunit
```

## Core Php 

### enum  
This is `enum` base small project for learning.  
- [TaskManager Project Folder](/public/php8_1/enum/)
- [README for TaskManager](/public/php8_1/enum/enumREADME.md)  

### Interface
Practice and understanding of PHP interfaces, including a `Book` class implementation.

### Iterator
Examples and practice demonstrating the use of PHP Iterators.

### SPL
Understanding and features of the Standard PHP Library (SPL).

### Overloading
Examples of method and property overloading in PHP.

### PHP 7 Features
Examples covering abstract classes, PHP 7 scalar type hints, and usage of `int`, `float`, and `null` variables.

### Coding Problems & Solutions
A collection of PHP coding challenges and solutions, including:
- Finding the second largest element in an array
- Binary triangle generation

## Design Pattern Code added 

### Singleton Pattern

- [x] Simple implemetations of Database singleton implementation 
  - [x] `private static instance` variable with default `null` so that outside access restricted by private 
  - [x] instance creation is controlled by `public static function getInstance()`
  - [x] `constructor()` is private no posibility of accidental `new`
  - [x] instance creation is safe due to `getInstance()` function 
  - [ ] but it is not  `clone` safe
