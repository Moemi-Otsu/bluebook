<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestData extends Model
{
    // restdataテーブルの値を$tableに格納
    protected $table = 'restdata';
    // いわゆるブラックリスト。createやfillで勝手にデータが入らない。
    protected $guarded = array('id');

    // バリデーション
    public static $rules = array(
        'message' => 'required',
        'url' => 'required'
    );

    // テキスト表示
    public function getData()
    {
        return $this->id . ':' . $this->message . '(' . $this->url . ')';
    }
}
