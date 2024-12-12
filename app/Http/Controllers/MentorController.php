<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use Illuminate\Http\Request;
use App\Imports\MentorsImport;
use Maatwebsite\Excel\Facades\Excel;
use Session;

class MentorController
{
    public function index()
    {
        $mentors = Mentor::all();
        return view('mentors.index', compact('mentors'));
    }

    public function create()
    {
        return view('mentors.create');
    }

    public function import_excel(Request $request) 
	{
		// validasi
		$request->validate( [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_mentor di dalam folder public
		$file->move('file_mentor',$nama_file);
 
		// import data
		Excel::import(new MentorsImport, public_path('/file_mentor/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data mentor Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect()->route('mentors.index')->with('success', 'Mentor Berhasil Ditambahkan');
	}

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'phone_number' => 'required',
        ]);

        Mentor::create($request->all());

        return redirect()->route('mentors.index')->with('success', 'Mentor added successfully.');
    }

    public function edit(Mentor $mentor)
    {
        return view('mentors.edit', compact('mentor'));
    }

    public function update(Request $request, Mentor $mentor)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'phone_number' => 'required',
        ]);

        $mentor->update($request->all());

        return redirect()->route('mentors.index')->with('success', 'Mentor updated successfully.');
    }

    public function destroy(Mentor $mentor)
    {
        $mentor->delete();

        return redirect()->route('mentors.index')->with('success', 'Mentor deleted successfully.');
    }
}