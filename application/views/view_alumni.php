<?php
	foreach($rts->result_array() as $register){

        echo $register['C_ID'];
        echo $register['Name_Lastname'];
        echo $register['Sex'];
        echo $register['Address'];
        echo $register['Tel'];
        echo $register['E_mail'];

		}
?>