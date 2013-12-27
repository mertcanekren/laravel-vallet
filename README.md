## Laravel 4 İle Cüzdan Uygulaması

### Kurulum

Terminalden proje dizinine gelerek 

```
composer install
```
komutu ile kurulumu başlatabilirsiniz. 

### Uygulamanın Çalıştırılması

Laravel kurulumundan sonra veri tabanı işlemlerin için

```
app/config/database.php
```
dosyasında bulunan tanımlamaları yaparak 
``` php
'mysql' => array(
'driver'    => 'mysql',
'host'      => 'localhost',
'database'  => 'laravel_vallet',
'username'  => 'root',
'password'  => '',
'charset'   => 'utf8',
'collation' => 'utf8_unicode_ci',
'prefix'    => '',
),
```

kendi veritabanı bilgilerinize göre düzenleyin.

#### Migration

Veritabanı ayarlarından sonra terminalden proje dizinine giderek aşağıda olan komutlarını çalıştırarak veritabanı tablolarını oluşturarak örnek kayıtları veri tabanına ekleyebilirsiniz.

```
php artisan migrate:install
php artisan migrate
php artisan db:seed
```

```
app/storage/
```

dizini yazılabilir olması gerekmektedir.
