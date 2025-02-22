<!DOCTYPE html>
<html lang="cs">
<head>
  <title>Rozpis služeb</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link href="./css/prettify-1.0.css" rel="stylesheet">
  <link href="./css/base.css" rel="stylesheet">
  <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
</head>
<body>
<div class="container">
<br>
<?php
$cas_vygenerovani = Date("H:i:s", Time());
$cp = '619';
$ulice = 'Pražská';
$rok = Date("Y", Time());
$mesic = Date("F", Time());
$den = Date("j", Time());

    if ($mesic == 'January'){
    $mesic = 'ledna';
    }else if ($mesic == 'February'){
    $mesic = 'února';
    }else if ($mesic == 'March'){
    $mesic = 'března';
    }else if ($mesic == 'April'){
    $mesic = 'dubna';
    }else if ($mesic == 'May'){
    $mesic = 'května';
    }else if ($mesic == 'June'){
    $mesic = 'června';    
    }else if ($mesic == 'July'){
    $mesic = 'července';
    }else if ($mesic == 'August'){
    $mesic = 'srpna';
    }else if ($mesic == 'September'){
    $mesic = 'září';        
    }else if ($mesic == 'October'){
    $mesic = 'řijna';
    }else if ($mesic == 'November'){
    $mesic = 'listopadu';
    }else if ($mesic == 'December'){
    $mesic = 'prosince';
    }else{
    $mesic = 'Něco je fakt špatně';
    }

$host = "localhost";
$uzivatel = "root";
$heslo = "MNI619chov**";
$databaze = "uklid";
$link = mysqli_connect($host, $uzivatel, $heslo, $databaze) or die ("Nepodarilo se pripojit k databazovemu serveru");
$query = "SELECT * FROM uzivatele WHERE uzivatel_byt='61901'";
$result = mysqli_query($link, $query) or die("Chyba nejde vypsat obsah databaze, kontaktujte administratora!!");
while ($radek=mysqli_fetch_array($result)){
$uzivatel_61901 = $radek['uzivatel_jmeno'].'&nbsp;'.$radek['uzivatel_prijmeni'];
         }
$query = "SELECT * FROM uzivatele WHERE uzivatel_byt='61902'";
$result = mysqli_query($link, $query) or die("Chyba nejde vypsat obsah databaze, kontaktujte administratora!!");
while ($radek=mysqli_fetch_array($result)){
$uzivatel_61902 = $radek['uzivatel_jmeno'].'&nbsp;'.$radek['uzivatel_prijmeni'];
         }
$query = "SELECT * FROM uzivatele WHERE uzivatel_byt='61903'";
$result = mysqli_query($link, $query) or die("Chyba nejde vypsat obsah databaze, kontaktujte administratora!!");
while ($radek=mysqli_fetch_array($result)){
$uzivatel_61903 = $radek['uzivatel_jmeno'].'&nbsp;'.$radek['uzivatel_prijmeni'];
         }
$query = "SELECT * FROM uzivatele WHERE uzivatel_byt='61904'";
$result = mysqli_query($link, $query) or die("Chyba nejde vypsat obsah databaze, kontaktujte administratora!!");
while ($radek=mysqli_fetch_array($result)){
$uzivatel_61904 = $radek['uzivatel_jmeno'].'&nbsp;'.$radek['uzivatel_prijmeni'];
         }
$query = "SELECT * FROM uzivatele WHERE uzivatel_byt='61905'";
$result = mysqli_query($link, $query) or die("Chyba nejde vypsat obsah databaze, kontaktujte administratora!!");
while ($radek=mysqli_fetch_array($result)){
$uzivatel_61905 = $radek['uzivatel_jmeno'].'&nbsp;'.$radek['uzivatel_prijmeni'];
         }
$query = "SELECT * FROM uzivatele WHERE uzivatel_byt='61906'";
$result = mysqli_query($link, $query) or die("Chyba nejde vypsat obsah databaze, kontaktujte administratora!!");
while ($radek=mysqli_fetch_array($result)){
$uzivatel_61906 = $radek['uzivatel_jmeno'].'&nbsp;'.$radek['uzivatel_prijmeni'];
         }         
$link->close();
?>
<div align="right"><b>Vygenerováno: </b><u><?php echo $den;?>.<?php echo $mesic;?>&nbsp;<?php echo $rok;?>&nbsp;(<?php echo $cas_vygenerovani; ?>)</u></div>
<h2 align="center">Rozvrh úklidu domu <?php echo $ulice; ?> <?php echo $cp; ?> pro rok: <?php echo $rok; ?></h2>

<?php 
echo "<br>";

$datum_start = date('28.12.2020');  // počáteční datum od kdy se mají služby počítat

  function radek($jmeno) {
  echo '<td bgcolor="#dfdddd">&nbsp;<b>'.$jmeno. "</b>&nbsp;&nbsp;</td>\n";
  }
  
  function datum($datum) {
  echo '<td>&nbsp;&nbsp;'.$datum. "&nbsp;&nbsp;</td>\n"; 
   }

