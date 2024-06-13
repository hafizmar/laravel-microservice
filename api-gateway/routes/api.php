<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

// Route::middleware('auth:sanctum')->group(function () {

    Route::get('/service1/{endpoint}', function ($endpoint, Request $request) {
        $response = Http::get(env('API_SERVICE_1_URL') . '/' . $endpoint, $request->query());

        if ($response->successful()) {
            return response($response->body(), $response->status());
        } else {
            return response()->json([
                'error' => 'Failed to retrieve data from Profile Service',
                'message' => []
            ], $response->status());
        }
    });

    Route::post('/service1/{endpoint}', function ($endpoint, Request $request) {
        $response = Http::withToken($request->bearerToken())
                        ->post(env('API_SERVICE_1_URL') . '/' . $endpoint, $request->all());

        if ($response->successful()) {
            return response($response->body(), $response->status());
        } else {
            return response()->json([
                'error' => 'Failed to post data to Profile Service',
                'message' => []
            ], $response->status());
        }
    });

    Route::get('/service2/{endpoint}', function ($endpoint, Request $request) {
        $response = Http::withToken($request->bearerToken())
                        ->get(env('API_SERVICE_2_URL') . '/' . $endpoint, $request->query());

        if ($response->successful()) {
            return response($response->body(), $response->status());
        } else {
            return response()->json([
                'error' => 'Failed to retrieve data from Playlist Service',
                'message' => []
            ], $response->status());
        }
    });

    Route::post('/service2/{endpoint}', function ($endpoint, Request $request) {
        $response = Http::withToken($request->bearerToken())
                        ->post(env('API_SERVICE_2_URL') . '/' . $endpoint, $request->all());

        if ($response->successful()) {
            return response($response->body(), $response->status());
        } else {
            return response()->json([
                'error' => 'Failed to post data to Playlist Service',
                'message' => []
            ], $response->status());
        }
    });

// });
