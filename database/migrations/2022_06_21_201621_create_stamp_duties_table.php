<?php

use App\Models\Land;
use App\Models\User;
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
        Schema::create('stamp_duties', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Land::class);
            $table->foreignIdFor(User::class);
            $table->string('file');
            $table->enum('status',['pending','approved','rejected'])->default('pending');
            $table->timestamp('verified_at')->nullable();//now()
            $table->foreignIdFor(User::class,"verified_by")->nullable(); ///auth role land registrar
            $table->timestamps();
        });
    }
    /**
     * land able for sell files approved
     * payment done in full
     */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stamp_duties');
    }
};
