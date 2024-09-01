<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Annonce;

class AnnonceController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('annonce.create_annonce', compact('categories'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'images' => 'required|array|min:3',
                'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'phone_number' => 'required|string|max:8',
                'category_id' => 'required|exists:categories,id',
            ]);

    $annonce = new Annonce();
    $annonce->title = $request->title;
    $annonce->description = $request->description;
    $annonce->phone_number = $request->phone_number;
    $annonce->category_id = $request->category_id;

    $images = [];
    foreach ($request->file('images') as $image) {
        $path = $image->store('images', 'public');
        $images[] = $path;
    }
    $annonce->images = json_encode($images);
    $annonce->save();

     return redirect()->route('index')->with('success', 'Annonce created successfully.');
    } catch (\Exception $e) {
     return redirect()->back()->with('error', 'An error occurred while creating the annonce: ' . $e->getMessage());
    }
}
}
