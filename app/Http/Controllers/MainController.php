<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $items = Items::all();
        return view('welcome', compact('items'));
    }

    public function page(Request $request)
    {
        $item=Items::find($request->id);
        return view('item',compact('item'));
    }
}
