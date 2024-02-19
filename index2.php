<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SEJATI JAYA MOTOR - Jalan Bandang No 41 Makassar</title>
</head>
<body>

  
  <h2>SEJATI JAYA MOTOR</h2>

  <div class="kotak">

    <h3>Data Barang</h3>

    <div>
      <label>Cari</label>
      <br>
      <input type="text" class="cari" name="cari" placeholder="cari nama barang, jenis, atau merek di sini..">
    </div>
    
    <br>

    <table class="tableku">
      <tr>
        <th width="1%">No</th>
        <th>Jenis Barang</th>
        <th>Merek</th>
        <th>Nama Barang</th>
        <th>Stok</th>
        
      </tr>
      <tr>
        <?php 
        include 'koneksi.php';
        $no = 1;
        $barang = mysqli_query($koneksi,"select * from barang");
        while($p = mysqli_fetch_array($barang)){
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $p['kd_jenis'] ?></td>
            <td><?php echo $p['kd_merek'] ?></td>
            <td><?php echo $p['nm_brg'] ?></td>
            <td><?php echo $p['stok'] ?></td>
          </tr>
          <?php
        }
        ?>
      </tr>
    </table>

  </div>


<script type="text/javascript" src="jquery.js"></script>
<script>
  $(document).ready(function(){

    $("body").on("change keyup keydown",".cari",function(){
      var cari = $(this).val();
      var data = "cari="+cari;
      // alert(cari);
      $.ajax({
        method:'POST',
        url:'ajax_cari.php',
        data:data,
        success:function(result){
          // alert(result);
          $(".tableku").html(result);
        }
      })
    })

  });
</script>
</body>
</html>