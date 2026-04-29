#!/bin/bash

echo "Instalando dependências..."
composer install --no-dev --optimize-autoloader

echo "Gerando APP_KEY (se necessário)..."
php artisan key:generate --force

echo "Iniciando servidor Laravel..."
php artisan serve --host=0.0.0.0 --port=$PORT