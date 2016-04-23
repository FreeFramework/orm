# ORM - PHP Library

[![](https://img.shields.io/packagist/v/assouan/orm.svg)](https://packagist.org/packages/assouan/orm)
[![](https://img.shields.io/packagist/dt/assouan/orm.svg)](https://packagist.org/packages/assouan/orm)
[![](https://img.shields.io/packagist/l/assouan/orm.svg)](https://packagist.org/packages/assouan/orm)

ORM.

## Installation

Install using composer:

```bash
$ composer require assouan/orm
```

## Usage

```php
orm($table, $database, $connection);
```

## Example

```php
$pdo = new \PDO
(
    'mysql:host=localhost;port=3306;charset=UTF8',
    'root',
    '',
    array
    (
        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'',
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    )
);

ORM::setDefaultConnection($pdo);
ORM::setDefaultDatabase('user');
ORM::setDefaultTable('account');

foreach (orm()->selects() as $account)
{
    echo $account->email.'<br />';

    $profile = orm('account_profile')->selectById( $account->id );
    echo $profile->first_name.' '.$profile->last_name.'<hr />';
}
```