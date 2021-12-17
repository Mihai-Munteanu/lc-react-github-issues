<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index']);

// view social media posts
// post belongs to people
// filter the result

// one page solution
// list social media posts
// many types of filters

// post show contain:
    // -date posted
    // social network
    // link to original post on social network website
    // author name
    // name of the lists which it belongs to
    //
// Social Networks
    // as a social network work well for both Facebook and Twitter as well as any aditional network

// Lists and People
    // Lists are a collection of people
    // Pleople have accounts and posts on social media; A person could belong to multiple lists
        //A person could have multiple accounts on the same social media platform.

        // Filters
        // Allow us to filter results using a variety of filters. We should be able to use any combination of
        // filters at any given time.
        // An ideal solution will return filtered results within 1 second for 10 million posts.


        // At minimum, you should have filters for:
        //     ● List: Show only posts belonging to people on specified list or lists
        //     ● Date range: Show only posts that were posted between dates A and B
        //     ● Network: Show only posts from a specified social network or networks
        //     ● Text: Full text search of post content

