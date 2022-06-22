# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# codigos_postales

## ¿Cómo aborde el problema?

Leí detenidamente las instrucciones.
Revisé la estructura que arroja el api de referencia: https://jobs.backbonesystems.io/api/zip-codes/01210
Descargué el archivo en txt del sat https://www.correosdemexico.gob.mx/SSLServicios/ConsultaCP/CodigoPostal_Exportar.aspx
Depurar el archivo.
En mi local descargue XAMPP e instale lumen.
Cree el migrate (database/migrations) para la tabla de códigos postales.
Cree el seeder (database/seeders) para cargar los datos de un txt que está localizado en la carpeta database/csv
Ejecuté el migrate y el seeder.
Cree la ruta para el servicio.
Cree el controlador para mi servicio y forme la respuesta conforme a lo que vi en la ruta de referencia https://jobs.backbonesystems.io/api/zip-codes/01210.
Utilice AWS Elastic Beanstalk para el deploy de mi servicio:
1.- Utilice el micro framework lumen la versión más liviana de laravel.
2.- Utilice el servidor web ligero y de alto rendimiento Nginx.
3.- Utilice mariadb
4.- Realice algunas configuraciones (vía aws y terminal) para poder exponer mi servicio.
Y por último mi repositorio lo subí a github.

Nota: Enumero por dificultad
1.- Deploy AWS
2.- Depuración del archivo.
3.- Servicio