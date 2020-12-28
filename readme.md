
Abide
===

Hi. I'm the theme. I'm not a nihilist, or a marmot, and obviously not a golfer. I am however a wordpress theme based on _s with sass watch and browser sync, to really tie the room together
* Licensed under GPLv2 or later. :) This isn't 'nam, this is wordpress. There are rules.

Installation
---------------

### Requirements

recipe for white russians:

- [Node.js](https://nodejs.org/)
- [Composer](https://getcomposer.org/)
- [Multiple Post Thumnails](https://github.com/voceconnect/multi-post-thumbnails/)
- [TB "Artists" plugin](gitlinktocome)

### Quick Start


### Setup

To start abiding you need to install the necessary Node.js and Composer dependencies :

```sh
$ composer install
$ npm install
```

### Available CLI commands
-to start run
```sh
$ npm start
```
abide comes packed with CLI commands tailored for WordPress theme development :

- `composer lint:wpcs` : checks all PHP files against [PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).
- `composer lint:php` : checks all PHP files for syntax errors.
- `composer make-pot` : generates a .pot file in the `languages/` directory.
- `npm run compile:css` : compiles SASS files to css.
- `npm run compile:rtl` : generates an RTL stylesheet.
- `npm run watch` : watches all SASS files and recompiles them to css when they change.
- `npm run hotload` : turns on browser sync at a specified local proxy url.
- `npm run lint:scss` : checks all SASS files against [CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/).
- `npm run lint:js` : checks all JavaScript files against [JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/).
- `npm run bundle` : generates a .zip archive for distribution, excluding development and system files.
