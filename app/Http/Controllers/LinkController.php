<?php

namespace App\Http\Controllers;

use App\Models\Link;

class LinkController extends Controller
{
    public function index()
    {
        return view('home', [
            'links' => Link::all(),
        ]);
    }

    public function store()
    {
        request()->validate([
            'name' => 'required|min:2|unique:links',
            'url' => 'required|url',
        ]);

        Link::create(['name' => request('name'), 'url' => request('url')]);

        return redirect('/');
    }

    public function redirect($id)
    {
        $link = Link::find($id);

        return redirect($link->url);
    }

    public function show($id)
    {
        $link = Link::find($id);

        return view('show', ['link' => $link]);
    }
}
