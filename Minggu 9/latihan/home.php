<?php 
include('crud.php');
$lib = new crud();
$data = $lib->show();

if(isset($_GET['hapus_data']))
{
    $username = $_GET['hapus_data'];
    $status_hapus = $lib->delete($username);
    if($status_hapus)
    {
        header('Location: home.php');
    }
}
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Data</h3>
            </div>
            <div class="card-body">
                <a href="update.php" class="btn btn-success">update</a>
                <hr/>
                <table class="table table-bordered" width="60%" border="1">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Logo</th>
                        <th>Edit</th>
                    </tr>
                    <?php 
                    $no = 1;
                    foreach($data as $row)
                    {
                        echo "<tr>";
                        echo "<td style='text-align: center;'>".$no."</td>";
                        echo "<td style='text-align: center;'>".$row['nama']."</td>";
                        echo "<td style='text-align: center;'>".$row['alamat']."</td>";
                        
                        echo "<td>"."<img src='assets/images/'>".$row['logo']."</td>";
                        echo "<td><a class='btn btn-info' href='update.php?nama=".$row['id']."'>Update</a> <a class='btn btn-danger' href='home.php?hapus_data=".$row['id']."'>Hapus</a></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    </body>
</html>