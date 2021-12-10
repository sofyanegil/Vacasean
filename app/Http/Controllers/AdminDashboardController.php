<?php

namespace App\Http\Controllers;

use App\Models\Story;
use App\Models\Places;
use App\Models\Country;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.places.index', [
            'places' => Places::latest()->paginate(4)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // dd(Country::all());
        return view("dashboard.places.create", [
            "countries" => Country::all()
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
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:places',
            'city' => 'required',
            'country_id' => 'required',
            'bujur' => 'required',
            'lintang' => 'required',
            'image' => 'image|file|max:1024', 'about' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('places-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Places::create($validatedData);

        return redirect('/dashboard/places')->with('success', 'New Places Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Places  $places
     * @return \Illuminate\Http\Response
     */
    public function show(Places $place)
    {

        return view('dashboard.places.show', [
            'place' => $place
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Places  $places
     * @return \Illuminate\Http\Response
     */
    public function edit(Places $place)
    {
        return view("dashboard.places.edit", [
            "place" => $place,
            "countries" => Country::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Places  $places
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Places $place)
    {
        $rules = [
            'name' => 'required|max:255',
            'city' => 'required',
            'country_id' => 'required',
            'bujur' => 'required',
            'lintang' => 'required',
            'about' => 'required',
        ];

        if ($request->slug != $place->slug) {
            $rules['slug'] = 'required|unique:places';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('places-images');
        }

        Places::where('id', $place->id)->update($validatedData);

        return redirect('/dashboard/places')->with('success', 'Places Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Places  $places
     * @return \Illuminate\Http\Response
     */
    public function destroy(Places $place, Story $story)
    {
        if ($place->image) {
            Storage::delete($place->image);
            Storage::delete($story->image);
        }

        $place->stories()->delete();

        Places::destroy($place->id);

        return redirect('/dashboard/places')->with('success', 'Place And All Story in This Place Has Been Deleted!');
    }

    public function checkSlugPlace(Request $request)
    {
        $slug = SlugService::createSlug(Places::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
