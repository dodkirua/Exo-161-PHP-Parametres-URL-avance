<?php

if(isset($_GET['langage'])  || isset($_GET['serveur'])){
    echo "<p>Hello vous etes sur un serveur  ".strip_tags($_GET['langage'])." herberger par ".strip_tags($_GET['serveur'])."</p>";
}
else {
    echo "<p>Les paramètres sont absent</p>";
}