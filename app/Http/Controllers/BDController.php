<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BDController extends Controller
{   

    private const TABLENAME = "test";
    private $table_obj;

    public function __construct($table_name = self :: TABLENAME){
        $this -> table_obj =  DB::table($table_name);
    }

    public function main(){
        return dd($this -> getTable());
    }

    private function getCardByID($id){
        $table = $this -> table_obj;
        $card = $table ->find($id);
        return $card;
    }

    private function getTable(){
        $table = $this -> table_obj;
        $table = $table -> get() -> toArray();
        return $table;
    }

    public function importBd($card){
        $table = $this -> table_obj;
        $duplicate = $table -> where('id_shopofmoney', $card['id_shopofmoney'])->first();
        if($duplicate) return true;

        $add_operation_bool = $table -> insert($card);
        return $add_operation_bool;
    }
    

    private function addCard(){
        $table = $this -> table_obj;
        $add_operation_bool = $table -> insert(
            [   'id_shopofmoney' => "111111",
                'id_ebay' => "111111",
                'id_meshok' => "111111",
                'name_ru' => "Вуаля",
                'url_shopofmoney' => "text",
                'url_ebay' => "text",
                'url_meshok' => "text",
            ]
        );
        return $add_operation_bool;
    }
}
