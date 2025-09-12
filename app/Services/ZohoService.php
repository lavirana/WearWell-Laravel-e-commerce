<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ZohoService
{
    public static function getAccessToken()
    {
        $accessToken = cache('zoho_access_token');

        if (!$accessToken) {
            $response = Http::asForm()->post('https://accounts.zoho.com/oauth/v2/token', [
                'refresh_token' => env('ZOHO_REFRESH_TOKEN'),
                'client_id' => env('ZOHO_CLIENT_ID'),
                'client_secret' => env('ZOHO_CLIENT_SECRET'),
                'grant_type' => 'refresh_token',
               // 'access_token' => env('ZOHO_ACCESS_TOKEN'),
            ]);

          //  echo'<pre>'; print_r($response); echo'</pre>'; exit;

            if ($response->successful()) {
                //dd($response);
                //$accessToken = $response['access_token'];
                $accessToken = '1000.7458cb658b21cd7970fae15581aac1d8.950458124bb91975be27dc7acb35f71e';
                cache(['zoho_access_token' => $accessToken], now()->addMinutes(55));
            } else {
                throw new \Exception("Zoho Token Refresh Failed: " . $response->body());
            }
        }

        return $accessToken;
    }
}
