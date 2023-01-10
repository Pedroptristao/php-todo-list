<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;

class todoListController extends Controller
{
    function renderList() {
        return view('welcome', ['listItems' => ListItem::all()]);
    }
    function saveItem(Request $request) {
        $newListItem = new ListItem;
        $newListItem->name = $request->listItem;
        $newListItem->is_done = false;
        $newListItem->save();

        return view('welcome', ['listItems' => ListItem::all()]);
    }
}
