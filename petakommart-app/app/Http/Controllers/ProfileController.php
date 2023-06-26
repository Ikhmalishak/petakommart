<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
<<<<<<< Updated upstream
    function index()
    {
        $users = User::get(); //select * from user database
        return view(
            'manageuser.index',
=======
    function viewprofile()
    {
        $users = User::get(); //select * from user database
        return view(
            'manageuser.viewprofile',
>>>>>>> Stashed changes
            compact('users')
        );
    }

    function create()
    {
        return view('manageuser.createprofile');
    }

    //process store
    function store(Request $request)
    {
        //validate syarat untuk input macam ic kena masuk nombor
        $validator = Validator::make($request->all(), [
<<<<<<< Updated upstream
            'name' => 'required',
            'email' => 'required',
            'password' =>'required',
            'category' => 'required',
            'gender' => 'required',
            'phoneNum' => 'required',
=======
            'cashierid' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'dob' => 'required|date',
            'email' => 'required|email',
            'phone' => 'required|regex:/^\+6\d{8,}$/',
            'password' => 'required',
>>>>>>> Stashed changes
        ]);
        //insert data to db
        User::create(
           $validator -> validate()
<<<<<<< Updated upstream
=======
           /* //key guna nama dalam db -> $request->title (nama dalam form)
            "title" => $request->title,
            "description" => $request->description,
            */
>>>>>>> Stashed changes
        );
    
        // Redirect to the desired page
        return redirect()->route('users');
    }

<<<<<<< Updated upstream

public function edit($id)
{
    $user = User::find($id);
    return view('manageuser.editprofile', compact('user'));
}
public function update(Request $request, $id)
{
    // Validate the form data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,'.$id,
        'phoneNum' => 'required|string|max:255',
        'category' => 'required|in:Admin,Cashier',
        'gender' => 'required|in:Male,Female',
    ]);

    // Find the user by ID
    $user = User::findOrFail($id);

    // Update the user's attributes
    $user->name = $validatedData['name'];
    $user->email = $validatedData['email'];
    $user->phoneNum = $validatedData['phoneNum'];
    $user->category = $validatedData['category'];
    $user->gender = $validatedData['gender'];

    // Save the updated user
    $user->save();

    // Redirect the user to their updated profile or any other appropriate page
    return redirect()->route('users', $user->id)->with('success', 'Profile updated successfully');
}


// public function update($id, request $request)
// {
//     $validatedData = $request->validate([
//         'name' => 'required',
//         'email' => 'required',
//         'password' =>'required',
//         'category' => 'required',
//         'gender' => 'required',
//         'phoneNum' => 'required',
//     ]);

//     $user= User::find($id);
//     $user->update($validatedData);

//     return redirect()->route('users')->with('success', 'Profile updated successfully');
// }
    //process delete
    function delete($id)
    {
        $item = User::find($id);
        //insert data to database
        $item->delete();
        return redirect()->route('users');
    }
=======
public function edit($id)
{
    $id = User::find($id);
    return view('manageuser.editprofile', compact('users'));
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'cashierid' => 'required',
        'name' => 'required',
        'gender' => 'required',
        'dob' => 'required|date',
        'email' => 'required|email',
        'phone' => 'required|regex:/^\+6\d{8,}$/',
    ]);

    $id = User::find($id);
    $id->update($validatedData);

    return redirect()->route('users')->with('success', 'Profile updated successfully');
}
    //process delete
    function delete($id)
    {
        $id = User::find($id);
        //insert data to database
        $id->delete();
        return redirect()->route('users');
    }
/*
    public function addInventory()
    {
        return view('manageinventory.addinventory');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'amount' => 'required',
            'stock' => 'required',
            // Add validation rules for other profile attributes here
        ]);

        Inventory::create($validatedData);

        return redirect()->back()->with('success', 'Inventory added successfully!');
    }*/
>>>>>>> Stashed changes
}