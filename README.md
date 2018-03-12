

<p align="center"><img src="https://thumb.ibb.co/fDOcRG/goodone.jpg"></p>


## GHOST TEMPLATE ENGINE

SilverEngine is a powerful PHP Dynamical MVC framework built for developers who need a simple and elegant toolkit to create powerfull full-featured web applications.

![Licence](https://img.shields.io/badge/Licence-MIT-green.svg)
![PHP5.6](https://img.shields.io/badge/php-5.6-blue.svg)
![version Alpha](https://img.shields.io/badge/Alpha-V1.0.0-yellow.svg)



## Documentation

The [Documentation](https://silverengine.net/docs) of the framework is still work in progress (WIP).


### Facade 

Change the name to use facade
```php 
namespace App\Facades;

use Silver\Components\Crypto\Facade;

class Example extends Facade
{
    protected static function getClass()
    {
        return '\App\Helper\Example';
    }
}
```
### Crypto

* if password is null will get by default password from  env  Env::get('app_key');

#### Engcode  encode($string, $password = null, $chiper = null)
```php 
$crypto = new Crypto();
$crypto->encode('my frist encode hash, 'testhash');

```

#### Engcode  decode($string, $password = null, $chiper = null)
```php 
echo $crypto->decode('k4j35hk4jh52k43ljh5kk2l35j', 'testhash');
```

#### Engcode  encodeArray($array, $password = null, $chiper = null)
```php 
$crypto = new Crypto();
$crypto->encodeArray('my frist encode hash, 'testhash');

```

#### Engcode  decodeArray($array, $password = null, $chiper = null)
```php 
echo $crypto->decode('k4j35hk4jh52k43ljh5kk2l35j', 'testhash');
```


#### makeHash  
```php 
$crypto = new Crypto();
$crypto->makeHash('my frist encode hash');

```
#### verifyHash  
```php 
$crypto = new Crypto();
$crypto->verifyHash('my frist encode hash', 'jh4j35g3j4h5gjk3hgk2jh5ghjhj');

```

## Contributing

Thank you for considering contributing to the framework! The contribution guide can be found in the [documentation](https://silverengine.net/docs/contributions).

## Security & Vulnerabilities

If you discover a security vulnerability within our engine, please send us email at support@silverengine.net

## License

The Silver Engine framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
