<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GanttController extends Controller
{
    public function get()
    {
        $tasks = new Task();
        $links = new Link();

        return response()->json([
            "data" => $tasks->orderBy('sortorder')->get(),
            "links" => $links->all()
        ]);
    }
}
