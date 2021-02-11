<?php

if(isset($_GET['batiment'])  || isset($_GET['salle'])){
    echo "<p>Vous devez allez au batiment : ".strip_tags($_GET['batiment'])." en salle : ".strip_tags($_GET['salle'])."</p>";
}
else {
    echo "<p>Les paramètres sont absent</p>";
}