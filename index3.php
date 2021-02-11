<?php

if(isset($_GET['dateDebut'])  || isset($_GET['dateFin'])){
    echo "<p>debut le  ".strip_tags($_GET['dateFin'])." et fin le  ".strip_tags($_GET['dateFin'])."</p>";
}
else {
    echo "<p>Les paramètres sont absent</p>";
}