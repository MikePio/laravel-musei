<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MuseumRequest;
use App\Models\Admin\Museum;
use Illuminate\Http\Request;


class MuseumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $museums = Museum::all();
        return view('admin.museums.index', compact('museums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.museums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MuseumRequest $request)
    {
        $form_data = $request->all();
        $form_data['slug'] = Museum::generateSlug($form_data['name']);

        $new_museum = Museum::create($form_data);

        return redirect()->route('admin.museums.show', $new_museum);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Museum $museum)
    {
        return view('admin.museums.show', compact('museum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Museum $museum)
    {
        return view('admin.museums.edit', compact('museum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MuseumRequest $request, Museum $museum)
    {
        $form_data = $request->all();
        $form_data = $request->all();
        if($form_data['title'] !== $museum->title){
            $form_data['slug'] = Museum::generateSlug($form_data['title']);
        }

        $museum->update($form_data);

        return redirect()->route('admin.museums.show', compact('museum'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Museum $museum)
    {
        $museum->delete();

        return redirect()->route('admin.museums.index')->with('deleted', "$museum->name eliminato correttamente" );
    }
}
