<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateToDoRequest;
use App\ToDo;

class UpdateToDoController extends Controller
{
    public function __invoke(ToDo $todo, CreateToDoRequest $request)
    {
        $todo->update($request->all());

        return redirect(route('to-dos.show-all'));
    }
}
