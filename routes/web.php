<?php

    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\DB;

    Route::get('/', function () {
        $games = DB::select('SELECT id, title, galleryFolder FROM games ORDER BY id DESC LIMIT 5');
        $news = DB::select('SELECT id, idGame, title FROM news ORDER BY id DESC LIMIT 5');
        foreach ($news as $row)
            $row->galleryFolder = DB::scalar("SELECT galleryFolder FROM games WHERE id={$row->idGame}");
        return view('web', ["games"=>$games, "news"=>$news]);
    });

    Route::get("/game/{idGame}", "App\Http\Controllers\Game@details");
    //Route::get("/game/{idGame}/edit", [\App\Http\Controllers\Game::class, "edit"]);
    Route::get("/game/{idGame}/edit", "App\Http\Controllers\Game@edit");
    Route::post("/game/{idGame}/edit", "App\Http\Controllers\Game@editPost");
