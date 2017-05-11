<?php
    include("header.php");

    $messages = array();

    if (!isset($_GET["ijsbeer"]) && !isset($_GET["leeuw"]) && !isset($_GET["stokstaartje"]) && !isset($_GET["husky"]) && !isset($_GET["tijger"])) {
        $messages[] = "Je moet eerst een dier kiezen";
    }

    if (count($messages) > 0) {
        $html = "<ul>";
        foreach ($messages as $message) {
            $html .= "<li>" . $message . "</li>";
        }
        $html .= "</ul>";
        echo $html;

    } if ($_GET["ijsbeer"]){
        echo '<img src="img/ijsbeer.jpg" alt="ijsbeer" width="400" height="312">';
    } if ($_GET["leeuw"]) {
        echo '<img src="img/leeuw.jpg" alt="leeuw" width="400" height="312">';
    } if ($_GET["stokstaartje"]) {
        echo '<img src="img/stokstaartje.jpg" alt="stokstaartje" width="400" height="312">';
    } if ($_GET["husky"]) {
        echo '<img src="img/husky.jpg" alt="husky" width="400" height="312">';
    } if ($_GET["tijger"]) {
        echo '<img src="img/tijger.jpg" alt="tijger" width="400" height="312">';
    }

?>

<?php
    include("footer.php");
?>