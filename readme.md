### Launch

```
git submodule update --init --recursive
./symfony doctrine:build --all --and-load
php -S localhost:8000 -t ./web
```

### Building a new Symfony 1.5 project

- Create a new folder with your project name. (For example `jobeet`)


```
git submodule add https://github.com/LExpress/symfony1.git lib/vendor/symfony
git submodule update --init --recursive
./lib/vendor/symfony/data/bin/symfony generate:project jobeet
./symfony generate:app frontend
cp -r ./lib/vendor/symfony/data/web/sf/ ./web/sf/
```

- Try the installation:

```
php -S localhost:8000 -t ./web
```

- Open your app:

```
http://localhost:8000/
http://localhost:8000/frontend_dev.php
```

- Create your `config/doctrine/schema.yml`

```
./symfony doctrine:build-schema
./symfony configure:database "mysql:host=localhost;dbname=jobeet" root
./symfony doctrine:build --model
./symfony doctrine:build --sql
./symfony doctrine:insert-sql
./symfony doctrine:build --all
```

- Load fixtures

```
./symfony doctrine:data-load
./symfony doctrine:build --all --and-load
```

- Generate module

```
./symfony doctrine:generate-module --with-show --non-verbose-templates frontend job JobeetJob
```
