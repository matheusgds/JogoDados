<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FuncaoURL
 *
 * @author mathe
 */

class FuncaoURL {

    function returnURLIMG($i) {
        switch ($i) {
            case 1:
                return "";
                break;
            case 2:
                return "IMG/2.png";
                break;
            case 3:
                return "IMG/3.png";
                break;
            case 4:
                return "IMG/4.png";
                break;
            case 5:
                return "IMG/5.png";
                break;
            case 6:
                return "IMG/6.png";
                break;
            default :
                return "";
                break;
        }
    }

}
