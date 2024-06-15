<p align="center">
<img width="500" src="https://github.com/prom97/comic-ar/blob/main/public/logo_comic-ar.svg"/>
</p>
## Introduction

- ComicAR is an application that helps comic and manga readers to organize their collections.

<p align="center">
<img src="https://github.com/prom97/comic-ar/blob/main/public/preview/1_home.gif"/>
</p>

<p align="center">The site offers registration and login so that users can manage their comics<br>
<img src="https://github.com/prom97/comic-ar/blob/main/public/preview/2_register.gif"/>
</p>

<p align="center">
<img src="https://github.com/prom97/comic-ar/blob/main/public/preview/3_login.gif"/>
</p>

<p align="center">You can view information for a specific edition<br>
<img src="https://github.com/prom97/comic-ar/blob/main/public/preview/4_edition.gif"/>
</p>

<p align="center">In addition to being able to review it<br>
<img src="https://github.com/prom97/comic-ar/blob/main/public/preview/5_review.gif"/>
</p>

<p align="center">View and share artwork<br>
<img src="https://github.com/prom97/comic-ar/blob/main/public/preview/6_artwork.gif"/>
</p>

<p align="center">Manage your "Comicteca"<br>
<img src="https://github.com/prom97/comic-ar/blob/main/public/preview/7_comicteca.gif"/>
</p>

<p align="center">
Also allowing you to add volumes to your wish list, and many more functions!<br>
<img src="https://github.com/prom97/comic-ar/blob/main/public/preview/8_wishlist.gif"/>
</p>

## Tech Stack

<div align="center">
<img  src="https://skillicons.dev/icons?i=laravel,vue,tailwind,js,html,css,vite,github,php,mysql,figma,vscode"/>
</div>

## Deployment

- Clone project

```
git clone https://github.com/matirinfante/comic-ar.git
```

- Install dependencies from composer.json and package.json (inside the project directory)

```
composer install
```

```
npm install
```

```
npm run dev
```

- Create a new database and config your .env file (line 11 for reference)
  - If the .env file does not exist:

 ```
 cp .env.example .env
 ```

```
DB_CONNECTION=<your_db_connection>
DB_HOST=<your_host>
DB_PORT=<your_port>
DB_DATABASE=<your_database_name>
DB_USERNAME=<your_username>
DB_PASSWORD=<your_password>
```

- Run migrations to set your db tables structure and seed it with pre-built factories

```
php artisan migrate --seed
```

- Serve it

```
php artisan serve
```

- Default user

```
email: a@a.com
pass: admin123
```

- If you have any 500 Server error, try CTRL+C and then

```
php artisan cache:clear
```

```
composer dump-autoload
```

```
php artisan key:generate
```

## Authors

- Matías Infante [@matirinfante](https://www.github.com/matirinfante)
- Pablo Romero [@prom97](https://www.github.com/prom97)
- Matías Peralta [@matiasperaltamacri](https://www.github.com/matiasperaltamacri)