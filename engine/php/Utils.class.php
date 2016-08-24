<?php
class Utils {

    public static function getLibFileList($dir, $extension, $ajax_page) {    
        if(is_dir($dir)) {
            $dh = opendir($dir);
            if ($dh) {
                while(($file = readdir($dh)) !== false) {
                    $lista[] = $file;
                }
                foreach($lista as $v) {
                    if($v != '.' && $v != "..") {
                        $path = $dir.$v;
                        if(!is_dir($path)) {
                            $pathinfo = pathinfo($path);
                            if(in_array($pathinfo['extension'], $extension) && $pathinfo['filename'] != 'Utils.class') {
                                if($pathinfo['extension'] == "php") {                               
                                    require_once($path);                                    
                                } else if($pathinfo['extension'] == "css"){
                                    if($ajax_page == false) {
                                    $path = str_replace("../", "", $path);
                                    echo "<link href='".$path."' rel='stylesheet' type='text/css' />\n";
                                    }  else {
                                        if($pathinfo['basename'] == $ajax_page.".css") {
                                            $path = str_replace("../", "", $path);
                                            echo "<link href='".$path."' rel='stylesheet' type='text/css' />\n";
                                        }
                                    }
                                } else if($pathinfo['extension'] == "js") {
                                    if($ajax_page == false) {
                                        $path = str_replace("../", "", $path);
                                        echo "<script type='text/javascript' charset='ISO-8859-1' src='".$path."'></script>\n";
                                    } else {
                                        if($pathinfo['basename'] == $ajax_page.".js") {
                                            $path = str_replace("../", "", $path);
                                            echo "<script type='text/javascript' charset='ISO-8859-1' src='".$path."'></script>\n";
                                        }
                                    }
                                }
                            }
                        }
                        if(is_dir($dir.$v)) {   
                             Utils::getLibFileList($dir.$v."/", $extension, $ajax_page);
                        }
                    }
                }
                closedir($dh);
            }
        }
    }
    
    public static function setData2BR($data) {
        
        $pattern = "/(\d{4})-(\d{2})-(\d{2})/";
        
        if(preg_match($pattern,$data) === FALSE) {
            
            return $data;
            
        } else {
            
            return preg_replace($pattern,"$3/$2/$1",$data);
            
        }
    }

}
?>
