<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class GoogleSheet extends Model
{
    // use Sushi;
    // use GoogleSheets;

    // public function getRows(){
    //     $client = \Google_Client::class;
    //     $rows = Sheets::spreadsheet('1YMPKV5I8KpTFcgdbCXn6kzanm8csOZedspxdaSyiBbI')->sheet('demo')->get();
    //     $header = $rows->pull(0);
    //     $values = Sheets::collection(header: $header, rows: $rows);
    //     $values = array_values($values->toArray());
    //     return  $values;
    // }

    // protected function sheetsAccessToken()
    // {
    //     return [
    //         'access_token'  => $this->access_token,
    //         'refresh_token' => $this->refresh_token,
    //         'expires_in'    => $this->expires_in,
    //         'created'       => $this->updated_at,
    //     ];
    // }
}
