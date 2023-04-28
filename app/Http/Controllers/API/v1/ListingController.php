<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::latest()->get();
        $jobCount = $listings->count();

        return response()->json([
            'listings' => $listings,
            'job_count' => $jobCount
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => 'required | email',
            'tags' => 'required',
            'description' => 'required',
        ]);

        $listing = Listing::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'company' => $request->company,
            'location' => $request->location,
            'website' => $request->website,
            'email' => $request->email,
            'tags' => $request->tags,
            'description' => $request->description,
        ]);

        return response()->json([
            'message' => 'Job Listing Created Successfully',
            'data' => $listing
        ], 200);
    }

    /**
     * Display the listing for specific user
     * 
     * @return \Illuminate\Http\Response
     */
    public function getUserListings()
    {
        $listings = Listing::where('user_id', auth()->id())->get();

        return response()->json([
            'listings' => $listings
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function showListing(Listing $listing)
    {
        return response()->json([
            'listing' => $listing
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listing $listing)
    {
        Listing::where('id', $listing->id)->update([
            'title' => $request->title ?? $listing->title,
            'company' => $request->company ?? $listing->company,
            'location' => $request->location ?? $listing->location,
            'website' => $request->website ?? $listing->website,
            'email' => $request->email ?? $listing->email,
            'tags' => $request->tags ?? $listing->tags,
            'description' => $request->description ?? $listing->description,
        ]);

        $listing->refresh();

        return response()->json([
            'message' => 'Successfully Updated!',
            'listing' => $listing
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Listing $listing 
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {

        if ($listing->user_id != auth()->id()) {
            return response()->json([
                'message' => 'Unauthorized Action'
            ]);
        }

        $listing->delete();

        return response()->json([
            'message' => 'Successfully Deleted!'
        ]);
    }
}
