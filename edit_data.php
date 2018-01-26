<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // giriş verileri için değişkenler
 //$kullanici_id = $_POST['user_id'];
 $kullanici_adi = $_POST['kullanici_adi'];
 $kullanici_soyadi = $_POST['kullanici_soyadi'];
 $kullanici_sehri = $_POST['kullanici_sehri'];
 $kullanici_dgmtrh = $_POST['kullanici_dgmtrh'];
 // giriş verileri için değişkenler

 // sql sorgularının verilerini veritabanına eklemek için  user_id='$user_id',
 $sql_query = "UPDATE users SET 
 				kullanici_adi='$kullanici_adi',
 				kullanici_soyadi='$kullanici_soyadi',
				kullanici_sehri='$kullanici_sehri',
				kullanici_dgmtrh='$kullanici_dgmtrh'
 WHERE user_id=".$_GET['edit_id'];
 // sql sorgularının verilerini veritabanına eklemek için
 
 // Sql sorgu yürütme işlevi
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Veriler başarılı bir şekilde güncellendi.');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('Veri yüklenirken bir hata oluştu');
  </script>
  <?php
 }
 // Sql sorgu yürütme işlevi
}
if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
<title>CRUD ISLEMLERI</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body class="bg-danger">
<center>

<div id="header">
 <div id="content">
    <h1 align="center" class="bg-primary">KAYIT GÜNCELLEME</h1>
    </div>
</div>

<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
   
    </tr>
    <tr>
    <td><input class="bg-warning lead" type="text" name="kullanici_adi" placeholder="Ad= " value="<?php echo $fetched_row['kullanici_adi']; ?>" required /></td>
    </tr>
    <tr>
    <td><input class="bg-warning lead" type="text" name="kullanici_soyadi" placeholder="Soyad= " value="<?php echo $fetched_row['kullanici_soyadi']; ?>" required /></td>
    </tr>
    <tr>
    <td><input class="bg-warning lead" type="text" name="kullanici_sehri" placeholder="Sehri= " value="<?php echo $fetched_row['kullanici_sehri']; ?>" required /></td>
    </tr>
    <tr>
    <td><input class="bg-warning lead" type="text" name="kullanici_dgmtrh" placeholder="Dogum Tarihi" value="<?php echo $fetched_row['kullanici_dgmtrh']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button class="btn btn-primary btn-lg btn btn-success" type="submit" name="btn-update"><strong>Düzenle</strong></button>
    <button class="btn btn-primary btn-lg btn btn-success" type="submit" name="btn-cancel"><strong>İptal et</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>