<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function create()
    {
        return view('Panel.pages.blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:blogs',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('public/blogs');

        Blog::create([
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'description' => $request->input('description'),
            'image' => str_replace('public/', '', $imagePath),
        ]);

        return redirect()->route('blogs.index')->with('success', 'Bloq uğurla yaradıldı!');
    }

    public function edit(Blog $blog)
    {
        return view('Panel.pages.blogs.edit', compact('blog'));
    }
    public function index()
    {
        $blogs = Blog::all();
        return view('Panel.pages.blogs.index', compact('blogs'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:blogs,slug,' . $blog->id,
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'description' => $request->input('description'),
        ];

        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::delete('public/' . $blog->image);
            }
            $imagePath = $request->file('image')->store('public/blogs');
            $data['image'] = str_replace('public/', '', $imagePath);
        }

        $blog->update($data);

        return redirect()->route('blogs.index')->with('success', 'Bloq uğurla redaktə edildi!');
    }
}
