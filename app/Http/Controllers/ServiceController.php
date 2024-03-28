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

    public function getService($serviceId){
       if(! $service = $this->serviceRepository->getService($serviceId)){
            return redirect()->back()->withErrors('Cannot find service');
       }

       return view('Admin/service', ["service"=> $service]);
    }

    public function editServices($serviceId){
        return view('Admin/editService', ["service" => $this->serviceRepository->getService($serviceId)]);
    }

    public function updateService($serviceId, Request $request){
        if(!$this->serviceRepository->updateService($serviceId, $request->validated())){
            return redirect()->back()->withError("Update failed");
        }

        return redirect()->route('services.all')->with('message', "Service was edited succesfully");
    }

    public function deleteService($serviceID){
        if(!$this->serviceRepository->deleteService($serviceID)){
            return redirect()->route("service.all")->withErrors("Couldn't Delete Service");
        }

        return redirect()->route("services.all")->with("message", 'service Deleted Succesfully');
    }
}
