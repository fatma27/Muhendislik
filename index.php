<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // giriş verileri için değişkenler
 $user_id = $_POST['user_id'];
 $kullanici_adi = $_POST['kullanici_adi'];
 $kullanici_soyadi = $_POST['kullanici_soyadi'];
 $kullanici_sehri = $_POST['kullanici_sehri'];
 $kullanici_dgmtrh = $_POST['kullanici_dgmtrh'];
 
 // giriş verileri için değişkenler

 // sql sorgularının verilerini veritabanına eklemek için
 $sql_query = 
 "INSERT INTO users
 (user_id,kullanici_adi,kullanici_soyadi,kullanici_sehri,kullanici_dgmtrh)
 VALUES
 ('$user_id','$kullanici_adi','$kullanici_soyadi','$kullanici_sehri','$kullanici_dgmtrh')";
 
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



<?php
include_once 'dbconfig.php';

// durumu silmek
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// durumu silmek
?>

<!DOCTYPE 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=latin5_turkish_ci" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
<title>CRUD</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Düzenlemek istediğine emin misin ??'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Silmek istediğine emin misin ??'))
 {
  window.location.href='index.php?delete_id='+id;
 }
}
</script>
</head>
<body class="bg-danger">

<div id="header">
 <div id="content">
    
    </div>
</div>
<h1  align=center class="bg-primary">KAYIT EKLEMEK</h1>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center" ><tr>
    </tr>
    <td><input class="bg-warning lead" type="text" name="kullanici_adi" placeholder="Kullanıcı Adı" required /></td>
    </tr>
    <tr>
    <td><input class="bg-warning lead" type="text" name="kullanici_soyadi" placeholder="Kullanıcı Soyadı" required /></td>
    </tr>
    <tr>
    <td><input class="bg-warning lead" type="text" name="kullanici_sehri" placeholder="Kullanıcı Şehri" required /></td>
    </tr>
    <tr>
    <td><input class="bg-warning lead" type="text" name="kullanici_dgmtrh" placeholder="Doğum tarihi" required /></td>
    </tr>
    <tr>
    <td><button  class="btn btn-primary btn-lg btn btn-success" "type="submit" class="btn btn-default" name="btn-save"><strong>Kaydet</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>




<center>

<div id="header">
 <div id="content">
    </div>
</div>
<h1 align="center" class="bg-primary">KAYITLAR</h1>
<div id="body">
 <div id="content">
    <table class="table table-bordered table table-striped" align="center">
    <tr>
    </tr>
    <th colspan="1">Kullanıcı Id  </th>
    <th colspan="1">Kullanıcı Adı  </th>
    <th colspan="1">Kullanıcı Soyadı  </th>
    <th colspan="1">Kullanıcı Şehri  </th>
    <th colspan="1">Kullanıcı Doğum Tarihi  </th>
    <th></th>
    <th colspan="1">İşlemler</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM users";
 $result_set=mysql_query($sql_query);
 while($row=mysql_fetch_row($result_set))
 {
  ?>
        <tr>
        <td class="success" ><?php echo "".$row[0]; ?></td> 
        <td class="success"><?php echo "".$row[1]; ?></td> 
        <td class="success"><?php echo "".$row[2]; ?></td>
        <td class="success"><?php echo "".$row[3]; ?></td>
        <td class="success"><?php echo "".$row[4]; ?></td>
        
  		<td class="info" align="center">
        <a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="yenile.png" class="img-circle" align="DUZENLE" /></a>
        </td>
        <td class="info" align="center">
        <a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="sil.jpg" class="img-circle" align="SIL" /></a>
        </td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

</center>
</body>
</html>