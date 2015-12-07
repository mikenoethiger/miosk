<?php

namespace App\Http\Controllers;

use App\Suggestion;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class SuggestionController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $suggestion = new Suggestion();
        $suggestion->suggestion = $request->input('suggestion');
        $suggestion->ip = $request->getClientIp();
        $suggestion->save();
        return redirect('/')->with('message', 'Ihr Vorschlag wurde aufgenommen.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->input('mark') != null) {
            Log::info('marking');
            $suggestion = Suggestion::find($id);
            $suggestion->marked = true;
            $suggestion->save();
        }
        else if ($request->input('restore') != null) {
            $suggestion = Suggestion::withTrashed()->find($id);
            $suggestion->restore();
        }
        else if ($request->input('unmark') != null) {
            $suggestion = Suggestion::find($id);
            $suggestion->marked = false;
            $suggestion->save();
        }
        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Suggestion::find($id)->delete();
        return redirect('/admin/suggestions')->with('archivedMessage', 'Vorschlag wurde archiviert');
    }
}
