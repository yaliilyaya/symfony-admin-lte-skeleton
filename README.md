
## for start LEMP:
```bash
docker-compose up -d --build
docker-compose exec app composer install -vvv
docker-compose exec app bin/console cache:clear
```

### for stop LEMP:
`` docker-compose down``