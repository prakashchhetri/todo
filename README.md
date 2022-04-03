## Todo App

### Installation

- Copy environment file `cp .env.dist .env`
- Build docker containers
    - `docker compose build`
    - `docker compose up -d`
- Running migration
    - `docker exec todo_app_app php artisan migrate:fresh --seed`
- Add `todo.test` to hosts file or access the app via `http://localhost`

