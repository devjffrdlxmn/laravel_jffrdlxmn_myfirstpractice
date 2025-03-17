<?php

namespace App\Http\Controllers;

use App\Models\Jffrdlxmn;
use Illuminate\Http\Request;
use  App\Models\Dojo;
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
        $dojos = Dojo::all();
        return view('jffrdlxmn.create',["dojos" => $dojos]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'dojo_id' => 'required|exists:dojos,id',
        ]);
        Jffrdlxmn::create($validated);
        return redirect()->route('jffrdlxmn.index');
    }

    public function destroy()
    {

    }


}
