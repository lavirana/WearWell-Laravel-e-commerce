<?php

namespace App\Http\Controllers;

use App\Models\zoho_user;
use Illuminate\Http\Request;

use App\Jobs\SyncZohoContacts;

class upload_csv extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('upload_csv');
    }




    public function upload(Request $request)
    {

       // dd($request);

        $request->validate([
            'csv_file' => 'required|mimes:csv,txt'
        ]);

        $file = $request->file('csv_file');
        $handle = fopen($file, 'r');

        $isHeader = true;
        while (($data = fgetcsv($handle, 1000, ',')) !== false) {
            if ($isHeader) {
                // Skip header row (email, first_name, last_name, tags)
                $isHeader = false;
                continue;
            }

            // CSV Example row: john@example.com,John,Doe,php|laravel|developer
            $email      = $data[0];
            $firstName  = $data[1];
            $lastName   = $data[2];
            $tagsString = $data[3];

            // Convert tags from string to array (split by |)
            $tags = explode('|', $tagsString);

            // Save in DB
            zoho_user::create([
                'email'      => $email,
                'first_name' => $firstName,
                'last_name'  => $lastName,
                'tags'       => json_encode($tags), // Store as JSON
            ]);
        }

        fclose($handle);

        return back()->with('success', 'CSV uploaded successfully!');
    }



    public function startSync()
{
    SyncZohoContacts::dispatch();
    return back()->with('success', 'Sync has started. Check logs for progress.');
}



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
