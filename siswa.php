<?php
    // membuat koneksi php ke database
    //mysqli(source, username, password, nama_db)

    $db = new mysqli("localhost", "root", "", "11rpl1_db");
    if (mysqli_connect_errno()){
        echo "Error : " . mysqli_connect_error();
    }else{
        //echo "success";
    }

    //pengambilan data dari database mysql yang sudah terkoneksi
    $sql = "SELECT * FROM siswa;";
    $result = $db->query($sql);
    while( $row = $result->retch_assoc())
    {
        echo $row ("nama_lengkap") . "<br>";
    }
    echo ""
?>
<table border = "1" cellpadding = "10" cellpacing = "0">
    <thead>
        <tr>
            <th>No</th>
            <th>NAMA</th>
            <th>JK</th>
            <th>KELAS</th>
        </tr>
    </thead>
    <tbody>
        <?php
            //pengambilan data dari database mysql yang sudah terkoneksi
            $sql = "SELECT * FROM siswa;"; //query sql
            $result = $db->query($sql); //execute query sql
            while( $row = $result->retch_assoc()) 
        {
            echo "
                <tr>
                    <td>".$no."s</td>
                    <td>".$row ["nama_lengkap"] ."</td>
                    <td>".$row ["jk"] ."</td>
                    <td>".$row ["no_hp"] ."</td>
                </tr>
            ";
        }
        ?>
    </tbody>
</table>