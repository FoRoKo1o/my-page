# My Page – WordPress (Bedrock + Sage)
## By GPT

To repozytorium zawiera projekt WordPress oparty o [Bedrock](https://roots.io/bedrock/) oraz [Sage](https://roots.io/sage/).  
Instrukcja opisuje, jak postawić stronę lokalnie od zera.

---

## Wymagania

Na komputerze musisz mieć zainstalowane:

- [WSL + Ubuntu](https://learn.microsoft.com/pl-pl/windows/wsl/install) (jeśli pracujesz na Windowsie)
- [PHP 8.1+](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Node.js + Yarn](https://yarnpkg.com/)
- [MySQL lub MariaDB](https://www.mysql.com/)
- [Nginx / Apache] lub np. [Laravel Valet for Linux](https://cpriego.github.io/valet-linux/)  

---

## Instalacja krok po kroku

### 1. Pobierz repozytorium
```bash
git clone https://github.com/FoRoKo1o/my-page.git my-page
cd my-page
```
### 2. Skopiuj plik .env
```bash
cp .env.example .env
```
Edytuj plik .env i ustaw:
```
DB_NAME='nazwa_bazy'
DB_USER='uzytkownik_bazy'
DB_PASSWORD='haslo_bazy'
DB_HOST='localhost'

WP_ENV='development'
WP_HOME='http://mypage.test'
WP_SITEURL="${WP_HOME}/wp"
```

### 3. Zainstaluj zależności PHP (Bedrock)
`composer install`

### 4. Zainstaluj zależności frontendu (Sage)
```
cd web/app/themes/my-theme
yarn install
yarn build   # albo yarn dev dla trybu developerskiego
cd ../../../
```

### 5. Skonfiguruj serwer
Jeśli używasz nginx, dodaj wirtualny host dla mypage.test wskazujący na katalog:
`/ścieżka/do/projektu/my-page/web`

Dodaj wpis do pliku hosts:
`127.0.0.1   mypage.test`

Example working ngingx conf
`nano /etc/nginx/sites-available/mypage`

```
server {
    listen 80;
    server_name mypage.test;
    root /home/toor/projekty/szablon/my-page/web;

    index index.php index.html;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php8.3-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~* \.(jpg|jpeg|png|gif|ico|css|js|svg|woff|woff2|ttf|eot)$ {
        expires max;
        log_not_found off;
    }
}

```

### 6. Instalacja WordPressa
`http://mypage.test/wp/wp-admin/install.php`

Tryb developerski

Jeśli chcesz pracować z hot-reloadem CSS/JS:
```
cd web/app/themes/my-theme
yarn dev
```

Strona będzie działać pod `http://mypage.test`, a assets będą podłączone przez Vite.

Deploy na serwer

Sklonuj repo na serwerze

Wykonaj:
```
composer install --no-dev
cd web/app/themes/my-theme
yarn install
yarn build
```

Skonfiguruj .env z danymi serwera i bazy

Ustaw document root serwera na /web

📂 Struktura projektu
```
config/ – konfiguracja Bedrocka
web/wp/ – WordPress (zaciągany przez Composer)
web/app/ – motywy, wtyczki i uploads
web/app/themes/my-theme – motyw Sage (frontend)
```
