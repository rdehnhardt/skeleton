# Laravel  5.1 Skeleton 
[![PayPayl donate button](https://img.shields.io/badge/paypal-donate-yellow.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=WKPHKUSVC2YLC&lc=BR&item_name=rdehnhardt&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donate_LG%2egif%3aNonHosted "Donate once-off to this project using Paypal")

This is a app skeleton with website analytics.
To use this project, make a fork

[Demo](http://skeleton.rdehnhardt.com.br/)

## Admin user and password

```
Please create a new login at the login screen by clicking on the "Register"
```

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

# Front-end development

```
npm install
```

```
bower install
```

```
gulp watch
```

## Make production

```
gulp --production
```

## Put the front into maintenance mode.

```
php artisan front:down
```

## Bring the front out of maintenance mode.

```
php artisan front:up
```

## Allowed IPs for maintenance mode

Put in .env

```
MAINTENANCE_ALLOWED_IPS=999.999.999.999,888.888.888.888
```

# Screenshots

## Front
![alt text](https://raw.githubusercontent.com/rdehnhardt/skeleton/master/public/img/screen/skeleton-home.jpg "Home")

## Login
![alt text](https://raw.githubusercontent.com/rdehnhardt/skeleton/master/public/img/screen/skeleton-auth.jpg "Login")

## Dashboard
![alt text](https://raw.githubusercontent.com/rdehnhardt/skeleton/master/public/img/screen/skeleton-dashboard.jpg "Dashboard")

## List
![alt text](https://raw.githubusercontent.com/rdehnhardt/skeleton/master/public/img/screen/skeleton-list.jpg "List")

## Create
![alt text](https://raw.githubusercontent.com/rdehnhardt/skeleton/master/public/img/screen/skeleton-create.jpg "Create")

## Edit
![alt text](https://raw.githubusercontent.com/rdehnhardt/skeleton/master/public/img/screen/skeleton-edit.jpg "Edit")

## Validation
![alt text](https://raw.githubusercontent.com/rdehnhardt/skeleton/master/public/img/screen/skeleton-with-validation.jpg "Validation")

## Messages
![alt text](https://raw.githubusercontent.com/rdehnhardt/skeleton/master/public/img/screen/skeleton-with-messages.jpg "Validation")

## Panel with tabs
![alt text](https://raw.githubusercontent.com/rdehnhardt/skeleton/master/public/img/screen/skeleton-panel-with-tabs.jpg "Validation")

## sweetAlerts
![alt text](https://raw.githubusercontent.com/rdehnhardt/skeleton/master/public/img/screen/skeleton-with-alerts.jpg "Alerts")

### Donate
[![PayPayl donate button](https://img.shields.io/badge/paypal-donate-yellow.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=WKPHKUSVC2YLC&lc=BR&item_name=rdehnhardt&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donate_LG%2egif%3aNonHosted "Donate once-off to this project using Paypal")
