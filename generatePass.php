<?php
    function randomPassword($length = 10) {
            $chars =  'ABCDEFGHJKLMNOPQRSTUVWXYZabcdefghjkimnopqrstuvwxyz'.
                      '0123456789`-=~!@#$%^&*()_+,./<>?;:[]{}\|';
          
            $pass = '';
            $max = strlen($chars) - 1;
          
            for ($i=0; $i < $length; $i++)
              $pass .= $chars[random_int(0, $max)];
          
            return $pass;
    }
?>