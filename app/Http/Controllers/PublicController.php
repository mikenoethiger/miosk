<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kiosk()
    {
        $products = Product::all();
        $filter = "all";
        return view('kiosk', compact('products', 'filter'));
    }

    public function drinks()
    {
        $products = Category::where('name', '=', 'drinks')->first()->products;
        $filter = "drinks";
        return view('kiosk', compact('products', 'filter'));
    }

    public function food()
    {
        $products = Category::where('name', '=', 'food')->first()->products;
        $filter = "food";
        return view('kiosk', compact('products', 'filter'));
    }

    public function search()
    {
        $searchText = Input::get('search');
        $searchTerms = explode(' ', $searchText);

        Log::info($searchTerms);

        $query = DB::table('products');

        foreach($searchTerms as $term)
        {
            $query->where('name', 'LIKE', '%'. $term .'%');
        }

        $products = $query->get();

        $filter = "search";
        return view('kiosk', compact('products', 'filter'));
    }

    public function services() {
        return view('services');
    }
}