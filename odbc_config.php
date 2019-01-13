<?php



include ('includes/security/antisql.php');

$dbname = "LOW_DB";
$dbuser = "sa";
$dbpass = "Sudden123";

$conn = odbc_connect("Driver={SQL Server};Server=INSTANCE-1,1433;Charset=utf8;Database=LOW_DB","$dbuser","$dbpass");

/* Kayit Ayarlarý */
$kayit = "acik"; // Üyelik alýmý
$sifredegisimi = "kapat"; //þifre hatýrlatma deðiþtirme

/* Tarih Ayarlarý (Düzenlemeyiniz!!!) */

date_default_timezone_set('Europe/Istanbul');
$todayh = getdate();
$d = $todayh["mday"];
$m = $todayh["mon"];
$y = $todayh["year"];	
$date = $d."/".$m."/".$y;

function check($object)
{
  return htmlspecialchars(addslashes(strip_tags($object)));
}

?>
