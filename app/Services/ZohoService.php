<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ZohoService
{
    public static function getAccessToken()
    {
        //$accessToken = cache('zoho_access_token');
        $accessToken = '1000.6e3c7b7dfc14d8a621633214bda1bb94.b80d34c32bcf235f7bc0e56f412c06eb';
//dd($accessToken);
        if (!$accessToken) {
            $response = Http::asForm()->post('https://accounts.zoho.com/oauth/v2/token', [
                'refresh_token' => env('ZOHO_REFRESH_TOKEN'),
                'client_id'     => env('ZOHO_CLIENT_ID'),
                'client_secret' => env('ZOHO_CLIENT_SECRET'),
                'grant_type'    => 'refresh_token',
            ]);
            
     
            if ($response->successful()) {
                //dd($response);
               $accessToken = $response['access_token'];
                //$accessToken = $response->json()['access_token'];
                //$accessToken = '1000.6e3c7b7dfc14d8a621633214bda1bb94.b80d34c32bcf235f7bc0e56f412c06eb';
                cache(['zoho_access_token' => $accessToken], now()->addMinutes(55));
            } else {
                throw new \Exception("Zoho Token Refresh Failed: " . $response->body());
            }
        }

        return $accessToken;
    }
}
