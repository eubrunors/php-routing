# PHP Router

Este projeto é uma implementação simples de roteamento em PHP que permite lidar com diferentes solicitações HTTP, especialmente solicitações GET. Ele demonstra como criar uma função personalizada para encontrar rotas e processar chamadas de retorno.

## Funcionalidades

- Roteamento de solicitações GET
- Funcionalidade de callback para cada rota
- Simples e fácil de entender

## Requisitos

- PHP 7.0 ou superior
- Um servidor web (por exemplo, Apache ou Nginx)

## Uso do Docker

Este projeto utiliza o Docker para facilitar o ambiente de desenvolvimento e implantação. O Docker permite criar e gerenciar containers, isolando a aplicação e suas dependências em um ambiente controlado. O uso do Docker garante que a aplicação funcione de maneira consistente em diferentes máquinas.

## Uso do Nginx

O Nginx é utilizado como servidor web para servir a aplicação. Ele é conhecido por sua alta performance e capacidade de lidar com muitas conexões simultâneas. As configurações do Nginx estão incluídas no diretório `nginx`, onde você pode encontrar os arquivos de configuração necessários para executar a aplicação.

## Instalação

1. Clone este repositório:

   ```bash
   git clone https://github.com/seu-usuario/php-routing.git
   ```

2. Navegue até o diretório do projeto:

   ```bash
   cd php-routing
   ```

3. Coloque os arquivos em seu servidor web ou use o servidor embutido do PHP:

   ```bash
   docker compose up --build
   ```
4. Acesse a aplicação no seu navegador em http://localhost:7070 (ou outra porta configurada no [Dockerfile](./Dockerfile) e [docker-compose.yaml](./docker-compose.yml)).
