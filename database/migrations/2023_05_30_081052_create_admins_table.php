<?php

use App\Models\Admin;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create("admins", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email")->unique();
            $table->timestamp("email_verified_at")->nullable();
            $table->string("password");
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
        Admin::create([
            "name" => "Admin",
            "email" => "admin@siak.com",
            "password" => Hash::make("admin123")
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists("admins");
    }
};
