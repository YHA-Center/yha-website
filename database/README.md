# 🚨 TroubleShooting 🚨

### 1. Using with ***Migrations Sub Folder*** 
---

- Add **namespace** to your file

```php
namespace Database\Migrations\<YOUR_FOLDER_NAME>;
```

- Open your AppServiceProvider.php file **(app/Providers/AppServiceProvider.php)**, and add the following code to the boot method:

```php
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Add your additional migration paths here
        $this->loadMigrationsFrom(base_path('database/migrations/master'));

        // Adjust the namespace if needed
        $this->loadMigrationsFrom(base_path('database/migrations/master'), 'master');
    }
}
```
- Run the following after **making changes to the namespace or directory structure**

```shell
$ composer dump-autoload
```

- Run the migrations with the following command

```shell
$ php artisan migrate
```

Check your database that have been updated successfully.