<?php

use App\Models\Land;
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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Land::class);
            $table->foreignIdFor(User::class,"paid_by");
            $table->foreignIdFor(User::class,"Paid_to");
            $table->string("result")->nullable() ;
            $table->string("merchantRequestID")->nullable();
            $table->string("checkoutRequestID")->nullable();
            $table->string("responseCode")->nullable();
            $table->string("resultDesc")->nullable();
            $table->string("responseDescription")->nullable();
            $table->string("resultCode")->nullable();
            $table->string('customerMessage')->nullable();
            $table->string('mpesaReceiptNumber')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->float('amount')->nullable();
            $table->float('balance')->nullable();
            $table->boolean('active')->default(true);
            $table->dateTime('transactionDate')->nullable();
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
        Schema::dropIfExists('payments');
    }
};