$datum1 = strtotime("$datum_start + 1 week");
$datum_01 = date('d.m.Y',$datum1);

$datum2 = strtotime("$datum_01 + 1 week");
$datum_02 = date('d.m.Y',$datum2);

$datum3 = strtotime("$datum_02 + 1 week");
$datum_03 = date('d.m.Y',$datum3);

$datum4 = strtotime("$datum_03 + 1 week");
$datum_04 = date('d.m.Y',$datum4);

$datum5 = strtotime("$datum_04 + 1 week");
$datum_05 = date('d.m.Y',$datum5);

$datum6 = strtotime("$datum_05 + 1 week");
$datum_06 = date('d.m.Y',$datum6);

$datum7 = strtotime("$datum_06 + 1 week");
$datum_07 = date('d.m.Y',$datum7); 

$datum8 = strtotime("$datum_07 + 1 week");
$datum_08 = date('d.m.Y',$datum8); 

$datum9 = strtotime("$datum_08 + 1 week");
$datum_09 = date('d.m.Y',$datum9);
 
$datum10 = strtotime("$datum_09 + 1 week");
$datum_10 = date('d.m.Y',$datum10);

$datum11 = strtotime("$datum_10 + 1 week");
$datum_11 = date('d.m.Y',$datum11);

$datum12 = strtotime("$datum_11 + 1 week");
$datum_12 = date('d.m.Y',$datum12);

$datum13 = strtotime("$datum_12 + 1 week");
$datum_13 = date('d.m.Y',$datum13);

$datum14 = strtotime("$datum_13 + 1 week");
$datum_14 = date('d.m.Y',$datum14);

$datum15 = strtotime("$datum_14 + 1 week");
$datum_15 = date('d.m.Y',$datum15);

$datum16 = strtotime("$datum_15 + 1 week");
$datum_16 = date('d.m.Y',$datum16);

$datum17 = strtotime("$datum_16 + 1 week");
$datum_17 = date('d.m.Y',$datum17);

$datum18 = strtotime("$datum_17 + 1 week");
$datum_18 = date('d.m.Y',$datum18);

$datum19 = strtotime("$datum_18 + 1 week");
$datum_19 = date('d.m.Y',$datum19);

$datum20 = strtotime("$datum_19 + 1 week");
$datum_20 = date('d.m.Y',$datum20);

$datum21 = strtotime("$datum_20 + 1 week");
$datum_21 = date('d.m.Y',$datum21);

$datum22 = strtotime("$datum_21 + 1 week");
$datum_22 = date('d.m.Y',$datum22);

$datum23 = strtotime("$datum_22 + 1 week");
$datum_23 = date('d.m.Y',$datum23);

$datum24 = strtotime("$datum_23 + 1 week");
$datum_24 = date('d.m.Y',$datum24);

$datum25 = strtotime("$datum_24 + 1 week");
$datum_25 = date('d.m.Y',$datum25);

$datum26 = strtotime("$datum_25 + 1 week");
$datum_26 = date('d.m.Y',$datum26);

$datum27 = strtotime("$datum_26 + 1 week");
$datum_27 = date('d.m.Y',$datum27);

$datum28 = strtotime("$datum_27 + 1 week");
$datum_28 = date('d.m.Y',$datum28);

$datum29 = strtotime("$datum_28 + 1 week");
$datum_29 = date('d.m.Y',$datum29);

$datum30 = strtotime("$datum_29 + 1 week");
$datum_30 = date('d.m.Y',$datum30);

$datum31 = strtotime("$datum_30 + 1 week");
$datum_31 = date('d.m.Y',$datum31);

$datum32 = strtotime("$datum_31 + 1 week");
$datum_32 = date('d.m.Y',$datum32);

$datum33 = strtotime("$datum_32 + 1 week");
$datum_33 = date('d.m.Y',$datum33);

$datum34 = strtotime("$datum_33 + 1 week");
$datum_34 = date('d.m.Y',$datum34);

$datum35 = strtotime("$datum_34 + 1 week");
$datum_35 = date('d.m.Y',$datum35);

$datum36 = strtotime("$datum_35 + 1 week");
$datum_36 = date('d.m.Y',$datum36);

$datum37 = strtotime("$datum_36 + 1 week");
$datum_37 = date('d.m.Y',$datum37);

$datum38 = strtotime("$datum_37 + 1 week");
$datum_38 = date('d.m.Y',$datum38);

$datum39 = strtotime("$datum_38 + 1 week");
$datum_39 = date('d.m.Y',$datum39);

$datum40 = strtotime("$datum_39 + 1 week");
$datum_40 = date('d.m.Y',$datum40);

