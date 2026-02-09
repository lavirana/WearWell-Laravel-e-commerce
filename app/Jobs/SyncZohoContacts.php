<?php

namespace App\Jobs;

use App\Services\ZohoService;
use App\Models\zoho_user;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Bus\Queueable;

class SyncZohoContacts implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable;

    public function __construct()
    {
        //
    }

    public function handle(): void
    {
        $contacts = zoho_user::all();
        $accessToken = ZohoService::getAccessToken();
        $listKey    = "3z2ff1f2f3f6da4c53bf0e1f67c03817b6da9f9a7df0c2f76794faf242e70ec514";
    
        foreach ($contacts as $contact) {
            $response = Http::withToken($accessToken)
                ->asForm()
                ->post('https://campaigns.zoho.com/api/v1.1/json/contacts/upsert', [
                    'scope'       => 'CampaignsAPI',
                    'listkey'     => $listKey,
                    'contactinfo' => json_encode([
                        'contactemail' => $contact->email,
                        'firstname'    => $contact->first_name,
                        'lastname'     => $contact->last_name,
                    ]),
                ]);

            if ($response->successful()) {
                Log::info('Contact created successfully: ' . $contact->email);
            } else {
                Log::error('Contact creation failed for: ' . $contact->email . ' | Response: ' . $response->body());
            }
        }
    }
}

