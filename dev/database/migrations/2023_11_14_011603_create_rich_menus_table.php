<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rich_menus', function (Blueprint $table) {
        	$table->ulid('id')->primary();
        	$table->string('name', 300)->comment('リッチメニュー名');
        	$table->string('line_account_id', 26)->comment('LINEアカウントID');
        	$table->string('rich_menu_category_id', 256)->comment('リッチメニュー・カテゴリ分類')->nullable();
        	$table->string('segment', 256)->comment('セグメント')->nullable();
        	$table->string('status', 16)->comment('ステータス (draft:下書き, line_linked:LINEとリンク済)')->nullable();
        	$table->integer('size_w')->comment('リッチメニューの横幅')->nullable();
        	$table->integer('size_h')->comment('リッチメニューの縦幅')->nullable();
        	$table->tinyInteger('default_selected')->default(0)->comment('デフォルト表示')->nullable();
        	$table->string('chat_bar_text', 14)->comment('チャットバーテキスト    リッチメニューのバー上に表示されるテキスト')->nullable();
        	$table->string('line_rich_menu_id', 26)->comment('LINE側のリッチメニューID(richMenuId)')->nullable();
        	$table->string('rich_menu_img', 256)->comment('リッチメニュー画像')->nullable();
        	$table->string('review_svg', 256)->comment('SVG画像')->nullable();
        	$table->string('start_time')->comment('期間・開始')->nullable();
        	$table->string('end_time')->comment('期間・終了')->nullable();
        	$table->tinyInteger('delete_flg')->default(0)->comment('削除フラグ')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rich_menus');
    }
};
