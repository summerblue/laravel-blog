<p align="center">
  <br>
  <b>创造不息，交付不止</b>
  <br>
  <a href="https://www.yousails.com">
    <img src="https://yousails.com/banners/brand.png" width=350>
  </a>
</p>

## Introduction

Laravel-Blog is a blog project written in Laravel 4.2. 

## Screenshots

### Article List Page

![](http://ww2.sinaimg.cn/large/6d86d850gw1el7mi6b3bzj20u40kvn13.jpg) 

### Article composing page

![](http://ww4.sinaimg.cn/large/6d86d850jw1el7mmy4ubjj20ua0nqdjd.jpg)

### Single post page

![](http://ww2.sinaimg.cn/large/6d86d850jw1el7mz0m45aj20uc0o6whv.jpg)

### Admin Panel

![](http://ww3.sinaimg.cn/large/6d86d850jw1el7mycokl4j20ub0o4gp8.jpg)

## Packages

* [laracasts/flash](https://github.com/laracasts/flash) for easy notify user action;
* [zizaco/entrust](https://github.com/Zizaco/entrust) for user Role-based Permissions;
* [zizaco/confide](https://github.com/Zizaco/confide) for user authentication;
* [thujohn/rss](https://github.com/thujohn/rss-l4) for generate rss feed;
* [mews/purifier](https://github.com/mewebstudio/Purifier) for XSS filtering;
* [frozennode/administrator](https://github.com/FrozenNode/Laravel-Administrator) for quick simple admin interface;
* [cviebrock/eloquent-sluggable](https://github.com/cviebrock/eloquent-sluggable) for generate slug;
* [cviebrock/eloquent-taggable](https://github.com/cviebrock/eloquent-taggable) for post tag relationship;

## Todos

* php-spec test;

## Features

* Support multiple user;
* Admin Interface;
* Rich editor, include paste image and stuff;
* Rss feed;
* Pjax Support;
* Sroll To Top;

## Requirements and Environment

* PHP 5.4+
* Laravel 4.2+

## Installation

Recommended using [Homestead](http://laravel.com/docs/4.2/homestead) for development.

### 1. Clone the repo

    git clone https://github.com/summerblue/laravel-blog

### 2. Composer install

    cd laravel-blog
    composer install
    
### 3. Database stuff

Ajust the database information, then: 

    php artisan migrate

Seed the database if you want: 

    php artisan db:seed

### 4. Info

* Admin Account: ['username' => 'admin', 'password' => 'admin']


## Contributors

[On the Project Contributors Page](https://github.com/summerblue/phphub/graphs/contributors)

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

Copyright (c) 2014 CJ.

The MIT License (MIT). Please see [Opensource MIT License](http://www.opensource.org/licenses/MIT) for more information.
