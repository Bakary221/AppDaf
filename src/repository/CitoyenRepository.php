<?php

namespace App\repository;
use App\core\Database;

class CitoyenRepository
{
    private Database $db;
    private static ?UtilisateurRepository $instance = null;

    public function __construct(){
        $this->db = new Database;
    }

    public function selectCitizenByCin($cin){
        try {
            $sql= 'SELECT * FROM utilisateurs WHERE numerocarteidentite = :cin';
            $stmt = $this->db->pdo->prepare($sql);
            $stmt->execute([
                ':cin'=> $cin
            ]);
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);

            return $result;
        } catch (\Throwable $th) {
            throw new \Exception($th->getMessage());
        }
    }

    public function selectAllCitizen(){
        try {
            $sql= 'SELECT * FROM utilisateurs';
            $stmt = $this->db->pdo->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        }
            catch (\Throwable $th) {
            throw new \Exception($th->getMessage());
        }
    }
}