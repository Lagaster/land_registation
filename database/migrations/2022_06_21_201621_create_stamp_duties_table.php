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
        Schema::dropIfExists('stamp_duties');
    }
};
