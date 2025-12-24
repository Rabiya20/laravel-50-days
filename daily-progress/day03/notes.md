# Controller creation
``` php artisan make:controller TestController  ```

If you want all CRUD methods:
``` php artisan make:controller ProductController --resource ```

It creates methods like:
index()
create()
store()
show()
edit()
update()
destroy()

# Controller methods
Method Naming Tips
| Method name | Use for            |
| ----------- | ------------------ |
| index()     | List of something  |
| show()      | Show a single item |
| create()    | Show form          |
| store()     | Save to database   |
| edit()      | Edit form          |
| update()    | Update record      |
| destroy()   | Delete record      |

# Passing parameters
``` Route::get('/user/{id}', [TestController::class, 'user']); ```
``` Route::get('/hello/{name?}', [TestController::class, 'hello']); ```


{{ $message }} is the error text automatically created by Laravel’s validator for that specific field.
Show all errors:
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif