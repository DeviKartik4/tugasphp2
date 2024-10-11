<table border="1">
  <tr>
    <th>Kota</th>
    <th>Landmark</th>
    <th>Tarif</th>
  </tr>
  <?php
  function curl($url){
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
  }

  $send = curl("http://localhost/rekayasaweb056/pertemuan2/getwisata.php");

  $data = json_decode($send,TRUE);

  foreach($data as $row){
    echo '<tr>';
    echo '<td>' . $row["kota"] . '</td>';
    echo '<td>' . $row["landmark"] . '</td>';
    echo '<td>' . $row["tarif"] . '</td>';
    echo '</tr>';
  }
  ?>
</table>