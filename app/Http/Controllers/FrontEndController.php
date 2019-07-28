<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Repositories\ProductsRepository;
use App\Repositories\AmbiencesRepository;
use App\Repositories\EbooksRepository;
use App\Repositories\FinishesRepository;
use App\Product;
use App\Sub_category;
use App\Article;

class FrontEndController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getHomepage()
    {
        return view('welcome');
    }

    /* ABOUT */
    public function getAbout()
    {
       return view('frontend.about');
    }

    public function getLuxxusWorld()
    {
       return view('frontend.about');
    }

    public function getTermsAndConditions()
    {
       return view('frontend.terms-and-conditions');
    }

    public function getCleanAndCare()
    {
       return view('frontend.terms-and-conditions');
    }

    public function getFaqs()
    {
       return view('frontend.terms-and-conditions');
    }
    /* end ABOUT */

    /* ALL-PRODUCTS */
    public function getAllProducts()
    {
        $categories = ProductsRepository::getAllProducts();
        $best_sellers = ProductsRepository::getBestSeller();
        return view('frontend.all-products', compact('categories','best_sellers'));
    }
    /* end ALL-PRODUCTS */

    /* PRODUCTS */
    public function getLighting()
    {
       return view('frontend.lighting');
    }

    public function getLFurniture()
    {
       return view('frontend.furniture');
    }

    public function getLFinishes()
    {
       return view('frontend.finishes');
    }

    public function getCatalogue()
    {
       return view('frontend.catalogue');
    }

    public function getProductDetail($product)
    {
        $product = ProductsRepository::getProductDetail($product);
        $products = Product::all();
        $subcategories = Sub_category::all();
        return view('frontend.product-detail', compact('product', 'products','subcategories'));
    }
    /* end PRODUCTS */

    /* INSPIRATIONS */
    public function getInspirations()
    {
       return view('frontend.inspirations');
    }

    public function getInteriors()
    {
       return view('frontend.interiors');
    }

    public function getEbooks()
    {
       return view('frontend.design-books');
    }

    public function getVideo()
    {
        return view('frontend.video');
    }
    /* end INSPIRATIONS */

    /* PRESS */
    public function getPress()
    {
       return view('press.press');
    }
    /* end PRESS */

    /* CONTACT */
    public function getContactUs()
    {
       return view('frontend.contact-us');
    }

    public function getBrandAmbassadors()
    {
       return view('frontend.brand-ambassadors');
    }
    /* end CONTACT */
}
