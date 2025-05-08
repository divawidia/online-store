<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DashboardProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['galleries', 'category'])->where('users_id', Auth::user()->id)->get();
        return view('pages.dashboard-products', [
            'products' => $products
        ]);
    }

    public function details(Product $product)
    {
        $categories = Category::all();

        return view('pages.dashboard-products-details', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function uploadGallery(Request $request){
        $data = $request->all();

        try {
            // Store the file to Azure Blob Storage
            $data['photos'] = Storage::disk('azure')->putFile('assets/product', $data['photos']);
        } catch (\Exception $e) {
            Log::error('Azure upload error: ' . $e->getMessage());
        }

        ProductGallery::create($data);

        return redirect()->route('dashboard-product-details', $request->products_id);
    }

    public function deleteGallery(ProductGallery $gallery)
    {
        if (Storage::disk('azure')->exists($gallery->photos)){
            try {
                // Store the file to Azure Blob Storage
                Storage::disk('azure')->delete($gallery->photos);
            } catch (\Exception $e) {
                Log::error('Azure upload error: ' . $e->getMessage());
            }
        }

        $gallery->delete();
        return redirect()->route('dashboard-product-details', $gallery->products_id);
    }

    public function create()
    {
        $categories = Category::all();

        return view('pages.dashboard-products-create', [
            'categories' => $categories
        ]);
    }

    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $product = Product::create($data);

        foreach ($data['photo'] as $photo) {
            $photoData['photos'] = Storage::disk('azure')->putFile('assets/product', $photo);
            $product->galleries()->create($photoData);
        }

        return redirect()->route('dashboard-product');
    }

    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);

        $product->update($data);

        return redirect()->route('dashboard-product');
    }
}
