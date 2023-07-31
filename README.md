# TR String Str Facade Extend

<div style="text-align: center">
<a href="https://packagist.org/packages/netkod-bilisim/tr-string-str-facade-extend" rel="nofollow">
    <img src="https://img.shields.io/packagist/v/netkod-bilisim/tr-string-str-facade-extend" alt="Latest Stable Version">
</a>

<a href="https://packagist.org/packages/netkod-bilisim/tr-string-str-facade-extend" rel="nofollow">
    <img src="https://img.shields.io/packagist/dt/netkod-bilisim/tr-string-str-facade-extend" alt="Total Downloads">
</a>

<a href="https://packagist.org/packages/netkod-bilisim/tr-string-str-facade-extend" rel="nofollow">
    <img src="https://poser.pugx.org/netkod-bilisim/tr-string-str-facade-extend/dependents.svg" alt="Dependents">
</a>

<a href="https://packagist.org/packages/netkod-bilisim/tr-string-str-facade-extend" rel="nofollow">
    <img src="https://img.shields.io/packagist/l/netkod-bilisim/tr-string-str-facade-extend" alt="License">
</a>
</div>

<div style="text-align: center">
<a href="https://packagist.org/packages/netkod-bilisim/tr-string-str-facade-extend" rel="nofollow">
    <img src="http://poser.pugx.org/netkod-bilisim/tr-string-str-facade-extend/require/php" alt="License">
</a>
<a href="https://scrutinizer-ci.com/g/netkod-bilisim/tr-string-str-facade-extend/badges/quality-score.png?b=master" rel="nofollow">
    <img src="https://scrutinizer-ci.com/g/netkod-bilisim/tr-string-str-facade-extend/badges/quality-score.png?b=master" alt="Scrutinizer">
</a>
<a href="https://github.styleci.io/repos/672844297?branch=master">
    <img src="https://github.styleci.io/repos/672844297/shield?branch=master" alt="StyleCI">
</a>

</div>

## <img src="public/assets/images/presentation.png" width="25" height="25"> Introduction

Extended version of Turkish string package.

## <img src="public/assets/images/requirement.png" width="25" height="25"> Requirements

- PHP >= 7.4

## <img src="public/assets/images/inbox.png" width="25" height="25"> Install

```bash
composer require netkod-bilisim/tr-string-str-facade-extend:"^1"
```

## <img src="public/assets/images/web-coding.png" width="25" height="25"> Usage

```php
use Illuminate\Support\Str;

# Make a string uppercase
echo Str::trUppercase('Pijamalı hasta yağız şoföre çabucak güvendi.')
# Result: PİJAMALI HASTA YAĞIZ ŞOFÖRE ÇABUCAK GÜVENDİ.

# Make a string lowercase
echo Str::trLowercase('PİJAMALI HASTA YAĞIZ ŞOFÖRE ÇABUCAK GÜVENDİ.');
# Result: pijamalı hasta yağız şoföre çabucak güvendi.

# Make a string's first character uppercase
echo Str::trUppercaseFirst('pijamalı hasta yağız şoföre çabucak güvendi.');
# Result: Pijamalı hasta yağız şoföre çabucak güvendi.

# Make a string's first character lowercase
echo Str::trLowercaseFirst('Pijamalı hasta yağız şoföre çabucak güvendi.');
# Result: pijamalı hasta yağız şoföre çabucak güvendi.

# Uppercase the first character of each word in a string
echo Str::trUppercaseWords('Pijamalı hasta yağız şoföre çabucak güvendi.');
# Result: Pijamalı Hasta Yağız Şoföre Çabucak Güvendi.
```

## <img src="public/assets/images/licensing.png" width="25" height="25"> License

This package is open source software licensed under
the [MIT License](https://opensource.org/license/mit/).
