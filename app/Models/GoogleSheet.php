<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Revolution\Google\Sheets\Facades\Sheets;
use Sushi\Sushi;

class GoogleSheet extends Model
{
    use Sushi;

    public function getRows(){
        $rows = Sheets::spreadsheet('1YMPKV5I8KpTFcgdbCXn6kzanm8csOZedspxdaSyiBbI')->sheet('demo')->get();
        $header = $rows->pull(0);
        $values = Sheets::collection(header: $header, rows: $rows);
        $values = array_values($values->toArray());
        return  $values;
    }
}
