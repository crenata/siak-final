<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ChangePasswordController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return view("user.change-password");
    }
}
