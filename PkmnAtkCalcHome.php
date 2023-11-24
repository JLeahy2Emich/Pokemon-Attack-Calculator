<!DOCTYPE html>
<html>
    <?php
        require("PkmnHeader.php");
    ?>
    <body>
        <form action="PkmnAtkCalc.php" method="post">
            <!--Styles the body of the web page (&nbsp; is a space)-->
            <p style="font-size:37px">Attacking Type &nbsp; &nbsp;
                <!--Select the Attacking type-->
                <select name="atktype" id="atktype" style="font-size:37px">
                    <option value="normal">Normal</option>
                    <option value="fighting">Fighting</option>
                    <option value="flying">Flying</option>
                    <option value="poison">Poison</option>
                    <option value="ground">Ground</option>
                    <option value="rock">Rock</option>
                    <option value="bug">Bug</option>
                    <option value="ghost">Ghost</option>
                    <option value="steel">Steel</option>
                    <option value="fire">Fire</option>
                    <option value="water">Water</option>
                    <option value="grass">Grass</option>
                    <option value="electric">Electric</option>
                    <option value="psychic">Psychic</option>
                    <option value="ice">Ice</option>
                    <option value="dragon">Dragon</option>
                    <option value="dark">Dark</option>
                    <option value="fairy">Fairy</option>
                </select> </br>
                Defending Type 1
                <!--Select the Defending type-->
                <select name="deftype1" id="deftype1" style="font-size:37px">
                    <option value="0">Normal</option>
                    <option value="1">Fighting</option>
                    <option value="2">Flying</option>
                    <option value="3">Poison</option>
                    <option value="4">Ground</option>
                    <option value="5">Rock</option>
                    <option value="6">Bug</option>
                    <option value="7">Ghost</option>
                    <option value="8">Steel</option>
                    <option value="9">Fire</option>
                    <option value="10">Water</option>
                    <option value="11">Grass</option>
                    <option value="12">Electric</option>
                    <option value="13">Psychic</option>
                    <option value="14">Ice</option>
                    <option value="15">Dragon</option>
                    <option value="16">Dark</option>
                    <option value="17">Fairy</option>
                </select> </br>
                Defending Type 2
                <!--Select the second Defending type. If no 2nd type, none is automatically selected.-->
                <select name="deftype2" id="deftype2" style="font-size:37px">
                    <option value="18">None</option>
                    <option value="0">Normal</option>
                    <option value="1">Fighting</option>
                    <option value="2">Flying</option>
                    <option value="0">Normal</option>
                    <option value="1">Fighting</option>
                    <option value="2">Flying</option>
                    <option value="3">Poison</option>
                    <option value="4">Ground</option>
                    <option value="5">Rock</option>
                    <option value="6">Bug</option>
                    <option value="7">Ghost</option>
                    <option value="8">Steel</option>
                    <option value="9">Fire</option>
                    <option value="10">Water</option>
                    <option value="11">Grass</option>
                    <option value="12">Electric</option>
                    <option value="13">Psychic</option>
                    <option value="14">Ice</option>
                    <option value="15">Dragon</option>
                    <option value="16">Dark</option>
                    <option value="17">Fairy</option>
                </select> </br>
                Attacking or Defending?
                <!--Selects whether you are Attacking or Defending-->
                <select name="atkdef" id="atkdef" style="font-size:37px">
                    <option value="0">Attacking</option>
                    <option value="1">Defending</option>
                </select> </br>
                <input type="submit" value="Calculate" style="font-size:37px" />
            </p>
            <?php
                require("PkmnFooter.php");
            ?>
        </form>
    </body>
</html>