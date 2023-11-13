<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Richmenu extends Model
{

    // テーブル名を設定（省略可）
    protected $table = 'richmenus';

    // マスアサインメント対象のカラム
    protected $fillable = [
            'id',
            'name',
            'segment',
            'start_time',
            'end_time',
            'line_account_id',
            'size_w',
            'size_h',
            'rich_menu_category',
            'chat_bar_text',
            'default_selected',
            'line_rich_menu_id',
            'rich_menu_img',
            'review_svg',
    		'delete_flg',
    		'created_at',
    		'updated_at',
    ];
}