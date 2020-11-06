<?php
        /*
            Author: Bryl33t
            Version: 1.0

        */


    class FingerPrint {

        public function generate_finger_print() : string {
            $browser_info = get_browser(null, true);
            $browser_name_pattern = hash("sha256", $browser_info["browser_name_pattern"]);
            $parent = hash("sha256", $browser_info["parent"]);
            $os = hash("sha256", $browser_info["platform"]);
            $browser = hash("sha256", $browser_info["browser"]);
            $version = hash("sha256", $browser_info["version"]);
            $majorServ = hash("sha256",$browser_info["majorver"]);
            $minorSrv = hash("sha256", $browser_info["minorver"]);
            $cssVers = hash("sha256", $browser_info["cssversion"]);

            $arr_browsers_hashed_infos = [];
            array_push($arr_browsers_hashed_infos,$browser_name_pattern, $parent, $os, $browser, $version, $majorServ, $minorSrv, $cssVers);


            return implode("",$arr_browsers_hashed_infos);
        }

        public function equals_finger_print($fingerprint1, $fingerprint2) : bool {
            if($fingerprint1 == $fingerprint2) {
                return true;
            } else {
                return false;
            }
        }

    }
    

?>
