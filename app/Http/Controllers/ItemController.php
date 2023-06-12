<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Item;

use Illuminate\Http\Request;

class ItemController extends Controller
{ 

    public function view($id, $name) {
        $item = Item::find($id);
        return view('items.it-view')->with([
            'title' => $name.' - My Todo List App',
            'todo' => $item,
        ]);
    }

    public function viewall() {
        $items = Item::all();
        return view('items.viewall')->with([
            'title' => 'All items - My Todo List App',
            'todos' => $items,
        ]);
    }

    public function add(Request $request) {
        $item = new Item();
        $item->item_name = $request->get('todo');
        $item->save();

        $items = Item::all();

        return view('items.add')->with([
            'title' => 'Success - My Todo List App',
        ]);
    }

    public function delete($id) {
        $item = Item::find($id);
        $item->delete();

        $items = Item::all();

        return view('items.delete')->with([
            'title' => 'Success - My Todo List App',
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}
