<?php

namespace App\Http\Controllers;

use App\Models\Jffrdlxmn;
use Illuminate\Http\Request;

class JffrdlxmnController extends Controller
{
    public function index()
    {
        $datas = Jffrdlxmn::with('dojo')->orderBy('created_at','desc')->paginate(10);
        return view('jffrdlxmn.index', ["datas" => $datas ]);
    }
    public function show($id)
    {
        $data = Jffrdlxmn::with('dojo')->findOrFail($id);
        return view('jffrdlxmn.show', ["data" => $data]);
    }
    public function create()
    {

        return view('jffrdlxmn.create');
    }
    public function destroy()
    {

    }


}
