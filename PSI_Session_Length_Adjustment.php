<?php
class PSI_Session_Length_Adjustment{
    function PSI_Session_Length_Adjustment(){
        ini_set('session.gc_maxlifetime',28800);
    }
}