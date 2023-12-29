<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    public function login()
    {
        return view('admin.login');
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request;

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Specify the path within the public storage directory
            $image->storeAs('uploads', $imageName, 'public');

            // The $imagePath will now contain the path relative to the 'public' disk
            $imagePath = 'uploads/' . $imageName;
        }

        Registration::create([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'state' => $request->input('state'),
            'phonenumber' => $request->input('phonenumber'),
            'address' => $request->input('address'),
            'gender' => $request->input('gender'),
            'password' => $request->input('Password'),
            'skill' => implode(',', $request->input('skill')),
            'image' => $imagePath,
        ]);

        return redirect('index');
    }
    public function index()
    {
        $data = Registration::all();

        return view('admin.index', compact('data'));
    }

    public function delete($id)
    {
        Registration::destroy($id);

        return redirect('index');
    }
    public function edit($id)
    {
        $data = Registration::find($id);

        return view('admin.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {

        $data = Registration::findOrFail($id);
        $data->name = $request->input('name');
        $data->username = $request->input('username');
        $data->email = $request->input('email');
        $data->state = $request->input('state');
        $data->phonenumber = $request->input('phonenumber');
        $data->address = $request->input('address');
        $data->gender = $request->input('gender');
        $data->password = $request->input('Password');
        $data->skill = implode(',', $request->input('skill'));

        // Handle image upload if provided in the request
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads/', 'public');
            $data->image = $imagePath;
        }

        // Save the updated data
        $data->save();

        return redirect('index');
    }
}
