<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Category::query();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1"
                                    type="button" id="action' .  $item->id . '"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false">
                                        Aksi
                                </button>
                                <div class="dropdown-menu" aria-labelledby="action' .  $item->id . '">
                                    <a class="dropdown-item" href="' . route('category.edit', $item->id) . '">
                                        Sunting
                                    </a>
                                    <form action="' . route('category.destroy', $item->id) . '" method="POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                    </div>';
                })
                ->editColumn('photo', function ($item) {
                    return $item->photo ? '<img src="' . Storage::url($item->photo) . '" style="max-height: 40px;"/>' : '';
                })
                ->rawColumns(['action', 'photo'])
                ->make();
        }

        return view('pages.admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);

        try {
            // Store the file to Azure Blob Storage
            $data['photo'] = Storage::disk('azure')->putFile('assets/category', $data['photo']);
        } catch (\Exception $e) {
            Log::error('Azure upload error: ' . $e->getMessage());
        }


        Category::create($data);

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('pages.admin.category.edit', [
           'item' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);

        // check if the edited category have photo, then delete the previous photo
        if ($data['photo'] !== null) {
            if (Storage::disk('azure')->exists($category->photo)){
                try {
                    // Store the file to Azure Blob Storage
                    Storage::disk('azure')->delete($category->photo);
                } catch (\Exception $e) {
                    Log::error('Azure upload error: ' . $e->getMessage());
                }
            }
        }

        try {
            // Store the file to Azure Blob Storage
            $data['photo'] = Storage::disk('azure')->putFile('assets/category', $data['photo']);
        } catch (\Exception $e) {
            Log::error('Azure upload error: ' . $e->getMessage());
        }

        $category->update($data);

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if (Storage::disk('azure')->exists($category->photo)){
            try {
                // Store the file to Azure Blob Storage
                Storage::disk('azure')->delete($category->photo);
            } catch (\Exception $e) {
                Log::error('Azure upload error: ' . $e->getMessage());
            }
        }

        $category->delete();

        return redirect()->route('category.index');
    }
}
