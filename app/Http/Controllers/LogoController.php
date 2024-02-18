<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
use App\Http\Requests\LogoRequest;
use Carbon\Carbon;
use Image;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('logo.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insert(LogoRequest $request)
    {
        $rows = Logo::all()->count();
        if($rows < 1){

            $logo_id = Logo::insertGetId([
                'logo_text' => $request->logo_text,
                'logo_link' => $request->logo_link,
                'created_at' => Carbon::now(),
            ]);
    
            $logo_image = $request->logo_image;
            $extension = $logo_image->getClientOriginalExtension();
            $logo_image_name = $logo_id.'.'.$extension;
    
            Image::make($logo_image)->save(public_path('/uploads/logo/'.$logo_image_name));
    
            Logo::find($logo_id)->update([
                'logo_image' => $logo_image_name,
            ]);
    
            return back()->with('success', 'Logo added successfully!');

        }else{
            return back()->with('logo_exist', 'Logo already inserted!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $logos = Logo::all();
        return view('logo.view', [
            'logos' => $logos,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($logo_id)
    {
        $logos = Logo::find($logo_id);
        return view('logo.edit', [
            'logos' => $logos,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Logo::find($request->id)->update([
            'logo_text' => $request->logo_text,
            'logo_link' => $request->logo_link,
        ]);

        $logo_path = public_path('/uploads/logo/'.Logo::find($request->id)->logo_image);
        unlink($logo_path);

        $logo_image = $request->logo_image;
        $extension = $logo_image->getClientOriginalExtension();
        $logo_image_name = $request->id.'.'.$extension;

        Image::make($logo_image)->save(public_path('/uploads/logo/'.$logo_image_name));

        Logo::find($request->id)->update([
            'logo_image' => $logo_image_name,
        ]);

        return back()->with('success', 'Updaet successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($logo_id)
    {
        $logo_path = public_path('/uploads/logo/'.Logo::find($logo_id)->logo_image);
        unlink($logo_path);

        Logo::find($logo_id)->delete();


        return back()->with('success', 'Logo deleted successfully!');
    }
}
