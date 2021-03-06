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
        Schema::create('land_user', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Land::class);
            $table->boolean("is_owner");
            $table->date("start");
            $table->date("end")->nullable();
            $table->enum('status',['pending','approved','rejected'])->default('pending');
            $table->timestamp('verified_at')->nullable();
            $table->foreignIdFor(User::class,"verified_by")->nullable();
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
        Schema::dropIfExists('land_user');
    }
};
