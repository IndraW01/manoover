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
        Schema::create('pubg_mobiles', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->unique()->constrained('users');
            $table->string('nama_tim')->unique();
            $table->string('nama_ketua_tim');
            $table->string('no_hp', 20);
            $table->string('anggota1');
            $table->string('anggota2');
            $table->string('anggota3');
            $table->string('anggota4');
            $table->string('cadangan1')->nullable();
            $table->string('kartu_identitas');
            $table->string('bukti_pembayaran')->nullable();
            $table->string('status')->default('belum');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pubg_mobiles');
    }
};
