<?php

require("PkmnHeader.php");

$atktype = $_POST["atktype"];
$deftype1 = $_POST["deftype1"];
$deftype2 = $_POST["deftype2"];
$atkdef = $_POST["atkdef"];

//This is literally the type effectiveness table in a 2D array
$types = array (
     //nml fgt fly psn grd rck bug gst stl fir wtr grs elc psy ice drg drk fry none
array ( 1 , 1 , 1 , 1 , 1 ,.5 , 1 , 0 ,.5 , 1 , 1 , 1 , 1 , 1 , 1 , 1 , 1 , 1 , 1), //Normal
array ( 2 , 1 ,.5 ,.5 , 1 , 2 ,.5 , 0 , 2 , 1 , 1 , 1 , 1 ,.5 , 2 , 1 , 2 ,.5 , 1), //Fighting
array ( 1 , 2 , 1 , 1 , 1 ,.5 , 2 , 1 ,.5 , 1 , 1 , 2 ,.5 , 1 , 1 , 1 , 1 , 1 , 1), //Flying
array ( 1 , 1 , 1 ,.5 ,.5 ,.5 , 1 , .5, 0 , 1 , 1 , 2 , 1 , 1 , 1 , 1 , 1 , 2 , 1), //Poison
array ( 1 , 1 , 0 , 2 , 1 , 2 ,.5 , 1 , 2 , 2 , 1 ,.5 , 2 , 1 , 1 , 1 , 1 , 1 , 1), //Ground
array ( 1 ,.5 , 2 , 1 ,.5 , 1 , 2 , 1 ,.5 , 2 , 1 , 1 , 1 , 1 , 2 , 1 , 1 , 1 , 1), //Rock
array ( 1 ,.5 ,.5 ,.5 , 1 , 1 , 1 ,.5 ,.5 ,.5 , 1 , 2 , 1 , 2 , 1 , 1 , 2 ,.5 , 1), //Bug
array ( 0 , 1 , 1 , 1 , 1 , 1 , 1 , 2 , 1 , 1 , 1 , 1 , 1 , 2 , 1 , 1 ,.5 , 1 , 1), //Ghost
array ( 1 , 1 , 1 , 1 , 1 , 2 , 1 , 1 ,.5 ,.5 ,.5 , 1 ,.5 , 1 , 2 , 1 , 1 , 2 , 1), //Steel
array ( 1 , 1 , 1 , 1 , 1 ,.5 , 2 , 1 , 2 ,.5 ,.5 , 2 , 1 , 1 , 2 ,.5 , 1 , 1 , 1), //Fire
array ( 1 , 1 , 1 , 1 , 2 , 2 , 1 , 1 , 1 , 2 ,.5 ,.5 , 1 , 1 , 1 ,.5 , 1 , 1 , 1), //Water
array ( 1 , 1 ,.5 ,.5 , 2 , 2 ,.5 , 1 ,.5 ,.5 , 2 ,.5 , 1 , 1 , 1 ,.5 , 1 , 1 , 1), //Grass
array ( 1 , 1 , 2 , 1 , 0 , 1 , 1 , 1 , 1 , 1 , 2 ,.5 ,.5 , 1 , 1 ,.5 , 1 , 1 , 1), //Electric
array ( 1 , 2 , 1 , 2 , 1 , 1 , 1 , 1 ,.5 , 1 , 1 , 1 , 1 ,.5 , 1 , 1 , 0 , 1 , 1), //Psychic
array ( 1 , 1 , 2 , 1 , 2 , 1 , 1 , 1 ,.5 ,.5 ,.5 , 2 , 1 , 1 ,.5 , 2 , 1 , 0 , 1), //Ice
array ( 1 , 1 , 1 , 1 , 1 , 1 , 1 , 1 ,.5 , 1 , 1 , 1 , 1 , 1 , 1 , 2 ,.5 ,.5 , 1), //Dragon
array ( 1 ,.5 , 1 , 1 , 1 , 1 , 1 , 2 , 1 , 1 , 1 , 1 , 1 , 2 , 1 , 1 ,.5 ,.5 , 1), //Dark
array ( 1 , 2 , 1 ,.5 , 1 , 1 , 1 , 1 ,.5 ,.5 , 1 , 1 , 1 , 1 , 1 , 2 , 2 , 1 , 1), //Fairy
array ( 1 , 1 , 1 , 1 , 1 , 1 , 1 , 1 , 1 , 1 , 1 , 1 , 1 , 1 , 1 , 1 , 1 , 1 , 1)  //None
);

    //Math for Attacking
    if($atkdef == 0){
        //Calculates the damage multiplier
        $damage = 0;
        if($atktype == "normal"){
            $damage = $types[0][$deftype1] * $types[0][$deftype2];
        }
        if($atktype == "fighting"){
            $damage = $types[1][$deftype1] * $types[1][$deftype2];
        }
        if($atktype == "flying"){
            $damage = $types[2][$deftype1] * $types[2][$deftype2];
        }
        if($atktype == "poison"){
            $damage = $types[3][$deftype1] * $types[3][$deftype2];
        }
        if($atktype == "ground"){
            $damage = $types[4][$deftype1] * $types[4][$deftype2];
        }
        if($atktype == "rock"){
            $damage = $types[5][$deftype1] * $types[5][$deftype2];
        }
        if($atktype == "bug"){
            $damage = $types[6][$deftype1] * $types[6][$deftype2];
        }
        if($atktype == "ghost"){
            $damage = $types[7][$deftype1] * $types[7][$deftype2];
        }
        if($atktype == "steel"){
            $damage = $types[8][$deftype1] * $types[8][$deftype2];
        }
        if($atktype == "fire"){
            $damage = $types[9][$deftype1] * $types[9][$deftype2];
        }
        if($atktype == "water"){
            $damage = $types[10][$deftype1] * $types[10][$deftype2];
        }
        if($atktype == "grass"){
            $damage = $types[11][$deftype1] * $types[11][$deftype2];
        }
        if($atktype == "electric"){
            $damage = $types[12][$deftype1] * $types[12][$deftype2];
        }
        if($atktype == "psychic"){
            $damage = $types[13][$deftype1] * $types[13][$deftype2];
        }
        if($atktype == "ice"){
            $damage = $types[14][$deftype1] * $types[14][$deftype2];
        }
        if($atktype == "dragon"){
            $damage = $types[15][$deftype1] * $types[15][$deftype2];
        }
        if($atktype == "dark"){
            $damage = $types[16][$deftype1] * $types[16][$deftype2];
        }
        if($atktype == "fairy"){
            $damage = $types[17][$deftype1] * $types[17][$deftype2];
        }

        echo "<p style='font-size:50px';>The damage multiplier is: </p>";
        //Changes color of text for readability
        if($damage == 0){
            echo "<p style='color:rgb(202, 2, 144);font-family:Georgia;font-size:100px'>".$damage."</p>";
        }
        if($damage == 0.25){
            echo "<p style='color:rgb(0,24,100);font-family:Georgia;font-size:100px'>".$damage."</p>";
        }
        if($damage == 0.5){
            echo "<p style='color:rgb(255,0,0);font-family:Georgia;font-size:100px'>".$damage."</p>";
        }
        if($damage == 1){
            echo "<p style='color:rgb(0,0,0);font-family:Georgia;font-size:100px'>".$damage."</p>";
        }
        if($damage == 2){
            echo "<p style='color:rgb(33, 164, 1);font-family:Georgia;font-size:100px'>".$damage."</p>";
        }
        if($damage == 4){
            echo "<p style='color:rgb(8,69,0);font-family:Georgia;font-size:100px'>".$damage."</p>";
        }

    }
    
    //Math for Defending
    if($atkdef == 1){
        $deftypelabel1 = "";
        $deftypelabel2 = "";
        $effectivelabel = "";

        //Generates labels for the types, I swear this is easiest way I can think of to do this
        if($deftype1 == 0){$deftypelabel1 = "Normal";}
        if($deftype1 == 1){$deftypelabel1 = "Fighting";}
        if($deftype1 == 2){$deftypelabel1 = "Flying";}
        if($deftype1 == 3){$deftypelabel1 = "Poison";}
        if($deftype1 == 4){$deftypelabel1 = "Ground";}
        if($deftype1 == 5){$deftypelabel1 = "Rock";}
        if($deftype1 == 6){$deftypelabel1 = "Bug";}
        if($deftype1 == 7){$deftypelabel1 = "Ghost";}
        if($deftype1 == 8){$deftypelabel1 = "Steel";}
        if($deftype1 == 9){$deftypelabel1 = "Fire";}
        if($deftype1 == 10){$deftypelabel1 = "Water";}
        if($deftype1 == 11){$deftypelabel1 = "Grass";}
        if($deftype1 == 12){$deftypelabel1 = "Electric";}
        if($deftype1 == 13){$deftypelabel1 = "Psychic";}
        if($deftype1 == 14){$deftypelabel1 = "Ice";}
        if($deftype1 == 15){$deftypelabel1 = "Dragon";}
        if($deftype1 == 16){$deftypelabel1 = "Dark";}
        if($deftype1 == 17){$deftypelabel1 = "Fairy";}
        
        if($deftype2 == 0){$deftypelabel2 = "Normal";}
        if($deftype2 == 1){$deftypelabel2 = "Fighting";}
        if($deftype2 == 2){$deftypelabel2 = "Flying";}
        if($deftype2 == 3){$deftypelabel2 = "Poison";}
        if($deftype2 == 4){$deftypelabel2 = "Ground";}
        if($deftype2 == 5){$deftypelabel2 = "Rock";}
        if($deftype2 == 6){$deftypelabel2 = "Bug";}
        if($deftype2 == 7){$deftypelabel2 = "Ghost";}
        if($deftype2 == 8){$deftypelabel2 = "Steel";}
        if($deftype2 == 9){$deftypelabel2 = "Fire";}
        if($deftype2 == 10){$deftypelabel2 = "Water";}
        if($deftype2 == 11){$deftypelabel2 = "Grass";}
        if($deftype2 == 12){$deftypelabel2 = "Electric";}
        if($deftype2 == 13){$deftypelabel2 = "Psychic";}
        if($deftype2 == 14){$deftypelabel2 = "Ice";}
        if($deftype2 == 15){$deftypelabel2 = "Dragon";}
        if($deftype2 == 16){$deftypelabel2 = "Dark";}
        if($deftype2 == 17){$deftypelabel2 = "Fairy";}

        for($i=0; $i<=17; $i++){
            //Equation that checks if effective is != to 1
            $effective = $types[$i][$deftype1]*$types[$i][$deftype2];

            //asigns labels to each of the types so they can be printed in the echo statments
            if($i==0){$effectivelabel = "Normal";}
            if($i==1){$effectivelabel = "Fighting";}
            if($i==2){$effectivelabel = "Flying";}
            if($i==3){$effectivelabel = "Poison";}
            if($i==4){$effectivelabel = "Ground";}
            if($i==5){$effectivelabel = "Rock";}
            if($i==6){$effectivelabel = "Bug";}
            if($i==7){$effectivelabel = "Ghost";}
            if($i==8){$effectivelabel = "Steel";}
            if($i==9){$effectivelabel = "Fire";}
            if($i==10){$effectivelabel = "Water";}
            if($i==11){$effectivelabel = "Grass";}
            if($i==12){$effectivelabel = "Electric";}
            if($i==13){$effectivelabel = "Psychic";}
            if($i==14){$effectivelabel = "Ice";}
            if($i==15){$effectivelabel = "Dragon";}
            if($i==16){$effectivelabel = "Dark";}
            if($i==17){$effectivelabel = "Fairy";}

            //Prints what types are effective/ineffective against the defending type(s)
            if($effective==0.5 && $deftype2==18){
                echo "<p style='color:rgb(255,0,0);font-family:Georgia;font-size:30px'>".$effectivelabel." type moves are ".$effective." times effective against ".$deftypelabel1. " types </p>";
            }
            if($effective==2 && $deftype2==18){
                echo "<p style='color:rgb(33, 164, 1);font-family:Georgia;font-size:30px'>".$effectivelabel." type moves are ".$effective." times effective against ".$deftypelabel1." types </p>";
            }
            if($effective==0 && $deftype2==18){
                echo "<p style='color:rgb(202, 2, 144);font-family:Georgia;font-size:30px'>".$effectivelabel." type moves are ".$effective." times effective against ".$deftypelabel1." types </p>";
            }

            //Same as above but for dual types
            if($effective==0 && $deftype2!=18){
                echo "<p style='color:rgb(202, 2, 144);font-family:Georgia;font-size:30px'>".$effectivelabel." type moves are ".$effective." times effective against ".$deftypelabel1." ".$deftypelabel2." types </p>";
            }
            if($effective==0.25 && $deftype2!=18){
                echo "<p style='color:rgb(0,24,100);font-family:Georgia;font-size:30px'>".$effectivelabel." type moves are ".$effective." times effective against ".$deftypelabel1." ".$deftypelabel2." types </p>";
            }
            if($effective==0.5 && $deftype2!=18){
                echo "<p style='color:rgb(255,0,0);font-family:Georgia;font-size:30px'>".$effectivelabel." type moves are ".$effective." times effective against ".$deftypelabel1." ".$deftypelabel2." types </p>";
            }
            if($effective==2 && $deftype2!=18){
                echo "<p style='color:rgb(33, 164, 1);font-family:Georgia;font-size:30px'>".$effectivelabel." type moves are ".$effective." times effective against ".$deftypelabel1." ".$deftypelabel2." types </p>";
            }
            if($effective==4 && $deftype2!=18){
                echo "<p style='color:rgb(8,69,0);font-family:Georgia;font-size:30px'>".$effectivelabel." type moves are ".$effective." times effective against ".$deftypelabel1." ".$deftypelabel2." types </p>";
            }
        }
        echo "<p style='font-size:40px;'>Press the back button to go back to the calculator.</p>";
    }
    require("PkmnFooter.php");
?>