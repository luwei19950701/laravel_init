<?php

namespace App\Http\Controllers\Api;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticleController extends BaseController
{
    //
    public function index(){
        $data = Articles::all();
        return $this->response('获取成功', $data);
    }

    public function store(){
        $articleModel = new Articles();
        $articleModel->category_id = 1;
        $articleModel->user_id = 1;
        $articleModel->slug = 'test slug';
        $articleModel->title = 'test title';
        $articleModel->sub_title = 'test sub_title';
        $articleModel->content = 'test content';
        $articleModel->save();
    }

}
