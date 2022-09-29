<?php

namespace App\Http\Controllers;

use App\Models\IncomingItem;
use Illuminate\Http\Request;

class IncomingItemController extends Controller
{
    public function index()
    {
        // $incoming = IncomingItem::all();
        // dd($item);
        // return view('incoming.index', compact('incoming'));
        $incoming = IncomingItem::latest()->paginate(5);

        return view('incoming.index', compact('incoming'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('incoming.create');
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token', 'submit']));
        // IncomingItem::create($request->except(['_token', 'submit']));
        // return redirect('/incoming-item');
        $request->validate([
            'item_code' => 'required',
            'entry_date' => 'required',
            'item_name' => 'required',
            'type' => 'required',
            'sender_phone' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'count' => 'required',
            'sender' => 'required',
            'receiver' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        IncomingItem::create($input);

        return redirect()->route('incoming.index')->with('success', 'Incoming item added successfully.');
    }

    public function show(IncomingItem $incoming)
    {
        return view('incoming.show', compact('incoming'));
    }

    public function edit(IncomingItem $incoming)
    {
        return view('incoming.edit', compact('incoming'));
    }

    public function update(Request $request, IncomingItem $incoming)
    {
        $request->validate([
            'item_code' => 'required',
            'entry_date' => 'required',
            'item_name' => 'required',
            'type' => 'required',
            'sender_phone' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'count' => 'required',
            'sender' => 'required',
            'receiver' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $incoming->update($input);

        return redirect()->route('incoming.index')->with('success', 'Incoming item has been successfully updated');
    }

    public function destroy(IncomingItem $incoming)
    {
        $incoming->delete();

        return redirect()->route('incoming.index')->with('success', 'Incoming item has been deleted successfully');
    }
}
