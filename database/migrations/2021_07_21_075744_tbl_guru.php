<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblGuru extends Migration
{
    public function up()
    {
        Schema::create('tbl_guru', function (Blueprint $table) {
            $table->id('id_guru');
            $table->string('nama');
        });
    }
    public function down()
    {
        Schema::dropIfExists('tbl_guru');
    }
}
