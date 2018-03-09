<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of contactAdmin
 *
 * @author vasili
 */
class contactAdmin {
    
    public static function email($subject, $message) {
        $to      = 'vas.kaloidis@gmaill.com';
        
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: WFM-Notify@Zeus' . "\r\n" .
            'Reply-To: WFM-DontReply@zeus' . "\r\n";

        if(mail($to, $subject, $message, $headers)) {
            return true;
        } else {
            return false;
        }
    } 
    
}
