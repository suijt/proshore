<?php
//create hash using user email and id
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

if (!function_exists('invitationHash')) {
    function invitationHash($email, $userId)
    {
        $hash = JWT::encode([$email, $userId], config('app.privateKey'), 'RS256');
        return $hash;
    }
}

if (!function_exists('invitationHashDecode')) {
    function invitationHashDecode($token)
    {
        try {
            return JWT::decode($token, new Key(config('app.publicKey'), 'RS256'));
        } catch (Exception $e) {
            return false;
        }
    }
}
