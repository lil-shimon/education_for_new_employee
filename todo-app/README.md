## todo-app

```
cd $filedir
cp .env.example .env
cp mysql/docker-entrypoint-initdb.d/createdb.sql.example mysql/docker-entrypoint-initdb.d/createdb.sql
docker-compose build mysql redis workspace php-fpm phpmyadmin nginx
```

run docker
```
docker-compose up -d mysql redis workspace php-fpm phpmyadmin nginx
```

tables / column
todos table / name (string) deadline (date)
