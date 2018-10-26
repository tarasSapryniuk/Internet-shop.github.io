
## Requirements
	PHP >= 5.6.4
	MySQL >= 5.7
	OpenSSL PHP Extension
	PDO PHP Extension
## Install
	git clone https://github.com/tarasSapryniuk/internet-shop.github.io.git
	
Install Composer

```
[Download Composer](https://getcomposer.org/download/)
```

composer update/install 

```
composer install
```

## How to setting

Import <b>phpshop.sql</b> and change parameters Connection to Database in file <b>config/db_params.php</b>

```
'host' => 'your_host',
'dbname' => 'name_your_database',
'user' => 'username',
'password' => '******',
```
