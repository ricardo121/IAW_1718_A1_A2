<?php
function numveces($v1,$v2) {
        $cont=0;
        for ($i=0;$i<sizeof($v1);$i++) {
            if ($v1[$i]==$v2) {
              $cont=$cont+1;
          }

          }
return $cont;
}
?>
