<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // giriş verileri için değişkenler
 $kullanici_adi = $_POST['kullanici_adi'];
 $kullanici_soyadi = $_POST['kullanici_soyadi'];
 $kullanici_sehri = $_POST['kullanici_sehri'];
 $kullanici_dgmtrh = $_POST['kullanici_dgmtrh'];
 
 // giriş verileri için değişkenler

 // sql sorgularının verilerini veritabanına eklemek için
 $sql_query = 
 "INSERT INTO users
 (kullanici_adi,kullanici_soyadi,kullanici_sehri,kullanici_dgmtrh)
 VALUES
 ('$kullanici_adi','$kullanici_soyadi','$kullanici_sehri','$kullanici_dgmtrh')";
 
 // sql sorgularının verilerini veritabanına eklemek için
 
 // Sql sorgu yürütme işlevi
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Veri başarıyla eklendi :)');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('Veriler eklenirken bir hata oluştu');
  </script>
  <?php
 }
 // Sql sorgu yürütme işlevi
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">Ana sayfaya dönünüz</a></td>
    </tr>
    <tr>
    <td><input type="text" name="kullanici_adi" placeholder="Kullanıcı Adı" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="kullanici_soyadi" placeholder="Kullanıcı Soyadı" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="kullanici_sehri" placeholder="Kullanıcı Şehri" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="kullanici_dgmtrh" placeholder="Doğum tarihi" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>Kaydet</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>