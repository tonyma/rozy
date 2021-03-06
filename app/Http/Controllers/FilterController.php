<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Product;
use App\Keyword;
use App\Seller;

class FilterController extends Controller
{
    public function Search(Request $req){
        $addresses = Seller::filterAddress();
        $product  = new Product;
        $filter = $req->toArray();
        $products = null;
        $dataOrder = $req->validate([
            'ordProp' =>'in:ALL,HOTSELL,CREATE,RATE,PRICE,PRICE,VIEW,NAME',
            'ordType' =>'in:DESC,ASC'
        ]);
        $products = $product->ProductFilter(
            $req->cat,
            urldecode($req->keyword),
            $req->from,
            $req->to,
            $req->address,
            $req->star,
            $dataOrder)->appends($req->except('page'));
        $countAfterFilter = $product->getCountAfterFilter($req->cat,
            urldecode($req->keyword),
            $req->from,
            $req->to,
            $req->address,  
            $req->star);
        if($req->keyword!==null && $products->count()>0){
            if($req->cat){
                $keyword = Keyword::where('keyword','like',urldecode($req->keyword).'%');
            }else $keyword = Keyword::where('keyword','like',urldecode($req->keyword).'%')->where('idcat',$req->cat ?? 0);
            if($keyword->count()>0){
                $keyword = $keyword->first();
                $keyword->update(['count'=>$keyword->count+1]);
            }else{
                Keyword::insert(['keyword'=>urldecode($req->keyword),'idcat'=>$req->cat ?? 0]);
            }
        }
        unset($filter['ordProp']);
        unset($filter['ordType']);
        return view('filter',compact('products','filter','countAfterFilter','addresses'));
    }
}
