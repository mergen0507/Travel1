<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
public function show($id)
{
$category = Category::findOrFail($id);
$places = $category->places;
return view('categories.show', compact('category', 'places'));
}
}
