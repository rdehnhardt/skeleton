<p align="center">
  <img src="https://raw.githubusercontent.com/rdehnhardt/skeleton/master/public/img/logo.png" width="70%">
</p>

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

# Screenshots

#### Front
<p align="center">
  <img src="https://raw.githubusercontent.com/rdehnhardt/skeleton/master/public/img//screen/front.png" width="90%">
</p>

#### Login
<p align="center">
  <img src="https://raw.githubusercontent.com/rdehnhardt/skeleton/master/public/img//screen/login.png" width="90%">
</p>

#### Dashboard
<p align="center">
  <img src="https://raw.githubusercontent.com/rdehnhardt/skeleton/master/public/img//screen/dashboard.png" width="90%">
</p>

#### User List
<p align="center">
  <img src="https://raw.githubusercontent.com/rdehnhardt/skeleton/master/public/img//screen/users-list.png" width="90%">
</p>

#### User Edit
<p align="center">
  <img src="https://raw.githubusercontent.com/rdehnhardt/skeleton/master/public/img//screen/user-edit.png" width="90%">
</p>