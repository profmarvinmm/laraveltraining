<?php

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

Route::get('/mypage', function(){
    $pagetitle = "My Favorite Tasks";
    $tasks = [
        "Go to the store, buy fresh foods",
        "Clean up my office",
        "Prepare for class",
        "Wash the dishes"
    ];

    return view('halow', compact("tasks", "pagetitle"));
});

Route::get('/sampledata/{count}', function($count){
    $artist = factory(\App\Artist::class)->times($count)->create();

    echo "You just generated " . $count . " entries.";
});

Route::get('/artists', function(){
    $allArtists = \App\Artist::all();
    //dd($allArtists);
    return view('artists', compact('allArtists'));
});


Route::get('/artist/add', function(){
    $name = "Magnus Haven";
    $description = "A new band";

    $artist = new \App\Artist;
    $artist->name = $name;
    $artist->description = $description;

    if ($artist->save())
        echo "Saved successfully";
    else
        echo "There was an error.";

});

Route::get('/artists/edit', function(){
    $name = "Moira Dela Torre";
    $description = "Malakas huminghing";

    $artist = \App\Artist::find(1);
    $artist->name = $name;
    $artist->description = $description;

    if ($artist->update())
        echo "Updated successfully";
    else
        echo "There was an error.";

});

Route::get('/artists/delete/{id}', function($id){
    if (\App\Artist::findOrFail($id)->delete())
        echo "$id deleted successfully";
    else
        echo "There was an error.";

});
