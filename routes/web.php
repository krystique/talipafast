<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ForgetPasswordManager;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/fruits', [AuthManager::class, 'fruits'])->name('fruits');

Route::get('/apple', [AuthManager::class, 'apple'])->name('apple');
Route::get('/orange', [AuthManager::class, 'orange'])->name('orange');
Route::get('/mango', [AuthManager::class, 'mango'])->name('mango');
Route::get('/dalandan', [AuthManager::class, 'dalandan'])->name('dalandan');
Route::get('/watermelon', [AuthManager::class, 'watermelon'])->name('watermelon');
Route::get('/grape', [AuthManager::class, 'grape'])->name('grape');

Route::get('/freshgoodies', [AuthManager::class, 'freshgoodies'])->name('freshgoodies');

Route::get('/porkchop', [AuthManager::class, 'porkchop'])->name('porkchop');
Route::get('/drumstick', [AuthManager::class, 'drumstick'])->name('drumstick');
Route::get('/beefbonemarrow', [AuthManager::class, 'beefbonemarrow'])->name('beefbonemarrow');
Route::get('/bangus', [AuthManager::class, 'bangus'])->name('bangus');
Route::get('/tilapia', [AuthManager::class, 'tilapia'])->name('tilapia');
Route::get('/galunggong', [AuthManager::class, 'galunggong'])->name('galunggong');

Route::get('/veggies', [AuthManager::class, 'veggies'])->name('veggies');

Route::get('/labuyo', [AuthManager::class, 'labuyo'])->name('labuyo');
Route::get('/tomato', [AuthManager::class, 'tomato'])->name('tomato');
Route::get('/pechay', [AuthManager::class, 'pechay'])->name('pechay');
Route::get('/sayote', [AuthManager::class, 'sayote'])->name('sayote');
Route::get('/eggplant', [AuthManager::class, 'eggplant'])->name('eggplant');
Route::get('/potato', [AuthManager::class, 'potato'])->name('potato');


Route::get('/shippingaddress', [AuthManager::class, 'shippingaddress'])->name('shipping');

Route::get('/bayong', [AuthManager::class, 'bayong'])->name('bayong');

Route::get('/checkout', [AuthManager::class, 'checkout'])->name('checkout');

Route::get('/purchasesuccess', [AuthManager::class, 'purchasesuccess'])->name('purchasesuccess');






Route::get('/login', [AuthManager::class, 'login'])->name('login');

Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');


Route::get('/signup', [AuthManager::class, 'signup'])->name('signup');

Route::post('/signup', [AuthManager::class, 'signupPost'])->name('signup.post');


Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');


Route::get('/forgetpassword', [ForgetPasswordManager::class, "forgetPassword"])->name('forget.password');

Route::post('/forgetpassword', [ForgetPasswordManager::class, "forgetPasswordPost"])->name('forget.password.post');

Route::get('/resetpassword', [ForgetPasswordManager::class, "resetpassword"])->name('reset.password');

Route::post('/resetpassword', [ForgetPasswordManager::class, "resetpasswordPost"])->name('reset.password.post');


Route::get('/newpassword', function () {
    return view('newpassword');
});