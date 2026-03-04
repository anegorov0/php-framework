## Run project

```bash
docker compose up -d --build
```

Open in browser:

```text
http://localhost:8081
```

---

## Stop / Restart

Stop containers:

```bash
docker compose down
```

Restart containers:

```bash
docker compose restart
```

---

## Logs

All services:

```bash
docker compose logs -f
```

PHP:

```bash
docker compose logs -f php
```

Nginx:

```bash
docker compose logs -f nginx
```

Database:

```bash
docker compose logs -f db
```

---

## Enter PHP container

```bash
docker compose exec php bash
```

---

## MySQL connection

### From host

```text
Host: localhost
Port: 3307
Database: framework
User: user
Password: password
```

### From PHP container (inside Docker)

```env
DB_HOST=db
DB_PORT=3306
```