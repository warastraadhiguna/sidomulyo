<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = Product::with(['user', 'category']);

            return DataTables::of($query)->addColumn('action', function ($item) {
                return '
                    <div class="btn-group">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">
                                Aksi
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="' . route('product.edit', $item->id) . '">
                                    Sunting
                                </a>
                                <form action="' . route('product.destroy', $item->id) . '" method="POST">
                                    ' . method_field('delete') . csrf_field() . '
                                    <button type="submit" class="dropdown-item text-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                ';
            })->rawColumns(['action'])->make();
        }

        return view('pages.admin.product.index');
    }
}