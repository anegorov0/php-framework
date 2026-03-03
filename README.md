🔧 Первый запуск
git clone <repo_url>
cd my-framework
docker compose up -d --build

Открыть в браузере:

http://localhost:8081

🛑 Остановка проекта
docker compose down

🔁 Перезапуск контейнеров
docker compose restart
📜 Просмотр логов

Все сервисы:

docker compose logs -f

Только PHP:

docker compose logs -f php

Только Nginx:

docker compose logs -f nginx

Только база:

docker compose logs -f db
🐘 Вход в контейнер PHP
docker compose exec php bash
🗄 Подключение к MySQL
С хоста:
Host: localhost
Port: 3307
Database: framework
User: user
Password: password
Из PHP (внутри Docker):
DB_HOST=db
DB_PORT=3306
🧹 Полная очистка (включая базу)

⚠ Удалит данные MySQL

docker compose down -v
📦 Composer

Установка зависимостей:

docker compose exec php composer install

Добавить пакет:

docker compose exec php composer require vendor/package
🐛 Xdebug

Порт: 9003
Client host: host.docker.internal