<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Set;
use App\Models\Promocode;
use App\Models\UserField;
use App\Models\Promotion;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Collection;
use App\Models\Gallery;

class PagesController extends Controller
{
    /**
     *  get action
     *  render home page
     */
     public function index()
     {
         $page = Page::where('alias', 'home')->first();
         $gallery = Gallery::where('alias', 'HP Slider')->first();

         $seoData = $this->getSeo($page);
         return view('front.home', compact('seoData', 'gallery'));
     }

    /**
     *  get action
     *  render dinamic pages by alias
     */
    public function getPages($slug)
    {
        $page = Page::where('alias', $slug)->first();
        if (is_null($page)) {
            return redirect()->route('404');
        }

        if (view()->exists('front/pages/'.$slug)) {
            $seoData = $this->getSeo($page);
            return view('front.pages.'.$slug, compact('seoData', 'page'));
        }else{
            $seoData = $this->getSeo($page);
            return view('front.pages.default', compact('seoData', 'page'));
        }
    }

    /**
     *  get action
     *  render 404 page
     */
    public function get404()
    {
        return view('front.'. $this->device .'.404');
    }

    /**
     *  get action
     *  render wellcome page
     */
    public function wellcome()
    {
        $userfields = UserField::where('in_register', 1)->get();

        return view('front.'. $this->device .'.pages.wellcome', compact('userfields'));
    }


    public function getPromocode($promocodeId)
    {
        $promocode = Promocode::find($promocodeId);

        if(count($promocode) > 0) {
            session(['promocode' => $promocode]);
            return redirect()->route('home');
        }
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
