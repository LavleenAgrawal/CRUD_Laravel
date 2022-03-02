<?php

namespace App\Http\Controllers;
use App\Models\person;
use Illuminate\Http\Request;

class PersonCRUDController extends Controller
{
    public function index()
    {
        $data['person'] = person::orderBy('id','asc')->paginate(5);
        return view('person.index', $data);
    }

    public function create()
    {
        return view('person.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'age' => 'required',
            //'gender' => 'required',
            'phoneNo' => 'required',
            'email' => 'required',
            //'hobby' => 'required',
            'description' => 'required',
        ]);
        $person = new person;
        $person->name = $request->name;
        $person->dob = $request->dob;
        $person->age = $request->age;
        $person->gender = $request->gender;
        $person->phoneNo = $request->phoneNo;
        $person->email = $request->email;
        $person->hobby = $request->hobby;
        $person->description = $request->description;
        $person->save();
        return redirect()->route('person.index')->with('Success','Person details has been created successfully');
    }

    public function show(person $person)
    {
        return view('person.show', compact('person'));
    }

    public function edit(person $person)
    {
        return view('person.edit', compact('person'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'age' => 'required',
            //'gender' => 'required',
            'phoneNo' => 'required',
            'email' => 'required',
            //'hobby' => 'required',
            'description' => 'required',
        ]);
        $person = person::find($id);
        $person->name = $request->name;
        $person->dob = $request->dob;
        $person->age = $request->age;
        $person->gender = $request->gender;
        $person->phoneNo = $request->phoneNo;
        $person->email = $request->email;
        $person->hobby = $request->hobby;
        $person->description = $request->description;
        $person->save();
        return redirect()->route('person.index')->with('Success','Person details has been updated successfully');
    }

    public function destroy(person $person)
    {
        $person->delete();
        return redirect()->route('person.index')->with('Success','Person details has been deleted successfully');
    }
}
