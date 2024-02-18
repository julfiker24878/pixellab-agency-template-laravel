<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use Carbon\Carbon;

class HeroController extends Controller
{
    public function index(){
        return view('hero.add');
    }

    public function insert(Request $request)
    {
        Hero::insert([
            'heading' => $request->heading,
            'desc' => $request->desc,
            'btn_text' => $request->btn_text,
            'btn_link' => $request->btn_link,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Content added successfully!');
    }

    public function view()
    {
        $heros = Hero::all();
        return view('hero.view', [
            'heros' => $heros,
        ]);
    }

    public function edit($hero_id)
    {
        $heros = Hero::find($hero_id);
        return view('hero.edit', [
            'heros' => $heros,
        ]);
    }

    public function update(Request $request)
    {
        Hero::find($request->id)->update([
            'heading' => $request->heading,
            'desc' => $request->desc,
            'btn_text' => $request->btn_text,
            'btn_link' => $request->btn_link,
            'updated_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Updaet successful!');
    }

    public function delete($hero_id)
    {
        Hero::find($hero_id)->delete();

        return back()->with('success', 'Content deleted successfully!');
    }

}
