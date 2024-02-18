<?php

namespace App\Http\Controllers;

use App\Models\ServiceTitle;
use App\Models\Service;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ServiceController extends Controller
{
    public function index(){
        return view('service_title.index');
    }
    public function services_index(){
        $service_titles = ServiceTitle::all();
        return view('services.index', [
            'service_titles' => $service_titles,
        ]);
    }



    public function insert(Request $request)
    {
        ServiceTitle::insert([
            'icon' => $request->icon,
            'title' => $request->title,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Title added successfully!');
    }
    public function services_insert(Request $request)
    {
        Service::insert([
            'service_title' => $request->service_title,
            'service' => $request->service,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Service added successfully!');
    }



    public function view()
    {
        $service_titles = ServiceTitle::all();
        return view('service_title.view', [
            'service_titles' => $service_titles,
        ]);
    }
    public function services_view()
    {
        $services = Service::all();
        return view('services.view', [
            'services' => $services,
        ]);
    }



    public function edit($service_title_id)
    {
        $service_titles = ServiceTitle::find($service_title_id);
        return view('service_title.edit', [
            'service_titles' => $service_titles,
        ]);
    }
    public function services_edit($services_id)
    {
        $services = Service::find($services_id);
        return view('services.edit', [
            'services' => $services,
        ]);
    }



    public function update(Request $request)
    {
        ServiceTitle::find($request->id)->update([
            'icon' => $request->icon,
            'title' => $request->title,
            'updated_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Update successful!');
    }
    public function services_update(Request $request)
    {
        Service::find($request->id)->update([
            'service' => $request->service,
            'updated_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Update successful!');
    }



    public function delete($service_title_id)
    {
        $services = Service::where('service_title', $service_title_id)->get();

        foreach($services as $service){
            Service::find($service->id)->delete();
        }

        ServiceTitle::find($service_title_id)->delete();

        return back()->with('success', 'A title has been deleted successfully!');
    }
    public function services_delete($services_id)
    {
        Service::find($services_id)->delete();

        return back()->with('success', 'A service has been deleted successfully!');
    }


}

