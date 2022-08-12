
<?php 
$db = new PDO("mysql:host=localhost;dbname=sekolah3", 'root', '');
$query = $db->query('select * from siswa');
?>
<button >
    <a href="tambah.php">
        Tambah
    </a>
</button>
<?php
while($data = $query->fetch() ):?>
<p>
    <a href="edit.php?id=<?= $data['id']; ?>">
    <?= $data['nama'] ?>
</a>
<button>
 <a href="proses_hapus.php?id=<?= $data['id']; ?>" style="color:black;padding: 2px;border-radius:3px">
Hapus
</a>
</button>
</p>
<?php endwhile ?>