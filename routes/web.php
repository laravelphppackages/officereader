 <?php

 use Illuminate\Support\Facades\Route;

 Route::prefix('office')->group(function () {
     Route::prefix('read')->group(function () {
         Route::get('/', 'Laravelphp\Officereade\Http\Controllers\OfficeController@read');
         Route::get('{name}', 'Laravelphp\Officereade\Http\Controllers\OfficeController@read');
     });
     Route::prefix('reset')->group(function () {
         Route::get('/', 'Laravelphp\Officereade\Http\Controllers\OfficeController@reset');
         Route::get('{name}', 'Laravelphp\Officereade\Http\Controllers\OfficeController@reset');
     });
 });