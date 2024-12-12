<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // Tạo trường id (primary key)
            $table->string('title'); // Tên sách
            $table->string('author'); // Tác giả
            $table->year('publication_year'); // Năm xuất bản
            $table->string('genre'); // Thể loại
            $table->foreignId('library_id')->constrained('libraries'); // Khóa ngoại tham chiếu đến bảng libraries
            $table->timestamps(); // Thời gian tạo và cập nhật
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
}
