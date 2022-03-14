<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function index () {
        return view('welcome');
    }

    public function create () {
        $members = Member::all();
        return view('pages.createMember', compact('members'));
    }
    

    public function store (Request $request) {
        $store = new Member();
        $store->nom = $request->nom;
        $store->age = $request->age;
        $store->genre = $request->genre;
        $store->save();
        return redirect('/');
    }

    public function member () {
        $members = Member::all();
        return view('pages.member', compact('members'));
    }

    public function destroy ($id) {
        $delete = Member::find($id);
        $delete->delete();
        return redirect('/member');
    }

    public function show ($id) {
        $show = Member::find($id);
        return view('pages.showMember', compact('show'));
    }

    public function edit ($id) {
        $edit = Member::find($id);
        return view('pages.editMember', compact('edit'));

    }

    public function update ($id, Request $request) {
        $update = Member::find($id);
        $update->nom = $request->nom;
        $update->age = $request->age;
        $update->genre = $request->genre;
        $update->save();
        return redirect('/');
    }

    public function deleteAll () {
        DB::table('members')->delete();
        return redirect('/');
    }
}
