<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;

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

    public function drawCartProduct(Request $request, $id){
        $this -> table_obj =  DB::table(self::TABLENAME_PRODUCT);

        $table = $this -> table_obj;
        $card = get_object_vars($table ->find($id));
        return view('product-cart', ['card' => $card]);
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

        $dublicate_bool = $this -> checkDublicate([['id_shopofmoney', $input['id_shopofmoney']], ['id_ebay', $input['id_ebay']], ['id_meshok', $input['id_meshok']]]);
        $add_operation_bool = false;

        if(!$dublicate_bool) $add_operation_bool = $table -> insert($input);

        if($add_operation_bool || $dublicate_bool){
            $last_element_id = $this -> getLastElement([['id_shopofmoney', $input['id_shopofmoney']], ['id_ebay', $input['id_ebay']], ['id_meshok', $input['id_meshok']]])['id'];
            return redirect("/product-cart/$last_element_id");
        }
        return $add_operation_bool;
    }

    public function updateCardProduct(Request $request){
        $this -> table_obj =  DB::table(self::TABLENAME_PRODUCT);
        $table = $this -> table_obj;

        $input = $request -> all();
        $input_id = $input['id'];

        $oldCard = get_object_vars($table -> find($input_id));

        if(isset($input['image_shopofmoney'])){ self::deletImg($oldCard['image_shopofmoney']); $input['image_shopofmoney'] = self::saveImg($input['image_shopofmoney']);}
        else $input['image_shopofmoney'] = $oldCard['image_shopofmoney'];
        
        if(isset($input['image_ebay'])){ self::deletImg($oldCard['image_ebay']); $input['image_ebay'] = self::saveImg($input['image_ebay']);}
        else $input['image_ebay'] = $oldCard['image_ebay'];

        if(isset($input['image_meshok'])){ self::deletImg($oldCard['image_meshok']); $input['image_meshok'] = self::saveImg($input['image_meshok']);}
        else $input['image_meshok'] = $oldCard['image_meshok'];
        
        unset($input['_token']);
        unset($input['id']);

        if($table -> where('id', $input_id) -> update($input)) return view('product-cart', ['card' => get_object_vars($table ->find($input_id))]);

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

    private function getLastElement($arr){
        $table = $this -> table_obj;
        return get_object_vars($table -> where($arr)-> first());
    }

    private static function saveImg($img){
        return $img-> storePublicly("img");

    }

    private static function deletImg($img_patch){
        Storage::delete($img_patch);
    }
}
