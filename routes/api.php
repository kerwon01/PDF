<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("print", [App\Http\Controllers\PDFprinting::class, 'print']);
Route::get("insert", [App\Http\Controllers\Insert::class, 'insert']);