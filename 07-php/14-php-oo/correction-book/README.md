# Mini framework MVC

Pour travailler sur le projet :

```bash
composer install
```

Pour lancer les migrations de BDD :

```bash
vendor/bin/phinx migrate
```

On peut remplir la BDD :

```bash
vendor/bin/phinx seed:run
```

Pour les routes, vérifier le chemin dans le fichier `index.php` :

```php
define('BASE_URL', '/book-mvc/public');
```
