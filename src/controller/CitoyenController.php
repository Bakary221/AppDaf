<?php

namespace App\controller;
use App\service\CitoyenService;

class CitoyenController
{
    private CitoyenService $securityService;
    public function __construct(){
        $this->securityService = new CitoyenService();
    }
    public function index(){
        $this->render('connexion/connexion');
    }

    public function login($cin){
        if($cin){
            $citoyen = $this->securityService->getCitoyenByCin($cin);
        }else{
            $citoyen = $this->securityService->getAll($cin);
        }
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type");
        if($citoyen){
            echo JSON_encode([
                'status' => 'success',
                'message' => 'citoyen trouve',
                'data' => $citoyen
            ]);
        }
    else{
            echo JSON_encode([
                'status' => 'error',
                'message' => 'citoyen non trouvé',
            ]);
        }
    }
}