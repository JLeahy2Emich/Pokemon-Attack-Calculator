<?php
$atktype = $_POST["atktype"];
$deftype1 = $_POST["deftype1"];
$deftype2 = $_POST["deftype2"];

           //nml fgt fly psn grd rck bug gst stl fir wtr grs elc psy ice drg drk fry none
$normal =   [ 1 , 1 , 1 , 1 , 1 ,.5 , 1 , 0 ,.5 , 1 , 1 , 1 , 1 , 1 , 1 , 1 , 1 , 1 , 1];
$fighting = [ 2 , 1 ,.5 ,.5 , 1 , 2 ,.5 , 0 , 2 , 1 , 1 , 1 , 1 ,.5 , 2 , 1 , 2 ,.5 , 1];
$flying =   [ 1 , 2 , 1 , 1 , 1 ,.5 , 2 , 1 ,.5 , 1 , 1 , 2 ,.5 , 1 , 1 , 1 , 1 , 1 , 1];
$poison =   [ 1 , 1 , 1 ,.5 ,.5 ,.5 , 1 , .5, 0 , 1 , 1 , 2 , 1 , 1 , 1 , 1 , 1 , 2 , 1];
$ground =   [ 1 , 1 , 0 , 2 , 1 , 2 ,.5 , 1 , 2 , 2 , 1 ,.5 , 2 , 1 , 1 , 1 , 1 , 1 , 1];
$rock =     [ 1 ,.5 , 2 , 1 ,.5 , 1 , 2 , 1 ,.5 , 2 , 1 , 1 , 1 , 1 , 2 , 1 , 1 , 1 , 1];
$bug =      [ 1 ,.5 ,.5 ,.5 , 1 , 1 , 1 ,.5 ,.5 ,.5 , 1 , 2 , 1 , 2 , 1 , 1 , 2 ,.5 , 1];
$ghost =    [ 0 , 1 , 1 , 1 , 1 , 1 , 1 , 2 , 1 , 1 , 1 , 1 , 1 , 2 , 1 , 1 ,.5 , 1 , 1];
$steel =    [ 1 , 1 , 1 , 1 , 1 , 2 , 1 , 1 ,.5 ,.5 ,.5 , 1 ,.5 , 1 , 2 , 1 , 1 , 2 , 1];
$fire =     [ 1 , 1 , 1 , 1 , 1 ,.5 , 2 , 1 , 2 ,.5 ,.5 , 2 , 1 , 1 , 2 ,.5 , 1 , 1 , 1];
$water =    [ 1 , 1 , 1 , 1 , 2 , 2 , 1 , 1 , 1 , 2 ,.5 ,.5 , 1 , 1 , 1 ,.5 , 1 , 1 , 1];
$grass =    [ 1 , 1 ,.5 ,.5 , 2 , 2 ,.5 , 1 ,.5 ,.5 , 2 ,.5 , 1 , 1 , 1 ,.5 , 1 , 1 , 1];
$electric = [ 1 , 1 , 2 , 1 , 0 , 1 , 1 , 1 , 1 , 1 , 2 ,.5 ,.5 , 1 , 1 ,.5 , 1 , 1 , 1];
$psychic =  [ 1 , 2 , 1 , 2 , 1 , 1 , 1 , 1 ,.5 , 1 , 1 , 1 , 1 ,.5 , 1 , 1 , 0 , 1 , 1];
$ice =      [ 1 , 1 , 2 , 1 , 2 , 1 , 1 , 1 ,.5 ,.5 ,.5 , 2 , 1 , 1 ,.5 , 2 , 1 , 0 , 1];
$dragon =   [ 1 , 1 , 1 , 1 , 1 , 1 , 1 , 1 ,.5 , 1 , 1 , 1 , 1 , 2 , 1 , 1 ,.5 ,.5 , 1];
$dark =     [ 1 ,.5 , 1 , 1 , 1 , 1 , 1 , 2 , 1 , 1 , 1 , 1 , 1 , 2 , 1 , 1 ,.5 ,.5 , 1];
$fairy =    [ 1 , 2 , 1 ,.5 , 1 , 1 , 1 , 1 ,.5 ,.5 , 1 , 1 , 1 , 1 , 1 , 2 , 2 , 1 , 1];

    $damage = 0;
    if($atktype == "normal"){
        $damage = $normal[$deftype1] * $normal[$deftype2];
    }
    if($atktype == "fighting"){
        $damage = $fighting[$deftype1] * $fighting[$deftype2];
    }
    if($atktype == "flying"){
        $damage = $flying[$deftype1] * $flying[$deftype2];
    }
    if($atktype == "poison"){
        $damage = $poison[$deftype1] * $poison[$deftype2];
    }
    if($atktype == "ground"){
        $damage = $ground[$deftype1] * $ground[$deftype2];
    }
    if($atktype == "rock"){
        $damage = $rock[$deftype1] * $rock[$deftype2];
    }
    if($atktype == "bug"){
        $damage = $bug[$deftype1] * $bug[$deftype2];
    }
    if($atktype == "ghost"){
        $damage = $ghost[$deftype1] * $ghost[$deftype2];
    }
    if($atktype == "steel"){
        $damage = $steel[$deftype1] * $steel[$deftype2];
    }
    if($atktype == "fire"){
        $damage = $fire[$deftype1] * $fire[$deftype2];
    }
    if($atktype == "water"){
        $damage = $water[$deftype1] * $water[$deftype2];
    }
    if($atktype == "grass"){
        $damage = $grass[$deftype1] * $grass[$deftype2];
    }
    if($atktype == "electric"){
        $damage = $electric[$deftype1] * $electric[$deftype2];
    }
    if($atktype == "psychic"){
        $damage = $psychic[$deftype1] * $psychic[$deftype2];
    }
    if($atktype == "ice"){
        $damage = $ice[$deftype1] * $ice[$deftype2];
    }
    if($atktype == "dragon"){
        $damage = $dragon[$deftype1] * $dragon[$deftype2];
    }
    if($atktype == "dark"){
        $damage = $dark[$deftype1] * $dark[$deftype2];
    }
    if($atktype == "fairy"){
        $damage = $fairy[$deftype1] * $fairy[$deftype2];
    }
    echo "<p>The damage multiplier is: ".$damage."</p>";

?>