
## آموزش نصب ماژول ساده پرداز زرین پال در هاست

برای نصب ابتدا فایل زیپ شده را دانلود کنید

سپس در هاست خود طبق آموزش لینک زیر پروژه را آپلود کنید

[آموزش قرار دادن پروژه لاراول](https://mehrhost.com/article/%D9%86%D8%AD%D9%88%D9%87-%D8%A7%D8%AC%D8%B1%D8%A7%DB%8C-%D9%BE%D8%B1%D9%88%DA%98%D9%87-%D9%87%D8%A7%DB%8C-laravel-%D9%84%D8%A7%D8%B1%D8%A7%D9%88%D9%84-%D8%AF%D8%B1-%D9%87%D8%A7%D8%B3%D8%AA-%D9%84/).

طبق آموزش لینک زیر یک دیتابیس بسازید

[آموزش نصب دیتابیس](https://mehrhost.com/article/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%A7%DB%8C%D8%AC%D8%A7%D8%AF-%D8%AF%DB%8C%D8%AA%D8%A7%D8%A8%DB%8C%D8%B3-database-%D8%AF%D8%B1-%D8%B3%DB%8C%E2%80%8C%D9%BE%D9%86%D9%84-cpanel-%D9%87%D8%A7%D8%B3%D8%AA/).

فایل زیر را از  پروژه اصلی دریافت کرده و طبق آموزش لینک زیر در دیتابیس  
import
کنید

laravel8ajax.sql

[آموزش ایمپورت کردن فایل دیتابیس](https://blog.azardata.net/backup-import-mysql/).

فایل زیر را در هاستتان بصورت ادیت باز کنید

.env

موارد زیر را طبق دیتابیسی که در هاستتان ساخته اید به همراه نام کاربری و کلمه عبور یوزر وارد کنید و ذخیره را بزنید

DB_DATABASE=نام دیتا بیس 

DB_USERNAME=نام یوزرنیم 

DB_PASSWORD=پسورد 

وارد مسیر زیر شوید 

app/Http/Controller/PaymentController

آدرس سایتتان را باید در دو قسمت ویرایش کنید و ذخیره کنید

http://127.0.0.1:8000

بجای این قسمت باید آدرس وبسایتتان را قرار دهید
مثلا: 

http://laravel.erfandn.ir
