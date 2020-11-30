<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

require_once __DIR__ . '/Classes/PHPExcel.php';
require_once __DIR__ . '/Classes/PHPExcel/IOFactory.php';

class XlsController extends Controller{

    public function ImportIsFileToBd(Request $request){
        $patch = self::saveFile($request);
        $import = self::saveFile($patch);
        
        $bd = new BDController();

        foreach($import as $val){
            $bd -> importBd($val);
        }

    }

    private static function exportIsFile($patch){
        $lists = [];
        @$xls = \PHPExcel_IOFactory::load('/var/www/html/workplace/laravelproject/laravelProject/storage/app/' . $patch); 
        foreach($xls -> getWorksheetIterator() as $worksheet) {
            $lists[] = $worksheet -> toArray();
        }
        
        $title_list = $lists[0][0];
        $array_list = array_slice($lists[0], 1);
        $import = [];

        foreach($array_list as $key => $val){
            foreach($array_list[$key] as $key_y => $val_y){
                if(!isset($val_y) && $key_y == 0) break 2;
                $import[$key][trim($title_list[$key_y])] = $val_y;
            }
        }
        Storage::delete($patch);
        return $import;
    }

    private static function saveFile(Request $request){
        $f = $request->file();
        $patch = $f-> storePublicly("xlsx");
        return $patch;
        //self::exportIsFile($patch);
    }

}