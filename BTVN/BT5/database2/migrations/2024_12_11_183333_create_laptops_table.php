<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->id(); // id tự động làm primary key
            $table->string('brand');
            $table->string('model');
            $table->string('specifications');
            $table->boolean('rental_status')->default(false); // trạng thái cho thuê, mặc định là chưa cho thuê
            $table->foreignId('renter_id')->nullable()->constrained('renters')->onDelete('set null'); // Khóa ngoại
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laptops');
    }
};
