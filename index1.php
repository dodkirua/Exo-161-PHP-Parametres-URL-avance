<?php

if(isset($_GET['nom'])  || isset($_GET['prenom'])){
    echo "<p>Hello ".strip_tags($_GET['nom'])." ".strip_tags($_GET['prenom'])."</p>";
}
else {
    echo "<p>Les paramètres sont absent</p>";
}