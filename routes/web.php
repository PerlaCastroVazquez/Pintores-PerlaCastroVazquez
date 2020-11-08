<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//
Route::get('/', 'EstructurasDeControl@login');
Route::get('/plantilla', 'EstructurasDeControl@plantilla');
Route::post('/valida', 'EstructurasDeControl@validarLogin');

//
Route::get('/davinci' ,[
    'uses' => 'EstructurasDeControl@davinci',
    'as' => 'Leonardo']);
Route::get('/salvador' ,[
    'uses' => 'EstructurasDeControl@Salvador',
    'as' => 'Salvador']);
Route::get('/vangogh' ,[
    'uses' => 'EstructurasDeControl@VanGogh',
    'as' => 'Vincent']);
Route::get('/picasso' ,[
    'uses' => 'EstructurasDeControl@Picasso',
    'as' => 'Pablo']);  
Route::get('/kahlo' ,[
    'uses' => 'EstructurasDeControl@Kahlo',
    'as' => 'Frida']);      
    

