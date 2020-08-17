<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProfileResource;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the Users Resource.
     *
     * @group Search Management
     * @authenticated
     *
     * @apiResourceCollection  \App\Http\Resources\ProfileResource
     * @apiResourceModel  \App\Models\Profile
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $query = [
            'match' => [
                'title' => $request->search
            ]
        ];
        $profiles = Profile::searchByQuery($query);
        
        return response()->json(ProfileResource::collection($profiles));
        
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    
    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
