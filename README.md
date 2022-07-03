
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
```

Install back with yarn

```bash
  cd back/laravel9/colbr/
  php artisan serve
```
    
## Tech Stack

**Front:** React, TypeScript, TailwindCSS

**Server:** PhP, Laravel


## Authors

- [@yoddmac](https://www.github.com/yoddmac)

