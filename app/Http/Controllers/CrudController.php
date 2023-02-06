<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan as karyawan;
use Illuminate\Support\Facades\Storage;

class CrudController extends Controller
{
    public function data()
    {
        return view('home', [
            'datakaryawan' => Karyawan::orderBY('id', 'desc')->get(),
        ]);
    }
    public function add()
    {
        return view('crud.add');
    }
    public function detail($id)
    {
        $karyawan = Karyawan::find($id);

        return view('crud/detail', compact('karyawan'));
        // return view('crud.detail',  'datakaryawan' => Karyawan::orderBY('id', 'asc')->get(),);
    }
    public function edit($id)
    {
        $karyawan = Karyawan::find($id);

        return view('crud/edit', compact('karyawan'));
    }
    public function addproses(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'no_telp' => 'required',
            'nip' => 'required',
            'nwnp' => 'required',
            'alamat' => 'required',
            'image' => 'required',
            ]);
        // $request->image->move('photos');
        // $request->file('image')->move('photos/', $request->file('image')->getClientOriginalName());

        // $fileImg = $request->image->getClientOriginalName();
        // $request->image->storeAs('photos', $fileImg);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('photos');
        }
        Karyawan::create($validatedData);
        // return redirect('/home');

        // Crud::created([
        //     'nama' => $request->nama,
        //     'email' => $request->email,
        //     'jenis_kelamin' => $request->jenis_kelamin,
        //     'no_telp' => $request->no_telp,
        //     'nip' => $request->nip,
        //     'nwnp' => $request->nwnp,
        //     'alamat' => $request->alamat,
        //     'photos' => $request->photos,
        // ]);
        return redirect('/home');
    }

    public function editproses(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'no_telp' => 'required',
            'nip' => 'required',
            'nwnp' => 'required',
            ]);

        Karyawan::where('id', $id)->update($validatedData);


        return redirect('/crud/detail/'.$id);
    }
    public function ps(Request $request, $id)
    {
        $validatedData = $request->validate([
            // 'id' => $request->id,
            'image' => 'required',
            ]);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('photos');
        }
        Karyawan::where('id', $id)->update($validatedData);


        return redirect('/crud/detail/'.$id);
    }
    public function destroy(Request $request, $id)
    {
        if ($request->image) {
            Storage::delete($request->image);
        }
        Karyawan::destroy($id);

        return redirect('/home');
    }
}
