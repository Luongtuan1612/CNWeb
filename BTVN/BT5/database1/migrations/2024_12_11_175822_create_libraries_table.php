<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrariesTable extends Migration
{
    public function up()
    {
        Schema::create('libraries', function (Blueprint $table) {
            $table->id(); // Tạo trường id (primary key)
            $table->string('name'); // Tên thư viện
            $table->string('address'); // Địa chỉ
            $table->string('contact_number'); // Số điện thoại
            $table->timestamps(); // Thời gian tạo và cập nhật
        });
    }

    public function down()
    {
        Schema::dropIfExists('libraries');
    }
}
