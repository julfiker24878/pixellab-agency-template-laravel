<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Models\Tab;
use Carbon\Carbon;
use Image;

class PortfolioController extends Controller
{
    public function tab_index(){
        return view('tab.index');
    }
    public function index(){
        $tabs = Tab::all();
        return view('portfolio.index', [
            'tabs' => $tabs,
        ]);
    }




    public function tab_insert(Request $request)
    {
        Tab::insert([
            'name' => $request->name,
            'class' => $request->class,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Title added successfully!');
    }
    public function insert(Request $request)
    {
        $image_id = Portfolio::insertGetId([
            'tab_id' => $request->tab_id,
            'class' => $request->class,
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'created_at' => Carbon::now(),
        ]);

        $image = $request->image;
        $extension = $image->getClientOriginalExtension();
        $image_name = $image_id.'.'.$extension;

        Image::make($image)->save(public_path('/uploads/portfolio/'.$image_name));

        Portfolio::find($image_id)->update([
            'image' => $image_name,
        ]);

        return back()->with('success', 'Portfolio added successfully!');

    }




    public function tab_view()
    {
        $tabs = Tab::all();
        return view('tab.view', [
            'tabs' => $tabs,
        ]);
    }
    public function view()
    {
        $portfolios = Portfolio::all();
        return view('portfolio.view', [
            'portfolios' => $portfolios,
        ]);
    }




    public function tab_edit($tab_id)
    {
        $tabs = Tab::find($tab_id);
        return view('tab.edit', [
            'tabs' => $tabs,
        ]);
    }
    public function edit($portfolio_id)
    {
        $portfolios = Portfolio::find($portfolio_id);
        return view('portfolio.edit', [
            'portfolios' => $portfolios,
        ]);
    }




    public function tab_update(Request $request)
    {
        Tab::find($request->id)->update([
            'name' => $request->name,
            'class' => $request->class,
            'updated_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Update successful!');
    }
    public function update(Request $request)
    {
        if($request->image != ''){
            Portfolio::find($request->id)->update([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'updated_at' => Carbon::now(),
            ]);
    
            $image_path = public_path('/uploads/portfolio/'.Portfolio::find($request->id)->image);
            unlink($image_path);
    
            $image = $request->image;
            $extension = $image->getClientOriginalExtension();
            $image_name = $request->id.'.'.$extension;
    
            Image::make($image)->save(public_path('/uploads/portfolio/'.$image_name));
    
            Portfolio::find($request->id)->update([
                'image' => $image_name,
            ]);
    
            return back()->with('success', 'Update successful!');
        }else{
            Portfolio::find($request->id)->update([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'updated_at' => Carbon::now(),
            ]);

            return back()->with('success', 'Update successful!');
        }
    }




    public function tab_delete($tab_id)
    {
        $portfolios = Portfolio::where('tab_id', $tab_id)->get();

        foreach($portfolios as $portfolio){
            Portfolio::find($portfolio->id)->delete();
        }

        Tab::find($tab_id)->delete();

        return back()->with('success', 'A tab has been deleted successfully!');
    }
    public function delete($portfolio_id)
    {
        $image_path = public_path('/uploads/portfolio/'.Portfolio::find($portfolio_id)->image);
        unlink($image_path);

        Portfolio::find($portfolio_id)->delete();


        return back()->with('success', 'A portfolio item has been deleted successfully!');
    }




}
