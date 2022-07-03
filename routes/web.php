<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('listings', [
//         'heading' => 'Latest Listings',
//         'listings' => [
//             [
//                 'id' => 1,
//                 'title' => 'Listing One',
//                 'description' => 'Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.'
//             ],
//             [
//                 'id' => 2,
//                 'title' => 'Listing Two',
//                 'description' => 'Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.'
//             ]
//         ]
//     ]);
// });

// Listing All
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

// Single Listing
Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});

// Route::get('/hello', function() {
//     return response('<h1>Hello World</h1>', 200)
//         ->header('Content-Type', 'text/plain')
//         ->header('foo', 'bar');
// });

// Route::get('/posts/{id}', function($id) {
//     // ddd($id);
//     return response('Post ' . $id);
// })->where('id', '[0-9]+');

// Route::get('search', function(Request $request) {
//     // dd($request->name . ' ' . $request->city);
// });




