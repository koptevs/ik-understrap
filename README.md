# ik-understrap 
Exploring Understrap - Wordpress starter theme.

## Project Setup

### Install Wordpress and plugins with composer.

Make project root folder. 
```shell
$ mkdir ik-word
$ cd ik-word
$ touch composer.json
```
composer.json:
```shell
{
  "require": {},
  "repositories": [
    {
      "type": "composer",
      "url": "https://wpackagist.org"
    }
  ],
  "extra": {
    "installer-paths": {
      "wordpress/wp-content/plugins/{$name}/": [
        "type:wordpress-plugin"
      ],
      "wordpress/wp-content/themes/{$name}/": [
        "type:wordpress-theme"
      ]
    }
  }
}
```
Install Wordpress and plugins.
```shell
$ composer require johnpbloch/wordpress
$ composer require wpackagist-plugin/advanced-custom-fields
```
Final composer.json:
```shell
{
  "require": {
    "johnpbloch/wordpress": "^6.0",
    "wpackagist-plugin/advanced-custom-fields": "^5.12",
    "wpackagist-plugin/contact-form-7": "^5.6",
    "wpackagist-plugin/show-current-template": "^0.4.6",
    "wpackagist-plugin/debug-bar": "^1.1",
    "wpackagist-plugin/theme-check": "20211203",
    "wpackagist-plugin/cyr2lat": "^5.3",
    "wpackagist-plugin/wps-hide-login": "^1.9"
  },
  "repositories": [
    {
      "type": "composer",
      "url": "https://wpackagist.org"
    }
  ],
  "extra": {
    "installer-paths": {
      "wordpress/wp-content/plugins/{$name}/": [
        "type:wordpress-plugin"
      ],
      "wordpress/wp-content/themes/{$name}/": [
        "type:wordpress-theme"
      ]
    }
  }
}
```
To reproduce project installation copy this file and run:
```shell
$ composer install
```

### Get Understrap theme
Download heme from official git repo - https://github.com/understrap/understrap.
Wordpess adminpanel theme installation goes without build system.
