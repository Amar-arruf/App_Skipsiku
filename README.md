# [Sistem Pendukung Keputusan PKH](https://github.com/Amar-arruf/App_Skipsiku)

![Image](/public/img/screenshot.jpg)

[Sistem Keputusan PKH](https://github.com/Amar-arruf/App_Skipsiku)
merupakan web aplikasi untuk menentukan sebuah seseorang layak dan tidaknya menerima Dana PKH menggunakan Metode C45 dan K-Means, kedua metode itu merupakan metode [Machine Learning](https://id.wikipedia.org/wiki/Pemelajaran_mesin). web aplikasi di bangun menggunakan PHP **Codeigniter 4** dan Library [**rubixML**](https://rubixml.com) (Library Machine Learning untuk PHP).

serta projek pribadi saya ini merupakan projek Skripsi .

## Tech Stack

[![CodeIgniter 4](https://img.shields.io/badge/CodeIgniter-4-orange)](https://codeigniter.com)
[![JQuery](https://img.shields.io/badge/jQuery-3.x-blue.svg)](https://jquery.com)
[![JS](https://img.shields.io/badge/javascript-ebdd1c?logo=javascript&logoColor=white)](https://javascript.info)
[![Rubix ML](https://img.shields.io/badge/Rubix_ML-Machine_Learning-green)](https://github.com/RubixML/ML/)

## Feature

- hasil perfoma perbandingan perhitungan dari kedua metode yaitu C4.5 dan K-Means
- upload data menggunakan CSV
- hasil perhitungan dari metode C4.5 dengan bantuan [rubixml](https://github.com/RubixML/ML)
- hasil perhitungan dari metode K- Means dengan bantuan [rubixml](https://github.com/RubixML/ML)

## Memulai

untuk bisa di jalankan di local server anda perlu mensiapkan sebuah server local seperti [XAMPP](https://www.apachefriends.org/download.html) berikut setup di lingkungan server lokal:

- buat database baru bernama `php_spk` dan `import` file database bernama `php_spk.sql` di **phpMyAdmin**
- pastikan file yang telah di `git clone` atau **download** filenya, tempatkan di `C:\xampp\htdocs\nama_directory_project`
- kemudian jalankan perintah

```ps
  composer install
```

```ps
  php spark server
```

## Resource template

- Demo: <https://demos.creative-tim.com/material-dashboard/pages/dashboard.html>
- Download Page: <https://www.creative-tim.com/product/material-dashboard>
- Documentation: <https://demos.creative-tim.com/material-dashboard/docs/2.1/getting-started/introduction.html>
- License Agreement: <https://www.creative-tim.com/license>
- PRO Version: <https://www.creative-tim.com/product/material-dashboard-pro>
- Support: <https://www.creative-tim.com/contact-us>
- Issues: [Github Issues Page](https://github.com/creativetimofficial/material-dashboard/issues)
- [Material Kit](https://www.creative-tim.com/product/material-kit?ref=github-md-free) - For Front End Development

## Licensing

- Copyright 2021 Creative Tim (https://www.creative-tim.com/)

- Licensed under MIT (https://github.com/creativetimofficial/material-dashboard/blob/master/LICENSE.md)
