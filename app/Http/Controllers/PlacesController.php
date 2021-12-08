<?php

namespace App\Http\Controllers;

use App\Models\Places;
use App\Http\Requests\StorePlacesRequest;
use App\Http\Requests\UpdatePlacesRequest;
use App\Models\Story;

class PlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('places', [
            "title" => "Places",
            "places" => Places::latest()->paginate(9)->onEachSide(0)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePlacesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlacesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Places  $places
     * @return \Illuminate\Http\Response
     */
    public function show(Places $places)
    {
        return view('place', [
            "title" => $places->name,
            "places" => $places,
            "stories" => Story::all()->where('places_id', $places->id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Places  $places
     * @return \Illuminate\Http\Response
     */
    public function edit(Places $places)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlacesRequest  $request
     * @param  \App\Models\Places  $places
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlacesRequest $request, Places $places)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Places  $places
     * @return \Illuminate\Http\Response
     */
    public function destroy(Places $places)
    {
        //
    }
}
