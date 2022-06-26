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
        Schema::create('binds', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Land::class);
            $table->foreignIdFor(User::class);
            $table->enum('status',['pending','approved','rejected','completed'])->default('pending');
            $table->longText('description');
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
        Schema::dropIfExists('binds');
    }
};
