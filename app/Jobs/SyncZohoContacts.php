<?php

namespace App\Jobs;
use App\Services\ZohoService;

use App\Models\zoho_user;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SyncZohoContacts implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $contacts = zoho_user::all();

       

        foreach ($contacts as $contact) {
            // Example Zoho API call (you need your access token here)
           //$response = Http::withToken(env('ZOHO_ACCESS_TOKEN'))
           $response = Http::withToken(ZohoService::getAccessToken())
                ->post('https://campaigns.zoho.com/api/v1/contacts/upsert', [
                    'email' => $contact->email,
                    'first_name' => $contact->first_name,
                    'last_name'  => $contact->last_name,
                    'tags'       => json_decode($contact->tags, true), // tags stored as JSON
                ]);

            // You can log success/failure for summary email
            if ($response->successful()) {
                \Log::info("Synced: " . $contact->email);
            } else {
                \Log::error("Failed: " . $contact->email . ' | Response: ' . $response->body());
            }
            
        }
    }
    }

