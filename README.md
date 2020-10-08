# spacemy.xyz-rebooted
Just  fork/faithful recreation of typicalname0/spacemy.xyz

## Dependencies
The PHP version is 7.3, you may try using an earlier PHP verison but I don't know if it works or not.

It is based on MySQLi and MySQL Server.

It requires Composer... You should've know how to use Composer though.

It also uses [SteamAuthentication](https://github.com/SmItH197/SteamAuthentication)

## How to Setup the Forums
```sh
git clone https://github.com/the-real-sumsome/spacemy.xyz-rebooted.git
mv /your/git/directory /your/webserver/dir/
cd /your/webserver/dir/
php composer.phar install

sudo nano static/config.inc.php
get a steam api key from http://steamcommunity.com/dev/apikey
get a recaptcha priv/pub key from https://www.google.com/recaptcha/admin

import the sql file into phpmyadmin/whatever

sudo service apache2 start
```
You're done! Congratulations on being an awful copy cat trying to copy MY GITHUB FORK.

## Notes
This is a project just for experimenting with PHP. You can help contribute if there are any security issues.

If you're using this repository to start your own forums, you need to change some of the texts in the PHP files since it has the "spacemy.xyz" things.

## Big Thanks
To everyone who has helped me the development of spacemy.xyz-rebooted
