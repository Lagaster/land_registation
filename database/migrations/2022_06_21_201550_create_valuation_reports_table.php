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
        Schema::create('valuation_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Land::class);
            $table->date ("evaluated_at");
            $table->decimal("landprice"); ///1000
            $table->decimal("improvement"); ///250
            $table->decimal('total'); ///1250
            $table->string('file');
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
        Schema::dropIfExists('valuation_reports');
    }
};
