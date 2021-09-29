<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Blog;
use App\Models\BlogCategory;

class BlogController extends Controller
{

    public function getServicePage($alias)
    {
        $category = BlogCategory::where('alias', $alias)->first();

        if (!is_null($category)) {
            if ($category->children()->count() > 0) {
                return view('front.blog.list', compact('category'));
            }else{
                return view('front.blog.single', compact('category'));
            }
        }else{
            return abort(404);
        }
    }


    public function getServicesListPage($alias, $childAlias)
    {
        // code...
    }

    /**
     *  private method
     *  get meta datas of pages
     */
    public function getSeo($page)
    {
        $seo['title'] = $page->translation($this->lang->id)->first()->meta_title ?? $page->translation($this->lang->id)->first()->title;
        $seo['keywords'] = $page->translation($this->lang->id)->first()->meta_keywords ?? $page->translation($this->lang->id)->first()->title;
        $seo['description'] = $page->translation($this->lang->id)->first()->meta_description ?? $page->translation($this->lang->id)->first()->title;

        return $seo;
    }

}
