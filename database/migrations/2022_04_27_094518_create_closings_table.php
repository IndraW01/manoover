<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('closings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->unique()->constrained('users');
            $table->string('profesi');
            $table->string('no_hp', 20);
            $table->string('kartu_identitas');
            $table->string('bukti_pembayaran')->nullable();
            $table->string('status')->default('belum');
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
        Schema::dropIfExists('closings');
    }
};
