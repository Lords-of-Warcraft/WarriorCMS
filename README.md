# _WarriorCMS_

[![Project Status](https://img.shields.io/badge/Status-Beta-yellow.svg?style=flat-square)](#)

**WarriorCMS** is an Open Source CMS for world of warcraft p-server projects developed with [Laravel](https://laravel.com)

| Developer | Status | Tasks |
| :----------- | :---------- | :---------- |
| DuelistRage | Active | Back/Front-End Developement |

### Table of contents

[Features](#Features)

[How to Install](#HowToInstall)

[Screenshots](#Screenshots)

[Known-Bugs](#Known-bugs)

[Requirements](#Requirements)

### Features

- [x] Multi Realms
- [x] Easy to use installer
- [x] Register
- [ ] Login -- Curently under developement
- [x] Start page
- [x] Multi Language support
- [ ] Forum
- [ ] Recruit a friend
- [ ] Admin panel
- [ ] Module installer
- [ ] Profile
- [ ] Friend list
- [ ] Soap and ingame shop

### HowToInstall

1. Download the latest release [here](https://github.com/World-of-Warriors/WarriorCMS/releases/latest)
2. Unzip all files into your webserver
3. Rename the .env.example file to .env
4. Launch your application


- For more information visit the [wiki](https://github.com/World-of-Warriors/WarriorCMS/wiki/Install)

### Screenshots

![Alt text](/screenshots/Screenshot1.png?raw=true "Installer")

### Known-bugs

- Error handling views managed outside the theme because inside the view is not recognized (i don´t know why (yet))
- In Error view you are not logged in (wtf)

### Requirements

[Composer](https://getcomposer.org/)

[PHP 7.3^](https://www.php.net)

| PHP Extension | Apache2 Modules |
| :----------- | :---------- |
| Soap | Rewrite |
| Curl | Headers |
| BCMath |
| Ctype |
| Fileinfo |
| JSON |
| Mbstring |
| OpenSSL |
| PDO |
| Tokenizer |
| XML |
| GMP |

