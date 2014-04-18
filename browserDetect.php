<?php
        
        /**
         * Very simple function to return name of one of the 3 popular
         * browsers when browscap is not possible.
         * @return string
         */
        function browserDetect() {
            $subject = $_SERVER['HTTP_USER_AGENT'];
            if (preg_match('/(Chrome)\/(\d{1,})/', $subject, $matches)) {
                return $matches[1] . ' ' . $matches[2];
            }
            else if (preg_match('/(Firefox)\/(\d{1,})/', $subject, $matches)) {
		return $matches[1] . ' ' . $matches[2];
            }
            else if (preg_match('/(MSIE) (\d{1,})/', $subject, $matches)) {
		return $matches[1] . ' ' . $matches[2];
            }
            else {
		return 'Unknown browser.';
            }
         }
         
?>
