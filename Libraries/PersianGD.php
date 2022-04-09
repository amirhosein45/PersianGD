<?php

namespace App\Libraries;


class PersianGD {

    public function convert_to_persian(&$str){

    include_once('Bidi.php');
    
    $bidi = new bidi();
    
    $text = explode("\n", $str);
    
    $str = array();
    
    foreach($text as $line){
        $chars = $bidi->utf8Bidi($bidi->UTF8StringToArray($line), 'AL');
        $line = '';
        foreach($chars as $char){
            $line .= $bidi->unichr($char);
        }
        
        $str[] = $line;
    }
    
    $str = implode("\n", $str);
    return $str;
}

}


?>
