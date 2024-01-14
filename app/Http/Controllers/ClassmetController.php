<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\Classmet;
use Illuminate\Http\Request;

class ClassmetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Homepage',[
            'title' => 'My Homepage',
            'description' => 'Selamat Datang Di Web Classmets Semua Props Milik Harmoni Tech 🙌'
         ]);
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
    public function show(Classmet $classmet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classmet $classmet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Classmet $classmet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classmet $classmet)
    {
        //
    }
}
