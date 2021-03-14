## 1. Сборка
#### Сборка всего проекта:

cp .env.workspace .env
cp src/.env.workspace src/.env
Запустить

```
./build.sh
```

## 2. Запуск композера


```
docker-compose exec backend composer install
```


## 3. Запуск тестов

```
docker-compose exec backend ./bin/phpunit
```

## 4. API URL
```
/test
```
