<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;

class ComplaintsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('complaints.create');
    }

    public function store()
    {
        $data = request()->validate([
            'complaintCat' => 'required',
            'complaintType' => 'required',
            'complaintDetails' => 'required',
            'complaintFile' => '',
        ]);

        auth()->user()->complaints()->create($data);

        return redirect('/profile/' . auth()->user()->id)->with('message', 'Complaint Successfully Lodged!');


    }

    public function edit(Complaint $complaint)
    {
        return view('admin.edit', ['complaint' => $complaint]);
    }

    public function show()
    {
        $data = Complaint::all();

        return view('complaints.show', [
            'data' => $data
        ]);
    }
}
