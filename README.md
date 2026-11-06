# SocialNetwork

Social network prototype from 2016, built by a team with plain PHP and MySQL. It is an older project that predates current security practices and should not be deployed as is.

## Technology

- **PHP 5 without a framework:** each page handles its own request, reading `$_POST` and querying the database directly.
- **MySQL or MariaDB through `mysqli`:** stores users and posts. The `sql/` folder has phpMyAdmin exports of the tables.
- **PHP sessions:** keep users signed in between pages.
- **Materialize CSS:** styles the views in `app/`.
- **jQuery:** is included for client-side behavior in `novo/`.

## Project structure

The repository holds two attempts at the same project:

- **`app/`:** an MVC-style structure with models, views and controllers. The controllers are almost empty.
- **`novo/`:** the later version, with a simpler structure. It holds the pages for signing up, logging in and publishing posts, plus static follower pages.

## Running locally

You need PHP and MySQL or MariaDB, for example through XAMPP.

1. Copy the project to your web server folder as `SocialNetwork`.
2. Create a database called `socialnetwork` and import the files in `sql/`. They may not match the latest code exactly.
3. Update the database connection settings to match your environment.
4. Open http://localhost/SocialNetwork/novo/.
