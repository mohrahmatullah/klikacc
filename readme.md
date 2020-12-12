How To Install this Project
1. Persiapan
	- Memiliki CLI/Command Line Interface berupa Command Prompt (CMD) atau Power Shell atau Git Bash (selanjutnya kita sebut terminal).
	- Memiliki Web Server (misal XAMPP) dengan PHP >= 7.1.3 Karena project ini menggunakan framework laravel versi 5.8
	- Composer telah ter-install, cek dengan perintah composer -V melalui terminal.
	- Memiliki koneksi internet (untuk proses installasi).

2. Langkah-Langkah
	- git clone https://github.com/mohrahmatullah/klikacc Melalui terminal,
	- Masuk ke direktori klikacc melalui terminal dengan perintah cd klikacc.
	- (Sesuai petunjuk installasi) Pada terminal, berikan perintah composer install. Ini perlu koneksi internet.
	- Composer akan menginstall dependency paket dari source code tersebut hingga selesai.
	- Jalankan perintah php artisan, untuk menguji apakah perintah artisan Laravel bekerja.
	- Buat database baru (kosong) pada mysql (via phpmyadmin) dengan nama klikacc.
	- Duplikat file .env.example, lalu rename menjadi .env.
	- Kembali ke terminal, php artisan key:generate.
	- Setting koneksi database di file .env (DB_DATABASE, DB_USERNAME, DB_PASSWORD) dan tambah kan (URL_MEDIA) ini untuk url image 

		URL_MEDIA=http://127.0.0.1:8000

		DB_CONNECTION=mysql

		DB_HOST=localhost

		DB_PORT=3306

		DB_DATABASE=klikacc

		DB_USERNAME=root

		DB_PASSWORD=

	- Run migrations (tables and Seeders) php artisan migrate --seed. Cek di phpmyadmin, seharusnya tabel dan isi nya sudah muncul.
	- Setelah selesai, Jalankan perintah php artisan serve maka dapat diakses dengan http://127.0.0.1:8000/
 

Silahkan Ujicoba test dengan mengakses link http://127.0.0.1:8000/

Terimakasih atas kesempatannya untuk mengikuti test skill pada klikacc