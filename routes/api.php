<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Nuwave\Lighthouse\Support\Http\Controllers\GraphQLController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/upload-article-image', function (Request $request) {
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png|max:2048',
    ]);

    $path = $request->file('image')->store('articles', 'public');

    return response()->json(['path' => '/storage/' . $path]);
});
Route::post('/graphql', \Nuwave\Lighthouse\Support\Http\Controllers\GraphQLController::class . '@query');

