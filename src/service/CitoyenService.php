<?php

namespace App\service;
use App\repository\CitoyenRepository;
use App\core\App;

class CitoyenService{
    private CitoyenRepository $citoyenRepository;
    private static ?SecurityService $instance = null;

    public function __construct(){
        $this->citoyenRepository = new CitoyenRepository;
    }

    // public static function getInstance(): self{
    //     if(self::$instance === null){
    //         self::$instance = new self();
    //     }
    //     return self::$instance;
    // }  

    public function getAll($cin){
        return $this->citoyenRepository->selectAllCitizen($cin);
    }

    public function getCitoyenByCin($cin){
        return $this->citoyenRepository->selectCitizenByCin($cin);
    }
}
