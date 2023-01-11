<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;

class todoListController extends Controller
{
    function renderList() {
        return view('welcome', ['listItems' => ListItem::where('is_done', 0)->get()]);
    }
    function renderListDone() {
        return view('welcome', ['listItems' => ListItem::where('is_done', 1)->get()]);
    }
    function saveItem(Request $request) {
        $newListItem = new ListItem;
        $newListItem->name = $request->listItem;
        $newListItem->is_done = 0;
        $newListItem->save();

        return redirect('/');
    }
    function markComplete($id) {
        $listItem = ListItem::find($id);
        $listItem-> is_done = 1;
        $listItem->save();

        return redirect('/');
    }
    function deleteTask($id) {
        $listItem = ListItem::find($id);
        $listItem->delete();

        return redirect('/doneTasks');
    }
}
