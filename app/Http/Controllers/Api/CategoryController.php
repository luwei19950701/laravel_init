<?php

namespace App\Http\Controllers\Api;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    //
    public function index(){
        $cate = Categories::all();
        return $this->response('获取成功', $cate);
    }

    public function store(){
        $cateModel = new Categories();
        $cateModel->name = 'test';
        $cateModel->save();
    }
}
