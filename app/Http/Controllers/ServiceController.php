<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;
use App\Repository\Eloquent\ServiceRepository;

class ServiceController extends Controller
{
    protected $serviceRepository;

    public function __construct(ServiceRepository $serviceRepository)
    {
        $this->serviceRepository = $serviceRepository;
    }
    
    public function addService(){
        return view('Admin/addService');
    }

    public function createService(ServiceRequest $request){
        if(!$this->serviceRepository->createService($request->validated())){
            return redirect()->back()->withErrors('Failed to Create Service');
        }
        
        return redirect()->route('services.all')->with('message', "Service Created Successfully");
    }

    public function getServices(){
        if(!$this->serviceRepository->getServices()){
            return redirect()->back()->withErrors('Failed to Get Services');
        }
        
        return view('Admin.services', ["services" => $this->serviceRepository->getServices()]);
    }
}
