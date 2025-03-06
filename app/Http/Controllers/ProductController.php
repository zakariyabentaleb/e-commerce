<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Show all products
    public function index()
    {
        $products = Product::paginate(10); // Retrieve all products from the database
        return view('products', compact('products')); // Pass the products to the view
    }

    // Show a single product
    public function show($id)
    {
        $product = Product::findOrFail($id); // Retrieve the product by its ID
        return view('products.show', compact('product')); // Pass the product to the view
    }
}
