<?php 

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

Route::middleware('auth:api')->group(function() {
    Route::get('/service1/{endpoint}', function ($endpoint, Request $request) {
        $response = Http::withToken($request->bearerToken())
                        ->get(env('API_SERVICE_1_URL') . '/' . $endpoint, $request->query());
        return response($response->body(), $response->status());
    });

    Route::post('/service1/{endpoint}', function ($endpoint, Request $request) {
        $response = Http::withToken($request->bearerToken())
                        ->post(env('API_SERVICE_1_URL') . '/' . $endpoint, $request->all());
        return response($response->body(), $response->status());
    });

    Route::get('/service2/{endpoint}', function ($endpoint, Request $request) {
        $response = Http::withToken($request->bearerToken())
                        ->get(env('API_SERVICE_2_URL') . '/' . $endpoint, $request->query());
        return response($response->body(), $response->status());
    });

    Route::post('/service2/{endpoint}', function ($endpoint, Request $request) {
        $response = Http::withToken($request->bearerToken())
                        ->post(env('API_SERVICE_2_URL') . '/' . $endpoint, $request->all());
        return response($response->body(), $response->status());
    });
});