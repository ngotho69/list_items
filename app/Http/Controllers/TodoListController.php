<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;

class TodoListController extends Controller
{
    public function index()
    {
        return view('welcome', ['listItems' => ListItem::all()]);
    }

    public function saveItem(Request $request)
    {
        $item = new ListItem;
        $item->name = $request->name;
        $item->is_complete = 0;
        $item->save();

        return view('welcome');
    }

    public function markItem($id)
    {
        $item = ListItem::find($id);
        $item->is_complete = 1;
        $item->save();
        return redirect('/');
    }
}
