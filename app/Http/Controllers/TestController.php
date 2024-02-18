<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceTitle;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){

        $service_titles = ServiceTitle::all();

        foreach($service_titles as $service_title){
            $service_title_id = $service_title['id'];
        }

        $services = Service::all();

        echo "<br>";

        foreach($services as $service){
            $service_id = $service['service_title'];
        }

        echo "<br>";
        
        $main_service = Service::where('service_title', '==', $service_title_id);
            

        return view('test', [
            'services' => $services,
            'service_titles' => $service_titles,
        ]);
    }
}
