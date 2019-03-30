# Implementing AdminLTE to Laravel From scratch

1. Add the packages to your package.json

```
"jquery": "^3.2",
"admin-lte": "^2.4.7",
"bootstrap": "^3.4.1",
"ionicons": "^4.5.5"
```

Make sure to use bootstrap 3.4.1 if you are implementing AdminLte 2.3

Install the packages

2. Open resources/js/bootstrap.js and add bootstrap and admin-lte right after require('jquery');

⋅⋅⋅require('bootstrap');

⋅⋅⋅require('admin-lte');

3. Replace resources/sass/app.scss with my app.scss
4. Copy resources/views/layouts folder and replace your resources/views/layouts/welcome.blade.php
5. Add the login route with 'login' name.

```
Route::get('/login', function () {
     return view('welcome');
 })->name('login');
 ```
6. Run npm Dev
