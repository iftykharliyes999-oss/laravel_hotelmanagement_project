<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            $table->string('customer_name');
            $table->string('phone');
            $table->string('email')->nullable();

            $table->unsignedBigInteger('room_id');

            $table->date('check_in');
            $table->date('check_out');

            $table->integer('adults');
            $table->integer('children')->default(0);

            $table->decimal('total_price',10,2);

            $table->enum('payment_status',['Paid','Partial','Unpaid'])->default('Unpaid');

            $table->enum('booking_status',[
                'Pending',
                'Confirmed',
                'Checked In',
                'Checked Out',
                'Cancelled'
            ])->default('Pending');

            $table->text('special_request')->nullable();

            $table->timestamps();

            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};