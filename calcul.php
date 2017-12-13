<?php
session_start();
$_SESSION['mail'] = 'admin';


 if ($_SESSION ['mail']=='admin') {


?>
<!DOCTYPE html>
    <html>
        <head>
        <title>jecalcule</title>
        <meta charset="utf-8">
        </head>
        <body>

                <form method="POST">
                    <table rule="all">
                  <tr>
                      <td>Nombre 1</td>
                      <td><input type="number" name="nombre1" placeholder="Entrer nombre 1"></td>
                  </tr>
                  <tr>
                      <td>Nombre 2</td>
                      <td><input type="number" name="nombre2" placeholder="Entrer nombre 2"></td>
                  </tr>
                  <tr>
                      <td>operateur</td>
                     <td><select name="op">
                <option value="">selectionnez un opérateur</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="%">%</option>
                    </select></td>
                  </tr>
                  <tr>
                      <td></td>
                  <td><input type="submit" name="submit" value="calculer">
                  </tr>
                  <tr>
                      <td colspan="2">

                      </td>
                      <td><a href="absa.php">deconnection</a></td>
                  </tr>
                        </table>
                </form>



        </body>
        <?php

        if( isset($_POST['submit'])){

        extract($_POST);

        if($op=="+")
           {
            echo "$nombre1 $op $nombre2=".($nombre1 + $nombre2);
           }
        elseif($op=='-')
           {
            echo"$nombre1 $op $nombre2=".($nombre1-$nombre2);
          }
        elseif($op=='*')
            {
                echo"$nombre1 $op $nombre2=".($nombre1*$nombre2);
            }

          elseif ($op=="/") {
              if ($nombre2==0) {
                  echo "erreur";
              }
              else {
                  echo "$nombre1 $op $nombre2=". ($nombre1/$nombre2);
              }
          }
          elseif ($op=="%") {
              if ($nombre2==0) {
                  echo "erreur";
              }
              else {
                  echo "$nombre1 $op $nombre2=". ($nombre1%$nombre2);
              }
          }


    }
     }
    else {
        echo "connection impossible";
    }
