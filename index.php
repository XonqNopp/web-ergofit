<?php
/* TODO:
 *
 */
require("functions/classPage.php");
$page = new PhPage();
//$page->LogLevelUp(6);



// Variables
$clem = "Cl&eacute;mentine Geoffroy";
$title = "ErgoFit";
$logo = "<img src=\"/pictures/logo.png\" alt=\"logo\" title=\"$title\" />";

$address1 = "Grand Rue 1";
$address2 = "1234 City";

$gmapsURL = "http://maps.google.ch/?f=d&amp;daddr=";
$gmapsURL .= str_replace(" ", "+", "$address1, $address2");

$gmapsTagOpen = "<a href=\"$gmapsURL\" title=\"$address1, $address2\">";
//$gmapsFullInline = "$gmapsTagOpen$address1, $address2</a>";
$gmapsFullBR = "$gmapsTagOpen$address1</a><br/>\n$gmapsTagOpen$address2</a>";




$page->SetTitle($title);
$page->HotBooty();

$body = "";

$body .= "<div class=\"h1title\">$logo&nbsp;$title</div>\n";

$body .= "<div><img src=\"/pictures/portrait.png\" alt=\"portrait\" title=\"$clem\" /></div>\n";
$body .= "<div>$clem</div>\n";
$body .= "<div>$gmapsFullBR</div>\n";

$body .= "<h2>Ce que je propose</h2>\n";
$body .= "<div>Pathologie de la main, r&eacute;&eacute;ducation du sportif...</div>\n";
$body .= "<div>Vous me trouverez aussi au magasin de v&eacute;lo \"Youpi Velo\" &agrave; Payerne le mercredi de 15h &agrave; 18h.</div>\n";

$body .= "<h2>Comment obtenir de l'ergoth&eacute;rapie?</h2>\n";
$body .= "<div>M&eacute;decin traitant...</div>\n";

$body .= "<h2>Pour les professionnels</h2>\n";
$body .= "<div>Ordonnance...</div>\n";

$page->show($body);
unset($page);
?>
