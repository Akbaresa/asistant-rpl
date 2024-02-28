# DOC 
tech stack : laravel 10 + inertia react js  + tailwindcss 

- react component bisa didapatkan di [material ui](https://mui.com/)
- dokumentasi laravel berada di [laravel](https://laravel.com/)
- dokumentasi inertia js berada di [inertia js](https://inertiajs.com/)
- dokumentasi tailwind berada di [tailwind](https://tailwindcss.com/)

# Cara Menjalankan Program
install composer untuk laravel 
```bash
composer install
```
copy file .env.example dan paste

rename file yang dipaste menjadi .env

install node module javascript
```bash
npm install
```
generate key laravel 
```bash     
php artisan key:generate
```
jalankan run time 
```bash
npm run dev
```
nyalakan database

jika belum mempunyai database
```bash
php artisan migrate
```
jika sudah mempunyai database
```bash
php artisan migrate:fresh --seed
```    
jika ingin seed database
```bash
php artisan db:seed
``` 
jalankan laravel dan gunakan program dari server laravel 
```bash
php artisan serve
```
# pembagian branch 
`{nama_kamu}_dev` misal nama saya esa maka branch yang akan saya push adalah esa_dev

``dev_frontend`` merge dari divisi frontend dan berisi tampilan yang sudah di query dari backend 

``dev`` berisi gabungan branch backend dan front end

``dev_backend`` merge dari divisi backend dan hanya berisi query dari controller

``main`` branch yang sudah siap di deploy dan sudah di cock check tidak ada bug

# cara pull request / cara mengerjakan 
pull branch front end 
```bash
git pull dev_frontend
```
pull branch backend untuk mendapatkan query
```bash
git pull dev_backend
```
buat branch untuk pengerjaan
```bash 
git checkout -b ryan_dev {jika kamu ryan}
```
kerjakan fitur yang akan kamu kerjakan 

setelah sudah kamu kerjakan 
```bash 
git add .
```
jangan lupa standart penamaan commit di paling bawah
```bash 
git commit -m "{nama commit}"
```
push ke branch kalian
```bash 
git push origin ryan_dev {jika kamu ryan}
```
setelah sudah selesai langsung chat saja ke grub 

** jika ada kendala langsung hubungi esa
# Pembagian Penugasan divisi
## Front end
- latif
- meru

## bug hunter
- esa

## back end
- ryan  
- cemet
- havidz
- ibrahim

# standart penamaan commit :

jika menambahkan fitur
```bash
git commit -m "add {nama fitur}" 
```
jika memperbaiki fitur atau ada bug
```bash
git commit -m "fix {nama fitur}" 
``` 
jika melakukan pembaruan pada fitur yang sudah ada
```bash 
git commit -m "update {nama fitur}" 
```
jika menghapus fitur
```bash 
git commit -m "remove {nama fitur}" 
```
jika melakukan perbaikan pada struktur kode tanpa mengubah fungsionalitasnya
```bash 
git commit -m "refactor {nama fitur}" 
```
jika menambahkan atau memperbarui dokumentasi
```bash 
git commit -m "docs: {deskripsi}" 
```
jika menambahkan atau memperbarui pengujian
```bash 
git commit -m "test: {deskripsi}" 
```