<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHardwareDevicesTable extends Migration
{
    public function up()
    {
        Schema::create('hardware_devices', function (Blueprint $table) {
            $table->id();
            $table->string('device_name');
            $table->enum('type', ['Mouse', 'Keyboard', 'Headset']);
            $table->boolean('status')->default(true);
            $table->foreignId('center_id')->constrained('it_centers');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('hardware_devices');
    }
};
