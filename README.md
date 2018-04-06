

Laravel 5.x API wrapper package for the Multichain blockchain. Please read the Credits. 

## Features
- Simple Multichain JsonRPC interface.
- Full Multichain API implementation.

Note: Support for Multichain Version 1.0 alpha 26 released on 28 November 2016 should be released early 2017.  

## Example usage
```
$mchain = MultiChain::getInfo();
```
## Installation
Require the package 
``` bash
$ composer require keshav1990/laravel-multichain
```
Add service provider class to `providers` section of `app.php` located in `config` directory 
``` 
'providers' => [
        .
        .
        .
		        Ayou\Multichain\MultiChainServiceProvider::class,
]
```
Add facade to `aliases` section of `app.php` located in `config` directory. 
``` 
'aliases' => [
        .
        .
        .
		        'MultiChain' => Ayou\Multichain\Facade\MultiChain::class,
]
```
Publish configuration file

``` bash
$ php artisan vendor:publish --tag=config
```
This will publish the `multichain.php` configuration file to `config` directory.
## Configuration
Edit `multichain.php` loated in the `config` directory providing the required credentials as per the `multichain.conf` file on the node you wish to access.

## Usage

Refer to the following documentation:

1. Multichain JSON-RPC API commands (http://www.multichain.com/developers/json-rpc-api/)
