# Usar a imagem oficial do PHP 8.1 com FPM
FROM php:8.1-fpm

# Definir o diretório de trabalho
WORKDIR /var/www/html

# Copiar os arquivos do projeto para o diretório de trabalho
COPY . .

# Expor a porta do PHP-FPM
EXPOSE 9000
