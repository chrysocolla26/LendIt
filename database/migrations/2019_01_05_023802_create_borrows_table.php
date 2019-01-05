<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBorrowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrows', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lender_id');
            $table->integer('borrower_id');
            $table->integer('product_id');
            $table->string('link',255);
            $table->string('product_name',255);
            $table->string('product_description',255);
            $table->integer('borrow_qty');
            $table->integer('borrow_days');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('total_price');
            $table->string('status');
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
        Schema::dropIfExists('borrows');
    }
}
