<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');
            $table->decimal("price", 6, 2);
            $table->decimal("productPrice", 6, 2)->nullable();
            $table->decimal("productCost", 6, 2)->nullable();
            $table->string("full_name", 255);
            $table->string("email", 255);
            $table->text("address");
            $table->string("city", 255);
            $table->string("zip", 255);
            $table->string("same_as_billing",1);
            $table->string("State", 255);
            $table->enum('order_status', ['New', 'Completed', 'Canceled'])->nullable()->default('New');
            $table->enum('payment_status', ['succeeded', 'error']);
            $table->string('transaction_id');
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
        Schema::dropIfExists('checkouts');
    }
}
