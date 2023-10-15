# Magento 2 Free Shipping Module


## 1. How to install Magento 2 Free Shipping Module

Add the following lines into your composer.json
 
```
"require":{
    ...
    "solution-pioneers/magento2-free-shipping":"{version}"
 }
```
or install via composer

```
composer require solution-pioneers/magento2-free-shipping
```

Then execute the following commands:

```
$ composer update
$ bin/magento setup:upgrade
$ bin/magento setup:static-content:deploy
```