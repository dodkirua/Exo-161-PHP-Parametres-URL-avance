<?php
if(isset($_GET['semaine'])){
    echo "Nous sommes en semaine  ".intval(strip_tags($_GET['semaine']))."</p>";
}
else {
    echo "<p>Le paramètres  semaine est  absent</p>";
}