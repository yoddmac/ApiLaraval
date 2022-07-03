
# Create BACK & FRONT (PHP LARAVAEL9 AND REACT TS)

Create a system for connection on create account in php and react


## API Reference

#### Create users

```http
  POST /api/users
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `email` | `string` | **Required**. valid email|
| `firstname` | `string` | **Required**.|
| `lastname` | `string` | **Required**.|
| `password` | `password` | **Required**.|

#### Get item

```http
  POST /api/users/login
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `email`      | `string` | **Required**. Valid email|
| `password`      | `string` | **Required**. Valid password|



## Installation

Install front with yarn

```bash
  cd front/app/
  yarn install
  yarn start
```

Install back with yarn

```bash
  (for MACOS <3)
  cd back/laravel9/colbr/
  brew install php
  brew install composer
  npm install
  composer install
  php artisan serve
```

```bash
  (Create Postgres Database with .env option)
  cd back/laravel9/colbr/
  copy .env-exemple with your values 
  php artisan migrate
  
  (Change values with your database Option)
  (.env)
  DB_CONNECTION=pgsql
  DB_HOST=127.0.0.1
  DB_PORT=5432
  DB_DATABASE=<your-database>
  DB_USERNAME=<your-username>
  DB_PASSWORD=<your-password>
  
```
    
## Tech Stack

**Front:** React, TypeScript, TailwindCSS

**Server:** PhP, Laravel


## Authors

- [@yoddmac](https://www.github.com/yoddmac)

