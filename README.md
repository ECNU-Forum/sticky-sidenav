# Sticky Sidenav

![License](https://img.shields.io/badge/license-MIT-blue.svg) [![Latest Stable Version](https://img.shields.io/packagist/v/ecnu-im/sticky-sidenav.svg)](https://packagist.org/packages/ecnu-im/sticky-sidenav) [![Total Downloads](https://img.shields.io/packagist/dt/ecnu-im/sticky-sidenav.svg)](https://packagist.org/packages/ecnu-im/sticky-sidenav)

A [Flarum](http://flarum.org) extension. Make the sidenav section sticky and scrollable. Also support [hot-discussions widget](https://github.com/justoverclockl/hot-discussions).

## Motivation

Usually when we make the sidenav section sticky, we have to scroll to the bottom of the page to view the tags that are not shown in the first place. This extension resolves the problem by making the sidenav scrollable, which can be useful when using the [AutoMore](https://github.com/noriods/automore) extension.

## Scrollbar

The scrollbar will appear only if there are too many tags AND the mouse is hovering above the sidenav. Example screenshot:

![image](https://user-images.githubusercontent.com/32540679/162741325-5e3bdc75-424e-49ff-ae8f-8756a2d15a39.png)

## Installation

Install with composer:

```sh
composer require ecnu-im/sticky-sidenav
```

## Updating

```sh
composer update ecnu-im/sticky-sidenav
php flarum migrate
php flarum cache:clear
```

## Links

- [Packagist](https://packagist.org/packages/ecnu-im/sticky-sidenav)
- [GitHub](https://github.com/ECNU-Forum/sticky-sidenav)
- [Discuss](https://discuss.flarum.org/d/30579-sticky-sidenav)
