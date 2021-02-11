<?php
if(isset($_GET['age'])){
    echo "Tu as ".intval(strip_tags($_GET['age']))."</p>";
}
else {
    echo "<p>Le paramètres  age est  absent</p>";
}