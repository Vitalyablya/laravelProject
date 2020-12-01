<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BDController extends Controller
{   

    private const TABLENAME_PRODUCT = "product";
    private $table_obj;

    public function importToProduct($card){
        $this -> table_obj =  DB::table(self::TABLENAME_PRODUCT);

        $table = $this -> table_obj;
        $duplicate = $this -> checkDublicate([['id_shopofmoney', $card['id_shopofmoney']], ['id_ebay', $card['id_ebay']], ['id_meshok', $card['id_meshok']]]);  // [['id_shopofmoney', $card['id_shopofmoney']], ['id_ebay', $card['id_ebay']], ['id_meshok', $card['id_meshok']]]
        if($duplicate) return true;

        $add_operation_bool = $table -> insert($card);
        return $add_operation_bool;
    }

    public function drawTableProduct(){
        $this -> table_obj =  DB::table(self::TABLENAME_PRODUCT);

        $table = $this -> getTable();
        return view('product-table', ['table' =>$table]);
    }

    public function drawCartProduct($id){
        $this -> table_obj =  DB::table(self::TABLENAME_PRODUCT);

        $table = $this -> table_obj;
        $card = $table ->find($id);
        return $card;
    }
    
    public function addCardProduct(Request $request){
        $this -> table_obj =  DB::table(self::TABLENAME_PRODUCT);

        $input = $request -> all();

        unset($input['_token']);

        $input['image_shopofmoney'] = isset($input['image_shopofmoney']) ? self::saveImg($input['image_shopofmoney']) : null;

        $input['image_ebay'] = isset($input['image_ebay']) ? self::saveImg($input['image_ebay']) : null;

        $input['image_meshok'] = isset($input['image_meshok']) ? self::saveImg($input['image_meshok']) : null;

        $input['id_shopofmoney'] = rand();
        $input['id_ebay'] = rand();
        $input['id_meshok'] = rand();

        $input['url_shopofmoney'] = "url".rand();
        $input['url_ebay'] = "url".rand();
        $input['url_meshok'] = "url".rand();

        $table = $this -> table_obj;
        $add_operation_bool = $table -> insert($input);
        if($add_operation_bool) 
        return $add_operation_bool;
    }

    private function checkDublicate($arr){
        $table = $this -> table_obj;
        return boolval($table -> where($arr)->first());
    }

    private function getTable(){
        $table = $this -> table_obj;
        $table = $table -> get() -> toArray();
        return $table;
    }

    private function getProduct(){

    }

    private static function saveImg($img){
        return $img-> storePublicly("img");

    }
}
