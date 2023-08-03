<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //prendo gli aricoli dal databese e li porto nella index
        $getAllPictures = Picture::all();

        return view('pictures.index', ['pictures' => $getAllPictures]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pictures.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imageId =uniqid();
        
        $picture = new Picture;

        $picture->title = $request->title;
        $picture->description = $request->description;
        $picture->price = $request->price;
        //ho scordato di mettere ->nullable alla creazione della migration, vado a sistemare con un if/else
        if ($request->file('image')) {

            $picture->image = 'image-picture-' . $imageId . '.' . $request->file('image')->extension();
            $picture->image_id = $imageId;
            $fileName = 'image-picture-' . $imageId . '.' . $request->file('image')->extension();
            $image = $request->file('image')->storeAs('public', $fileName);

        } else {

            $picture->image = '';
            $picture->image_id = '';

        }
        $picture->save();

        return redirect('/');

    }

    /**
     * Display the specified resource.
     */
    public function show(Picture $picture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Picture $picture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Picture $picture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Picture $picture)
    {
        //
    }
}
