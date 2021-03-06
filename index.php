<?php
/**
 * Created by PhpStorm.
 * User: Pascal.BENZONANA
 * Date: 08.05.2017
 * Time: 08:54
 */

session_start();
require "controleur/controleur.php";

try {
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        switch ($action) {
            case 'vue_accueil':
                accueil();
                break;
            case 'vue_snows':
                snows();
                break;
            case 'vue_add_snow' :
                addSnow();
                break;
            case 'vue_upd_snow' :
                editASnow();
                break;
            case 'vue_del_snow' :
                delSnow();
                break;
            case 'vue_login' :
                login();
                break;
            case 'vue_panier' :
                panier();
                break;
            default :
                throw new Exception("Action non valide");
        }
    } else
        accueil();
} catch (Exception $e) {
    erreur($e->getMessage());
}
