# Laravel  5.4 Skeleton 

<p align="center">
  <img src="https://raw.githubusercontent.com/rdehnhardt/skeleton/master/public/img/logo.png">
</p>

<p align="center">This is a app skeleton with website analytics.</p>
<p align="center">To use this project, make a fork</p>

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