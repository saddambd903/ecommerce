<?php

namespace App\Http\Controllers;

use App\Helper\ResponseHelper;
use App\Models\Categorie;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function CategoryList():JsonResponse
    {
        $data=Categorie::all();
        return ResponseHelper::out('success',$data,200);
    }
}
