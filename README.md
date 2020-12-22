# spacemy.xyz-rebooted
A fork/faithful recreation of typicalname0/spacemy.xyz

## Dependencies
- Composer
- [SteamAuthentication](https://github.com/SmItH197/SteamAuthentication)
- PHP >=7.3
- MySQL

## Setup
```
git clone https://github.com/the-real-sumsome/spacemy.xyz-rebooted.git
mv /your/git/directory /your/webserver/dir/
cd /your/webserver/dir/
php composer.phar install

sudo nano static/config.inc.php
# get a steam api key from http://steamcommunity.com/dev/apikey
# get a recaptcha priv/pub key from https://www.google.com/recaptcha/admin
# import the sql file into your databsae

sudo service apache2 start
```

## Notes
This is a project meant for tinkering with PHP. You can contribute at any time if you see an issue that needs fixing.

## Special thanks to
Everyone who has helped me web dev
