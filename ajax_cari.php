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
		$cari = $_POST['cari'];
		$no = 1;
		$brg = mysqli_query($koneksi,"select * from barang where (kd_jenis like '%$cari%') or (kd_merek like '%$cari%') or (stok like '%$cari%') or nm_brg like '%$cari%'");
		while($p = mysqli_fetch_array($brg)){
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