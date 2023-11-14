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
        Schema::create('rich_menu_categories', function (Blueprint $table) {
        	$table->ulid('id')->primary();
        	$table->string('name', 100)->comment('リッチメニュー・カテゴリ名');
        	$table->tinyInteger('delete_flg')->default(0)->comment('削除フラグ')->nullable();
        	
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rich_menu_categories');
    }
};
