# Laravel  5.4 Skeleton 

[![PayPayl donate button](https://img.shields.io/badge/paypal-donate-yellow.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=WKPHKUSVC2YLC&lc=BR&item_name=rdehnhardt&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donate_LG%2egif%3aNonHosted "Donate once-off to this project using Paypal")

This is a app skeleton with website analytics.
To use this project, make a fork

## Disable register

This application has disabled registration page.

## How to install

First make storage folder writable. 

```
cp .env.example .env
```

```
composer install
```

```
php artisan key:generate
```

```
php artisan migrate --seed
```

```
php artisan storage:link
```

# Front-end development

```
npm install
```

```
npm run watch
```

## Make production

```
npm run production
```

### Donate
[![PayPayl donate button](https://img.shields.io/badge/paypal-donate-yellow.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=WKPHKUSVC2YLC&lc=BR&item_name=rdehnhardt&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donate_LG%2egif%3aNonHosted "Donate once-off to this project using Paypal")