<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre o Projeto

Este projeto faz parte de um trabalho para a UC Gestão e Qualidade de Software. Foram implementados testes simples na página da Wikipedia utilizando o framework Dusk.

## Tecnologias Utilizadas
1. [Laravel 12](https://laravel.com/)
2. php 8.2
3. [Dusk](https://laravel.com/docs/master/dusk)

## Instalação do Projeto

1. Clone o repositório:
   ```bash
   git clone https://github.com/JonasSJesus/trabalho-tests-e2e trabalho-gqs && cd trabalho-gqs
   ```
2. Instale as Dependências:
   ```bash
   composer install
   ```
3. Execute o comando para rodar os testes: 
    ```bash
    php artisan dusk
    ```
