kinderrechten.activisme.be 

Kinderrechten.activisme.be is the petition platform that we use for issuing the immigration policy in policy. That allows putting children in domestic blocks. Surrounded with fences. 

You may use this project under your own risk. But notice that we offer no support whatsoever. We alse don't follow semver for this project and won't guarantee that the code (specially the master branch) is stable. In short: when using this, you're on your own. 

## Install 

This guide assumes you're using Laravel Valet 

### Laravel app 

Download the master branch 

```
git clone https://github.com/Misfits-BE/Petition-Standalone.git
```

Install the composer dependencies 

```
composer install
```

Make a copy `.env.example` and rename to `.env`

Finally make sure you have a database namen `actb_kinderrechten` and run the migrations and seeds 

```
php artisan migrate --seed
```

### Assets 

Installing kinderrechten.activisme.be front end dependencies requires `npm`. 

```
npm install
```

kinderrechten.activisme.be uses Laravel Mix to build assets. To build assets run:

```
npm run dev
```

Available buils tasks are defined in `package.json`

### Customisation 

* Most of our project are in Dutch. You can change the language in `config/app.php`

## Colofon 

### Contributing 

Generally we con't accept any PR requests to kinderrechten.activisme.be. Uf you discovered a bug or have an idea to improve the code, contact us first before start coding. 

### License 

kinderrechten.activisme.be and the Laravel framework are open-sourced software licensed under the MIT license. 