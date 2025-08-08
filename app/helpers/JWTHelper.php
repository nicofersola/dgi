<?php

namespace App\Helpers;

use Firebase\JWT\JWT;

class JWTHelper
{

    public static function createAndStoreJWT($user)
    {
        global $jwt_secret;

        $payload = [
            "iat" => time(),
            "exp" => time() + (60 * 60 * 15), // 15 horas de expiración
            "data" => [
                "id" => $user['id'],
                "nombre" => $user['nombre'],
                "tipo_usuario" => $user['tipo_usuario']
            ]
        ];

        try {
            $new_jwt = JWT::encode($payload, $jwt_secret, 'HS256');
            setcookie('jwt', $new_jwt, time() + (60 * 60 * 15), '/', '', false, true);
            return true;
        } catch (\Exception $e) {
            error_log("Error al generar el token JWT: " . $e->getMessage());
            return false;
        }
    }
}
