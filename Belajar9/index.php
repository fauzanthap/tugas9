<?php 
include('koneksi.php');
$data = mysqli_query($koneksi, "SELECT * from data_diri"); 
 ?>

<html>
<head>
<title>Daftar</title>
<style type="text/css">
    body{
        text-align: center;
    }
    .scroll{
      width: 1200px;
      padding: 10px;
      overflow: scroll;
      height: 400px;
    }
</style>
</head>
<body>
    <center>  
    <br>
    <h2>Data Siswa Baru</h2>
    <br>
    <div class="scroll">
    <table class="table" border="1" cellspacing="0" width="150%">
        <tr>
            <th>No.</th>
            <th>Jenis Pendaftarn</th>
            <th>Tanggal Masuk</th>
            <th>NIS</th>
            <th>Nomor Ujian</th>
            <th>Paud</th>
            <th>TK</th>
            <th>SKHUN Lama</th>
            <th>Ijazah Lama</th>
            <th>Hobi</th>
            <th>Cita-cita</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>NISN</th>
            <th>NIK</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
            <th>Berkebutuhan Khusus</th>
            <th>Alamat Jalan</th>
            <th>RT</th>
            <th>RW</th>
            <th>Nama Dusun</th>
            <th>Nama Kelurahan/Desa</th>
            <th>Kecamatan</th>
            <th>Kode Pos</th>
            <th>Tempat Tinggal</th>
            <th>Mode Transportasi</th>
            <th>Nomor HP</th>
            <th>Email Pribadi</th>
            <th>Penerima KPS/PKH/KIP</th>
            <th>No. KPS/PKH/KIP</th>
            <th>Kewarganegaraan</th>
            <th>Negara</th>
        </tr>
        <?php $no=1; ?>
        <?php foreach($data as $row) :?>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $row['jenis_pendaftaran'];?></td>
            <td><?php echo $row['tanggal_masuk_sekolah'];?></td>
            <td><?php echo $row['nis'];?></td>
            <td><?php echo $row['nomer_peserta_ujian'];?></td>
            <td><?php echo $row['pernah_paud'];?></td>
            <td><?php echo $row['pernah_tk'];?></td>
            <td><?php echo $row['skhun'];?></td>
            <td><?php echo $row['ijazah'];?></td>
            <td><?php echo $row['hobi'];?></td>
            <td><?php echo $row['citacita'];?></td>
            <td><?php echo $row['nama'];?></td>
            <td><?php echo $row['jenis_kelamin'];?></td>
            <td><?php echo $row['nisn'];?></td>
            <td><?php echo $row['nik'];?></td>
            <td><?php echo $row['tempat_lahir'];?></td>
            <td><?php echo $row['tanggal_lahir'];?></td>
            <td><?php echo $row['agama'];?></td>
            <td><?php echo $row['berkebutuhan_khusus'];?></td>
            <td><?php echo $row['alamat'];?></td>
            <td><?php echo $row['rt'];?></td>
            <td><?php echo $row['rw'];?></td>
            <td><?php echo $row['dusun'];?></td>
            <td><?php echo $row['desa'];?></td>
            <td><?php echo $row['kecamatan'];?></td>
            <td><?php echo $row['kode_pos'];?></td>
            <td><?php echo $row['tempat_tinggal'];?></td>
            <td><?php echo $row['transportasi'];?></td>
            <td><?php echo $row['hp'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['penerima_kps'];?></td>
            <td><?php echo $row['no_kps'];?></td>
            <td><?php echo $row['kewarganegaraan'];?></td>
            <td><?php echo $row['nama_negara'];?></td>
        </tr>
        <?php $no++ ;?>
        <?php endforeach?>
    </table>
    </div>
    <br>
    <a href="exportexcel.php">Export to Excel</a>
    </center>
</body>
</html>