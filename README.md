# Livewire-CRUD-With-Datatable

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Technologies Used
- Laravel: The backend framework.
- Livewire: For real-time, reactive components.
- AlpineJS: For small, lightweight JavaScript interactions.
- MySQL: For database management.
- Bootstrap: For styling.


## **Requirements**

To run this project, ensure that the following prerequisites are met:

### ✅ **PHP 8.0+**
- This project requires **PHP version 8.0** or higher for optimal performance and compatibility.

### ✅ **Laravel 8+**
- The application is built using **Laravel 8** or newer, ensuring you have access to the latest Laravel features.

### ✅ **Composer**
- **Composer** is required to manage PHP dependencies. If you haven't already, [download and install Composer](https://getcomposer.org/).

### ✅ **Local Server (Laragon, XAMPP, WAMP)**
- A local server environment is needed for running the application:
  - **[Laragon](https://laragon.org/)** (Recommended for Windows users)
  - **[XAMPP](https://www.apachefriends.org/index.html)**
  - **[WAMP](http://www.wampserver.com/en/)**

### ✅ **MySQL 5+**
- **MySQL version 5** or higher is required for database management and running migrations.


## How to setup the Project

1. **Clone the Project:**
   go to your project directory:
   ```bash
     cd ./go/to/project/derectory
   
2. **Clone the Project:**
  clone the proejct:
   ```bash
      git clone git@github.com:hemalkachhadiya/Livewire-Normal-Operation.git
 
3. **Project Directory:**
  go to the project:
   ```bash
      cd Livewire-Normal-Operation
 
4. **Install the require folder and file :**
  isntall the verdonr folder:
   ```bash
      composer install

5. **Generate the key:**
  generate the Application Key:
   ```bash
      php artisan key:generate

6. **.ENV:**
  setup the env : <br>
    ```bash
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=laravel_project
        DB_USERNAME=root
        DB_PASSWORD=
     

7. **make a Database and Table  :**
  run the migrations:
   ```bash
      php artisan migrate

8. **UPdate the branhc (optional but recommended):**
  update your local branch:
   ```bash
      git pull origin main 

8. **Run App:**
    run the application :
   ```bash
      php artisan serve


## About PROJECT

In this project , use the Laravel, Livewire and alpine js libraries to create a real-time data manupluation for this application.

### **Login Section**
- When you serve the application, the first page you will see is the **Login Page**.
- Enter your email and password to log in, and you will be redirected to the **Dashboard**.
- If there are any errors, they will be displayed below the input fields.



### **Chat Bot Section**
- This section features a simple **Chat Bot** with predefined keys and responses.  
- When you send a message using one of the predefined keys, the bot instantly responds with the corresponding predefined reply.  
- The chat bot is **static**, meaning it does not learn or adapt to new messages. Its responses are limited to a predefined set of rules.  
- This demonstrates how a basic, static chatbot can simulate an interactive experience using **Livewire's power** for instant replies.  



## **Login Credentials for Demo**

To log in to the demo, use the following credentials:

### 🔑 **Email**: 
<span style="color:blue">Ankit.devclick@gmail.com</span>

### 🔑 **Password**: 
<span style="color:blue">1234</span>


Enjoy exploring the demo! 😄

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
