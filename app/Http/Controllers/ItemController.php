<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $item = Item::all();
        // dd($item);
        return view('item.index', compact('item'));
    }

    public function create()
    {
        return view('item.create');
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token', 'submit']));
        Item::create($request->except(['_token', 'submit']));
        return redirect('/item');
    }

    public function show($id)
    {
        $item = Item::find($id);

        return view('item.show', compact('item'));
    }

    public function edit($id)
    {
        $item = Item::find($id);
        // dd($warga);
        return view('item.edit', compact(['item']));
    }

    public function update($id, Request $request)
    {
        $item = Item::find($id);
        $item->update($request->except(['_token', 'submit']));
        return redirect('/item');
    }

    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect('/item');
    }
}
