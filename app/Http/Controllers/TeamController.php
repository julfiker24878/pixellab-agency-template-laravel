<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Account;
use Carbon\Carbon;
use Image;

class TeamController extends Controller
{
    public function index(){
        return view('team.index');
    }
    public function account_index(){
        $teams = Team::all();
        return view('account.index', [
            'teams' => $teams,
        ]);
    }




    public function insert(Request $request)
    {
        $image_id = Team::insertGetId([
            'name' => $request->name,
            'designation' => $request->designation,
            'created_at' => Carbon::now(),
        ]);

        $image = $request->image;
        $extension = $image->getClientOriginalExtension();
        $image_name = $image_id.'.'.$extension;

        Image::make($image)->save(public_path('/uploads/team/'.$image_name));

        Team::find($image_id)->update([
            'image' => $image_name,
        ]);

        return back()->with('success', 'Team profile added successfully!');

    }
    public function account_insert(Request $request)
    {
        Account::insert([
            'team_id' => $request->team_id,
            'name' => $request->name,
            'link' => $request->link,
            'icon' => $request->icon,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Account added successfully!');
    }




    public function view()
    {
        $teams = Team::all();
        return view('team.view', [
            'teams' => $teams,
        ]);
    }
    public function account_view()
    {
        $accounts = Account::all();
        return view('account.view', [
            'accounts' => $accounts,
        ]);
    }




    public function edit($team_id)
    {
        $teams = Team::find($team_id);
        return view('team.edit', [
            'teams' => $teams,
        ]);
    }
    public function account_edit($account_id)
    {
        $accounts = Account::find($account_id);
        return view('account.edit', [
            'accounts' => $accounts,
        ]);
    }




    public function update(Request $request)
    {
        if($request->image != ''){
            Team::find($request->id)->update([
                'name' => $request->name,
                'designation' => $request->designation,
                'updated_at' => Carbon::now(),
            ]);
    
            $image_path = public_path('/uploads/team/'.Team::find($request->id)->image);
            unlink($image_path);
    
            $image = $request->image;
            $extension = $image->getClientOriginalExtension();
            $image_name = $request->id.'.'.$extension;
    
            Image::make($image)->save(public_path('/uploads/team/'.$image_name));
    
            Team::find($request->id)->update([
                'image' => $image_name,
            ]);
    
            return back()->with('success', 'Update successful!');
        }else{
            Team::find($request->id)->update([
                'name' => $request->name,
                'designation' => $request->designation,
                'updated_at' => Carbon::now(),
            ]);

            return back()->with('success', 'Update successful!');
        }
    }
    public function account_update(Request $request)
    {
        Account::find($request->id)->update([
            'name' => $request->name,
            'link' => $request->link,
            'icon' => $request->icon,
            'updated_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Update successful!');
    }




    public function delete($team_id)
    {
        $accounts = Account::where('team_id', $team_id)->get();

        foreach($accounts as $account){
            Account::find($account->id)->delete();
        }
        
        $image_path = public_path('/uploads/team/'.Team::find($team_id)->image);
        unlink($image_path);

        Team::find($team_id)->delete();

        return back()->with('success', 'A team members profile has been deleted successfully!');

    }
    public function account_delete($account_id)
    {
        Account::find($account_id)->delete();

        return back()->with('success', 'An account has been deleted successfully!');
    }





}
