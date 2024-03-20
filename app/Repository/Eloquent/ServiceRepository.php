<?php
namespace App\Repository\Eloquent;

use App\Models\Service;

class ServiceRepository
{
    protected $service;
    
    public function __construct(Service $service) {
        $this->service = $service;
    }

    public function createService($data){
        if(! $service =$this->service->create($data)){
            return [
                "status" => "failed",
                "message" => "Failed to create services"
            ];
        }

        return $service;
    }

    public function getServices(){
        if(!$this->service->all()){
            return [
                "status" => "failed",
                "message" => "Failed to get services"
            ];
        }

        return $this->service->all();
        
    }
}
