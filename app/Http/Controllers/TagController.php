<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function store(Request $request)
    {
        Tag::create($request->all());

        return redirect('/');
    }

    public function destroy(Tag $tag)
    {
//        dd($tag);
        $tag->delete();

        return redirect('/');
    }
}
