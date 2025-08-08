<?php

namespace App\Models;

use App\Core\Model;

class Usuario extends Model
{

    protected $table = 'usuarios';

    public function findByUsuario($usuario)
    {
        $sql = "SELECT * FROM {$this->table} WHERE usuario = ? AND activo = 1";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        }

        return null;
    }

    public function create($data)
    {
        $sql = "INSERT INTO {$this->table} (nombre, codigo_empleado, password, tipo_usuario, area_id) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param(
            "ssssi",
            $data['nombre'],
            $data['codigo_empleado'],
            $data['password'],
            $data['tipo_usuario'],
            $data['area_id']
        );

        return $stmt->execute();
    }

    public function getNameArea($area_id)
    {
        $areaSql = "SELECT nombre FROM area WHERE id = ?";
        $areaStmt = $this->db->prepare($areaSql);
        $areaStmt->bind_param("i", $area_id);
        $areaStmt->execute();
        $areaStmt->bind_result($nombreArea);
        $areaStmt->fetch();
        $areaStmt->close();

        return $nombreArea;
    }

    public function findQAUsersByArea($areaId)
    {
        $sql = "SELECT * FROM {$this->table} WHERE area_id = ? AND tipo_usuario LIKE '%qa%'";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $areaId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        return [];
    }
}
