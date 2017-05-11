<?php
	include("header.php");
?>

<form action="main.php" method="get">
    Kies een of meerdere dieren:<br>
    <input type="checkbox" name="ijsbeer">Ijsbeer<br>
    <input type="checkbox" name="leeuw">Leeuw<br>
    <input type="checkbox" name="stokstaartje">Stokstaartje<br>
    <input type="checkbox" name="husky">Husky<br>
    <input type="checkbox" name="tijger">Tijger<br><br>
    <input type="submit">

<?php
    include("footer.php");
?>
