## Como fazer o Upgrade do Filament v2 para Filament v3?

Nesse vídeo explicamos o passo-a-passo de como fazer o upgrade da versão 2 do Filament para a versão 3.

[Como fazer o Upgrade do Filament v2 para Filament v3?](https://www.youtube.com/watch?v=Rf-LpwQVLZg)

[![Como fazer o Upgrade do Filament v2 para Filament v3?](https://i3.ytimg.com/vi/Rf-LpwQVLZg/maxresdefault.jpg)](https://www.youtube.com/watch?v=Rf-LpwQVLZg)

## Installation

Clone the repo locally:

```sh
git clone https://github.com/leandrocfe/filamentbr-video-1-v3beta.git filamentbr-video-1-v3beta && cd filamentbr-video-1-v3beta
```

Install PHP dependencies:

```sh
composer install
```

Setup configuration:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```

Laravel sail:

```bash
sail up -d
```

Run database migrations:

```sh
sail artisan migrate --seed
```

## Usage

Once you have started the Artisan development server, your application will be accessible in your web browser at [http://localhost/admin](http://localhost/admin).

You can choose a user's credentials and authenticate to access the Filament Admin Panel (default password: _password_).
