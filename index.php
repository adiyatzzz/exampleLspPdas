
<!-- 
    ====================================
    | Created By M. Ridha Putra Kesuma |
    ====================================
 -->

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Choose Days</title>
    </head>
    <body>
<h2>List Nama Hari</h2>

<?php
//struktur data with array dengan tipe data string
//mengimplementasikan struktur data

// $dataMonth = array("JANUARI","FEBRUARI","MARET","APRIL","MEI",
// "JUNI","JULI","AGUSTUS","SEPTEMBER","OKTOBER","NOVERMBER","DESEMBER");


$dataDay = array("SENIN","SELASA","RABU","KAMIS","JUM'AT",
"SABTU","MINGGU");
?>
 <table border="1">
                <tr>
                    <td>No</td>
                    <td>Nama Hari</td>
                </tr>

<?php

// struktur pengulangan menggunakan for
$no = 1;
for ($i=0;$i<count($dataDay);$i++){
    echo "
            <tr>
                <td>".$no."</td>
                <td>".$dataDay[$i]."</td>
            <tr>
    ";
    $no++;
};
?>

    </table>
<!--        mengimplementasikan user interface-->
        <h3> Cari Nama Hari Berdasarkan Nomor urut </h3>
        <form action="index.php" method="POST">
            <input type="text" name="input_number"/>
            <input type="submit"/>
        </form>

    </body>
    </html>

    <?php

//mengimplementasikan algoritma pemrograman
  if (isset( $_POST['input_number'])) {
      $inputNumber = $_POST['input_number'];
    //mengimplementasikan program terstuktur percabangan menggunakan IF statement
      if ($inputNumber == 1) {
          echo "Hari " . $dataDay[0];
      } else if ($inputNumber == 2) {
          echo "Hari " . $dataDay[1];
      } else if ($inputNumber == 3) {
          echo "Hari " . $dataDay[2];
      } else if ($inputNumber == 4) {
          echo "Hari " . $dataDay[3];
      }else if ($inputNumber == 5) {
          echo "Hari " . $dataDay[4];
      }else if ($inputNumber == 6) {
          echo "Hari " . $dataDay[5];
      }else if ($inputNumber == 7) {
          echo "Hari " . $dataDay[6];
      }
      else{
          echo "angka yang anda inputkan salah";
      }
  }
    ?>

