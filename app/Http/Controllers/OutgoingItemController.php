<?php

namespace App\Http\Controllers;

use App\Models\OutgoingItem;
use Illuminate\Http\Request;

class OutgoingItemController extends Controller
{
    public function index()
    {
        $outgoing = OutgoingItem::latest()->paginate(5);

        return view('outgoing.index', compact('outgoing'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('outgoing.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'item_code' => 'required',
            'exit_date' => 'required',
            'item_name' => 'required',
            'type' => 'required',
            'company_phone' => 'required',
            'sender' => 'required',
            'receiver' => 'required',
            'count' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        OutgoingItem::create($input);

        return redirect()->route('outgoing.index')->with('success', 'Outgoing item added successfully.');
    }

    public function show(OutgoingItem $outgoing)
    {
        return view('outgoing.show', compact('outgoing'));
    }

    public function edit(OutgoingItem $outgoing)
    {
        return view('outgoing.edit', compact('outgoing'));
    }

    public function update(Request $request, OutgoingItem $outgoing)
    {
        $request->validate([
            'item_code' => 'required',
            'exit_date' => 'required',
            'item_name' => 'required',
            'type' => 'required',
            'company_phone' => 'required',
            'sender' => 'required',
            'receiver' => 'required',
            'count' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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

        $outgoing->update($input);

        return redirect()->route('outgoing.index')->with('success', 'Outgoing item has been successfully updated');
    }

    public function destroy(OutgoingItem $outgoing)
    {
        $outgoing->delete();

        return redirect()->route('outgoing.index')->with('success', 'Outgoing item has been deleted successfully');
    }
}