$datum41 = strtotime("$datum_40 + 1 week");
$datum_41 = date('d.m.Y',$datum41);

$datum42 = strtotime("$datum_41 + 1 week");
$datum_42 = date('d.m.Y',$datum42);

$datum43 = strtotime("$datum_42 + 1 week");
$datum_43 = date('d.m.Y',$datum43);

$datum44 = strtotime("$datum_43 + 1 week");
$datum_44 = date('d.m.Y',$datum44);

$datum45 = strtotime("$datum_44 + 1 week");
$datum_45 = date('d.m.Y',$datum45);

$datum46 = strtotime("$datum_45 + 1 week");
$datum_46 = date('d.m.Y',$datum46);

$datum47 = strtotime("$datum_46 + 1 week");
$datum_47 = date('d.m.Y',$datum47);

$datum48 = strtotime("$datum_47 + 1 week");
$datum_48 = date('d.m.Y',$datum48);

$datum49 = strtotime("$datum_48 + 1 week");
$datum_49 = date('d.m.Y',$datum49);

$datum50 = strtotime("$datum_49 + 1 week");
$datum_50 = date('d.m.Y',$datum50);

$datum51 = strtotime("$datum_50 + 1 week");
$datum_51 = date('d.m.Y',$datum51);

$datum52 = strtotime("$datum_51 + 1 week");
$datum_52 = date('d.m.Y',$datum52);

$datum53 = strtotime("$datum_52 + 1 week");
$datum_53 = date('d.m.Y',$datum53);




?>

<table border="3">
<tr>
<?php radek($uzivatel_61906); ?>
<?php datum($datum_start); ?>
<?php datum($datum_06); ?>
<?php datum($datum_12); ?>
<?php datum($datum_18); ?>
<?php datum($datum_24); ?>
<?php datum($datum_30); ?>
<?php datum($datum_36); ?>
<?php datum($datum_42); ?>
<?php datum($datum_48); ?>
</tr>

<tr>
<?php radek($uzivatel_61905); ?>
<?php datum($datum_01); ?>
<?php datum($datum_07); ?>
<?php datum($datum_13); ?>
<?php datum($datum_19); ?>
<?php datum($datum_25); ?>
<?php datum($datum_31); ?>
<?php datum($datum_37); ?>
<?php datum($datum_43); ?>
<?php datum($datum_49); ?>
</tr>

<tr>
<?php radek($uzivatel_61904); ?>
<?php datum($datum_02); ?>
<?php datum($datum_08); ?>
<?php datum($datum_14); ?>
<?php datum($datum_20); ?>
<?php datum($datum_26); ?>
<?php datum($datum_32); ?>
<?php datum($datum_38); ?>
<?php datum($datum_44); ?>
<?php datum($datum_50); ?>
</tr>

<tr>
<?php radek($uzivatel_61903); ?>
<?php datum($datum_03); ?>
<?php datum($datum_09); ?>
<?php datum($datum_15); ?>
<?php datum($datum_21); ?>
<?php datum($datum_27); ?>
<?php datum($datum_33); ?>
<?php datum($datum_39); ?>
<?php datum($datum_45); ?>
<?php datum($datum_51); ?>
</tr>

<tr>
<?php radek($uzivatel_61902); ?>
<?php datum($datum_04); ?>
<?php datum($datum_10); ?>
<?php datum($datum_16); ?>
<?php datum($datum_22); ?>
<?php datum($datum_28); ?>
<?php datum($datum_34); ?>
<?php datum($datum_40); ?>
<?php datum($datum_46); ?>
<?php datum($datum_52); ?>
</tr>

<tr>
<?php radek($uzivatel_61901); ?>
<?php datum($datum_05); ?>
<?php datum($datum_11); ?>
<?php datum($datum_17); ?>
<?php datum($datum_23); ?>
<?php datum($datum_29); ?>
<?php datum($datum_35); ?>
<?php datum($datum_41); ?>
<?php datum($datum_47); ?>
<?php datum($datum_53); ?>
</tr>
</table>
<br><br>
    <ol>
        <li>Úklid je prováděn v týdnu počínajícím datumem uvedeném v tabulce</li>			
        <li>Úklidové práce začínají v pondělí ráno a končí v neděli večer</li>			
        <li><u>Uklizí se:</u></li>
    <ul>
        <li>příslušná část schodiště</li>
        <li>vchod</li>
        <li>společné sklepní prostory (schody, chodby, mandlovna, kočárkárna, sušárna...)</li>
        <li>podle povětrnostních podmínek přístupová cesta od silnice k bytovce</li>			
    </ul>
    </ol>
<p style="color:red">
<b>Uživatel bytu, který má v příslušném  týdnu službu, ručí za kvalitní úklid společných prostor a přístupových cest.</b>
</p>
</div>
</body>
</html>