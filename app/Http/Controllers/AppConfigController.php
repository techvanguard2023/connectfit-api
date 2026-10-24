<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class AppConfigController extends Controller
{
    /**
     * Return the public configuration clients read on startup.
     */
    public function __invoke(): JsonResponse
    {
        return response()->json([
            'data' => [
                'api_version' => 'v1',
                'min_supported_version' => (string) config('connectfit.app.min_supported_version'),
                'latest_version' => (string) config('connectfit.app.latest_version'),
            ],
        ]);
    }
}
