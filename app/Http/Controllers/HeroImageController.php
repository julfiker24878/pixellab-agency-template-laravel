<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeroImage;
use Image;
use Carbon\Carbon;

class HeroImageController extends Controller
{
    public function index(){
        return view('heroimg.add');
    }

    public function insert(Request $request)
    {
        $random = rand();

        $image_id = HeroImage::insertGetId([
            'created_at' => Carbon::now(),
        ]);

        $left_image = $request->left_image;
        $left_image_extension = $left_image->getClientOriginalExtension();
        $left_image_name = $image_id.'.'.$left_image_extension;

        Image::make($left_image)->save(public_path('/uploads/hero/'.$left_image_name));

        HeroImage::find($image_id)->update([
            'left_image' => $left_image_name,
        ]);



        $right_image = $request->right_image;
        $right_image_extension = $right_image->getClientOriginalExtension();
        $right_image_name = $image_id.$random.'.'.$right_image_extension;

        Image::make($right_image)->save(public_path('/uploads/hero/'.$right_image_name));

        HeroImage::find($image_id)->update([
            'right_image' => $right_image_name,
        ]);

        return back()->with('success', 'Images added successfully!');
    }

    public function view()
    {
        $herosimages = HeroImage::all();
        return view('heroimg.view', [
            'herosimages' => $herosimages,
        ]);
    }

    public function edit($heroimg_id)
    {
        $heroimages = HeroImage::find($heroimg_id);
        return view('heroimg.edit', [
            'heroimages' => $heroimages,
        ]);
    }

    public function update(Request $request)
    {
        $rand = rand();

        HeroImage::find($request->id)->update([
            'updated_at' => Carbon::now(),
        ]);

        $left_image_path = public_path('/uploads/hero/'.HeroImage::find($request->id)->left_image);
        unlink($left_image_path);

        $right_image_path = public_path('/uploads/hero/'.HeroImage::find($request->id)->right_image);
        unlink($right_image_path);

        $left_image = $request->left_image;
        $extension = $left_image->getClientOriginalExtension();
        $left_image_name = $request->id.'.'.$extension;

        $right_image = $request->right_image;
        $extension = $right_image->getClientOriginalExtension();
        $right_image_name = $request->id.$rand.'.'.$extension;

        Image::make($left_image)->save(public_path('/uploads/hero/'.$left_image_name));
        Image::make($right_image)->save(public_path('/uploads/hero/'.$right_image_name));

        HeroImage::find($request->id)->update([
            'left_image' => $left_image_name,
            'right_image' => $right_image_name,
        ]);

        return back()->with('success', 'Updaet successful!');
    }

    public function delete($heroimg_id)
    {
        $left_image_path = public_path('/uploads/hero/'.HeroImage::find($heroimg_id)->left_image);
        unlink($left_image_path);

        $right_image_path = public_path('/uploads/hero/'.HeroImage::find($heroimg_id)->right_image);
        unlink($right_image_path);

        HeroImage::find($heroimg_id)->delete();

        return back()->with('success', 'Images deleted successfully!');
    }



































}
