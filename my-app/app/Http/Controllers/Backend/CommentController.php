<?php

namespace App\Http\Controllers\Backend;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('Panel.pages.comments.index', compact('comments'));
    }

    public function create()
    {
        return view('Panel.pages.comments.create');

    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'author_name' => 'required|string|max:255',
            'author_position' => 'nullable|string|max:255',
            'comment' => 'required|string',
            'image' => 'nullable|image',
            'status' => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('comments');
        }

        Comment::create($data);
        return redirect()->route('comments.index')->with('success', 'Comment uğurla əlavə olundu.');
    }

    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        return view('Panel.pages.comments.edit', compact('comment'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'author_name' => 'required|string|max:255',
            'author_position' => 'nullable|string|max:255',
            'comment' => 'required|string',
            'image' => 'nullable|image',
            'status' => 'required|boolean',
        ]);

        $comment = Comment::findOrFail($id);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('comments');
        }

        $comment->update($data);
        return redirect()->route('comments.index')->with('success', 'Komment uğurla redakte olundu.');
    }

    public function destroy($id)
    {
        $comment = Comment::find($id);

        if (!$comment) {
            return redirect()->route('comments.index')->with('error', 'Yorum bulunamadı');
        }

        if ($comment->image && file_exists(public_path('storage/' . $comment->image))) {
            unlink(public_path('storage/' . $comment->image));
        }

        $comment->delete();

        return redirect()->route('comments.index')->with('Uğurla silindi');
    }


}
