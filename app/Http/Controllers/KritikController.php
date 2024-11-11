<?php

namespace App\Http\Controllers;

use App\Models\Kritik;
use App\Http\Requests\StoreKritikRequest;
use App\Http\Requests\UpdateKritikRequest;

class KritikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kritik = Kritik::with('user')->get();
        return view('movies', compact('kritik'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('components.movie-show');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKritikRequest $request)
    {
        //
        $data = $request->all();
        $data['user_id'] = $request->input('user_id');
        Kritik::create($data);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Kritik $kritik)
    {
        //
        $film = $kritik->film;
        return view('components.showKomentar', compact('kritik', 'film'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kritik = Kritik::with('user')->findOrFail($id);
        return view('components.editKomentar', compact('kritik'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKritikRequest $request, $id)
    {
        //
        $kritik = Kritik::findOrFail($id);
        $kritik->comment = $request->input('comment');
        $kritik->rating = $request->input('rating');
        $kritik->save();
        return redirect()->route('movies.show', ['film' => $kritik->film_id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $kritik = Kritik::findOrFail($id);
        $film_id = $kritik->film_id;
        $kritik -> delete();
        return redirect()->route('movies.show', ['film' => $film_id ]);
    }
}
