<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/',['App\Http\Controllers\homecontroller','index']);





// Route::get('/profile/{prenom}/{nom}', function (Request  $request) {
//     return view('profile',[
//         'prenom' => $request->prenom,
//         'nom' => $request->nom
//     ]);
// });