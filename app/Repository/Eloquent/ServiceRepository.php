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

    public function getService(int $id): Service{
        if(! $this->service->find($id)){
            return [
                "status" => "failed",
                "message" => "Service not found"
            ];
        }

        return $this->service->where('id', $id)->first();
    }

    public function updateService(int $id, array $data): Service{

        if(! $service = $this->service->where("id", $id)->update($data)){
            return [
                "status" => "failed",
                "message" => "Failed to update services"
            ];
        }

        return $service;
    }

    public function deleteService(int $id):bool
    {
        if(!$this->service->where('id', $id)->delete()){
            return false;
        };

        return true;
    }
}
