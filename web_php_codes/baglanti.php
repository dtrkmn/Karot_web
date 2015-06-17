<meta charset="utf-8">
<?PHP
$link = mysql_connect("194.27.32.115", "geo-rock-db", "w4eLJ");
 
$db = mysql_select_db("geo-rock-db", $link);
if($db){
echo "bağlantı başarılı";
    }
else {
        echo "Veritabanına bağlantı sağlanamadı";
    }
?>