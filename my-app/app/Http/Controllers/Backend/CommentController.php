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
    ]);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('public/comments');
        $data['image'] = str_replace('public/', '', $imagePath);
    } else {
        $data['image'] = null;
    }

    Comment::create([
        'author_name' => $request->input('author_name'),
        'author_position' => $request->input('author_position'),
        'comment' => $request->input('comment'),
        'image' => $data['image'],
    ]);

    return redirect()->route('comments.index')->with('success', 'Komment uğurla əlavə olundu!');
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
            if ($comment->image) {
                $oldImagePath = storage_path('app/public/storage/comments' . $comment->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $data['image'] = $request->file('image')->store('public/comments');
        }

        $comment->update($data);
        return redirect()->route('comments.index')->with('success', 'Komment uğurla redakte olundu.');
    }

    public function destroy($id)
    {
        $comment = Comment::find($id);

        if (!$comment) {
            return redirect()->route('comments.index')->with('error', 'Tapılmadı');
        }

        if ($comment->image) {
            $imagePath = storage_path('app/public/comments/' . $comment->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $comment->delete();
        return redirect()->route('comments.index')->with('success', 'Komment uğurla silindi.');
    }
}
