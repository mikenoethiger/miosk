<?php

namespace App\Http\Controllers;

use App\Ranking;
use App\Suggestion;

use App\Http\Requests;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function suggestions()
    {
        $suggestions = Suggestion::all();
        return view('admin.suggestion.all', compact('suggestions'));
    }

    public function archivedSuggestions()
    {
        $suggestions = Suggestion::onlyTrashed()->get();
        return view('admin.suggestion.archived', compact('suggestions'));
    }

    public function markedSuggestions()
    {
        $suggestions = Suggestion::where('marked', '=', true)->get();
        return view('admin.suggestion.marked', compact('suggestions'));
    }

    public function ranking()
    {
        $rankings = Ranking::all();
        return view('admin.ranking.ranking', compact("rankings"));
    }
}