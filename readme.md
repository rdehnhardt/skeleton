# Laravel  5.1 Skeleton 

To use this project, make a fork

## Admin user and password

```
user: admin@domain.com
pass: admin
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
gulp watch
```

## Make production

```
gulp --production
```

# Back Screenshots

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

### Temp
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>