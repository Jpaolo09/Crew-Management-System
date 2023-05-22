<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create($id)
    {
        return view('documents.create', ['crew_id' => $id]);
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
            'crew_id' => 'numeric',
            'code' => 'required',
            'name' => 'required',
            'number' => 'required|numeric',
            'date_issued' => 'required|date',
            'date_expiry' => 'required|date',
            'remarks' => 'required',
        ]);

        Document::create($formFields);
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        return view('documents.show', ['document' => $document]);
    }

    public function edit(Document $document)
    {
        return view('documents.edit',  ['document' => $document]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        $formFields = $request->validate([
            'crew_id' => 'numeric',
            'code' => 'required',
            'name' => 'required',
            'number' => 'required|numeric',
            'date_issued' => 'required|date',
            'date_expiry' => 'required|date',
            'remarks' => 'required',
        ]);

        $document->update($formFields);
        
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        $document->delete();
        return redirect('/dashboard');
    }
}
