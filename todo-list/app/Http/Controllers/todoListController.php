<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;

class todoListController extends Controller
{
    function saveItem(Request $request) {
        $newListItem = new ListItem;
        $newListItem->name =$request->listItem;
        $newListItem->is_done = 0;
        $newListItem->save();

        return view('welcome');
    }
}
