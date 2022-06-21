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
        Schema::create('valuation_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Land::class);
            $table->date ("evaluated_at");
            $table->decimal("land");
            $table->decimal("improvement");
            $table->decimal('total');
            $table->string('file');
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
