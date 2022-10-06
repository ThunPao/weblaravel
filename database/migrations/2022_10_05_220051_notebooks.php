<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notebooks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Brand_id')->constrained('Brands');
            $table->text('Model');
            $table->text('imagelink');
            $table->text('Processor');
            $table->string('Chipset');
            $table->string('Graphics');
            $table->string('Display_Screen');
            $table->string('Main_Memory');
            $table->string('Memory_Slot');
            $table->string('Max_Memory');
            $table->string('Storage');
            $table->string('Storage_Slot');
            $table->string('Optical_Disk_Drive');
            $table->string('Web_Camera');
            $table->string('Sound_Technology');
            $table->string('Audio_Jack');
            $table->string('Speaker');
            $table->string('Network');
            $table->string('Wireless');
            $table->string('Bluetooth');
            $table->string('Ports');
            $table->string('CardReader');
            $table->string('Power_Adapter');
            $table->string('OperatingSystem');
            $table->string('Material');
            $table->string('Weight');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notebooks');
    }
};
