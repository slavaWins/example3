<p align="center">
<img src="info/logo.jpg">
</p>
 
## Example3
Кароч изи пакет 
   

## Установка из composer

```  
composer require slavawins/example3
```

 Опубликовать js файлы, вью и миграции необходимые для работы пакета.
Вызывать команду:
```
php artisan vendor:publish --provider="Example3\Providers\Example3ServiceProvider"
``` 

 В роутере routes/web.php удалить:
 добавить
 ```
    \Example3\Library\Example3Route::routes();
 ```

Выполнить миграцию
 ```
    php artisan migrate 
 ``` 
