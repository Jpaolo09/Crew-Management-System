<?php

namespace App\Http\Controllers;

use App\Models\Crew;
use App\Models\Document;
use Illuminate\Http\Request;

class CrewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard', ['crews' => Crew::all()]);
    }

    // Show create crews form
    public function create()
    {
        return view('crews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:crews,email',
            'address' => 'required',
            'education' => 'required',
            'phone' => 'required',
        ]);

        Crew::create($formFields);

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Crew $crew)
    {
        return view('crews.show', ['crew' => $crew]);
    }

    public function edit(Crew $crew)
    {
        return view('crews.edit',  ['crew' => $crew]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crew $crew)
    {
        $formFields = $request->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'education' => 'required',
            'phone' => 'required',
        ]);

        $crew->update($formFields);

        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crew $crew)
    {
        $crew->delete();

        return redirect('/dashboard');
    }
}
