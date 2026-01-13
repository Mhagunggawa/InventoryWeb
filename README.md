<<<<<<< HEAD

 📦 Inventory Management System
---
Sistem ini dirancang untuk mengelola stok barang, termasuk transaksi barang masuk, barang keluar, serta manajemen user dengan pembagian role Admin dan Staff. Dibangun menggunakan CodeIgniter 4 yang rapi dan modern.
---

## 🚀 Fitur Utama
- 🔐 **Login & Session Role (Admin / Staff)**
- 📊 **Dashboard terpisah untuk Admin & Staff**
- 👥 **Manajemen User (CRUD + Modal Konfirmasi Delete)**
- 📥 **Barang Masuk (CRUD + Modal Konfirmasi Delete)**
- 📤 **Barang Keluar (CRUD + Modal Konfirmasi Delete)**
- 🎨 **Bootstrap 5**
- ⚙️ **Struktur MVC CodeIgniter 4 yang rapi**

## 🛠️ Teknologi yang Digunakan
- **CodeIgniter 4**
- **PHP 8.4+**
- **MySQL /**
- **Bootstrap 5**
- **Composer**

## 📥 Instalasi Project
Ikuti langkah-langkah berikut untuk menjalankan project:
---

### 1️⃣ Clone / Download Project
**Clone via Git:**
```bash
git clone https://github.com/TOS-Kelompok-1-Kelas-A/Progaming.git
```
Atau download ZIP lalu extract ke direktori server lokal kamu.

### 2️⃣ Install Dependencies
```bash
composer install
```

--

### 3️⃣ Import Database
1. Nyalakan Webserver dan Mysql
2. Buka phpMyAdmin  
3. Buat database baru dengan nama  dbinventory
4. Import file `.sql` yang anda dapat akses di app/Database/dbinventory.sql


### 4️⃣ Konfigurasi File .env
Dan atur database:
```
CI_ENVIRONMENT = development

database.default.hostname = localhost
database.default.database = dbinventory
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
```
Note: 
*jika anda memiliki username dan password pada MySql maka sesuaikan*,
*jika ingin menjalankan aplikasi tanpa melihat pesan ERROR yang di kirimkan codeigniter maka ubah CI_ENVIRONMENT = development menjadi:*
```
# CI_ENVIRONMENT = production
```

### 5️⃣ Jalankan project pada server local 
```bash
php spark serve
```
Akses melalui:  
👉 http://localhost:8080  
---


## 🔑 Akun Default
| Role  | Username | Password |
|-------|----------|----------|
| Admin | admin    | admin123 |
| Staff | staff    | staff123 |

---

## 📧 Kontak
Silakan hubungi lewat GitHub Issues.
=======
# CodeIgniter 4 Framework

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds the distributable version of the framework.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md) section in the development repository.

## Server Requirements

PHP version 8.1 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> - The end of life date for PHP 8.1 will be December 31, 2025.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
>>>>>>> 9ad45a3 (first commit)
=======
# InventoryWeb
>>>>>>> b2a1a1dcd66f0984700790512f6e86fc7bd748d9
