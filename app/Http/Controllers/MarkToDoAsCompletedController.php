<?php

namespace App\Http\Controllers;

use App\ToDo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MarkToDoAsCompletedController extends Controller
{
    public function __invoke(ToDo $todo)
    {
        $todo->update([
            'completed_at' => $todo->completed_at ? null : Carbon::now()
        ]);

        return redirect(route('to-dos.show-all'));
    }
}
