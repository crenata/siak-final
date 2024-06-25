<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $users = User::paginate();
        return view("admin.user.view")->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view("admin.user.add");
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return mixed
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request) {
        $this->validate($request, [
            "name" => "required|string",
            "nim" => "required|string|unique:users,nim",
            "ttl" => "required|string",
            "religion" => "required|string",
            "gender" => "required|string",
            "phone" => "required|string",
            "address" => "required|string",
            "mother" => "required|string",
            "major" => "required|string",
            "semester" => "required|numeric",
            "prodi" => "required|string",
            "email" => "required|string|unique:users,email",
            "password" => "required|string|min:8",
            "confirm_password" => "required|string|min:8|same:password"
        ]);

        User::create([
            "name" => $request->name,
            "nim" => $request->nim,
            "ttl" => $request->ttl,
            "religion" => $request->religion,
            "gender" => $request->gender,
            "phone" => $request->phone,
            "address" => $request->address,
            "mother" => $request->mother,
            "major" => $request->major,
            "semester" => $request->semester,
            "prodi" => $request->prodi,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);

        return redirect()->route("user.index")->withStatus("Successfully added.");
    }

    /**
     * Display the specified resource.
     * @param string $id
     */
    public function show(string $id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param string $id
     */
    public function edit(string $id) {
        $user = User::findOrFail($id);
        return view("admin.user.edit")->withUser($user);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param string $id
     */
    public function update(Request $request, string $id) {
        $this->validate($request, [
            "name" => "required|string",
            "nim" => "required|string|unique:users,nim,$id",
            "ttl" => "required|string",
            "religion" => "required|string",
            "gender" => "required|string",
            "phone" => "required|string",
            "address" => "required|string",
            "mother" => "required|string",
            "major" => "required|string",
            "semester" => "required|numeric",
            "prodi" => "required|string",
            "email" => "required|string|unique:users,email,$id",
            "password" => "nullable|string|min:8",
            "confirm_password" => ["nullable", "string", "min:8", "same:password", Rule::requiredIf(!empty($request->password))]
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->nim = $request->nim;
        $user->ttl = $request->ttl;
        $user->religion = $request->religion;
        $user->gender = $request->gender;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->mother = $request->mother;
        $user->major = $request->major;
        $user->semester = $request->semester;
        $user->prodi = $request->prodi;
        $user->email = $request->email;
        if (!empty($request->password)) $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route("user.index")->withStatus("Successfully edited.");
    }

    /**
     * Remove the specified resource from storage.
     * @param string $id
     */
    public function destroy(string $id) {
        User::findOrFail($id)->delete();

        return redirect()->route("user.index")->withStatus("Successfully deleted.");
    }
}