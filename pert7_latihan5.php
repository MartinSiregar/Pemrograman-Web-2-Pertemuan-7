<html>

<head>
  <title> Penggunaan List </title>
</head>

<body>
  <?php
  $program = array('Bobo', 'Doraemon', 'Spiderman', 'Lord Naki');
  list($Majalah, $Komik, $Film, $director) = $program;
  echo "Jenis Buku & Hiburan :";
  echo "<br />";
  echo "Cerpen : $Majalah";
  echo "<br />";
  echo "Cerita Bergambar : $Komik";
  echo "<br />";
  echo "Bioskop : $Film";
  echo "<br />";
  echo "Director : $director";
  ?>
</body>

</html>