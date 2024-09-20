<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('panel.pages.products.index', compact('products'));
    }

    public function create()
    {
        return view('panel.pages.products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image',
            'short_text' => 'nullable|string',
            'price' => 'required|numeric',
            'color' => 'nullable|string',
            'qty' => 'required|integer',
            'status' => 'required|in:0,1',
            'suitability' => 'nullable|string',
            'content' => 'nullable|string',
        ]);

        $imagePath = $request->file('image')->store('products', 'public');

        // Slug'ı otomatik olarak name alanından oluştur
        $validated['slug'] = Str::slug($validated['name'], '-');

        Product::create(array_merge($validated, ['image' => $imagePath]));

        return redirect()->route('products.index')->with('success', 'Məhsul uğurla əlavə edildi!');
    }

    public function edit(Product $product)
    {
        return view('Panel.pages.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image',
            'short_text' => 'nullable|string',
            'price' => 'required|numeric',
            'color' => 'nullable|string',
            'qty' => 'required|integer',
            'status' => 'required|in:0,1',
            'suitability' => 'nullable|string',
            'content' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $validated['image'] = $imagePath;
        }

        $validated['slug'] = Str::slug($validated['name'], '-');

        $product->update($validated);

        return redirect()->route(route: 'products.index')->with('success', 'Məhsul uğurla redaktə edildi!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Məhsul uğurla silindi!');
    }
}
