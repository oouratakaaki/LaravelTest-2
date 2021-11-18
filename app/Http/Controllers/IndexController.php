<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;


class IndexController extends Controller
{
    /*
    public function index()
    {
        $items = DB::select('select * from tests');
        return view('index', ['items' => $items]);
    }
    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
        ];
        DB::insert('insert into tests (name, mail) values (:name, :mail)', $param);
        return redirect('/thanks');
    }
    */

    public function index()
    {
        $items = Test::all();
        return view('index', ['items' => $items]);
    }

    public function create(Request $request)
    {
        $this->validate($request, Test::$rules);
        $form = $request->all();
        Test::create($form);
        return redirect('/thanks');
    }
}