<?php
    // LOOPING   /  PENGULANGAN
    
    // type 1 = for
        /*
        for ($i=1; $i <= 10; $i++){
            echo $i . "Rifani Permata <br>";
        }
        */
    // type 2 = while
       /* $i = 1;
        while ($i <= 10) {
           echo $i . "Rifani Permata <br>";
           $i++;
        }*/
    // type 3 = foreach
    //conditional / pengkondisian
        /* 
        $angka  = 10;
        if($angka > 10){
            echo "Lebih besar dari 10";
        }else if ($angka == 10){
            echo " Sama dengan 10";
        } else{
            echo " Kurang dari 10";
        }*/
    //Tugasnya : buatkan sebuah array 1 dimensi dan lebih dari 1 dimensi 
    // tampilkan dalam bentuk pengulangan foreach
            //$n = "Nama Bulan <br>";
            //echo $n;
        //array dan foreach
    /*$bulan = array ('Januari', 'Februari', 'Maret', 'April', 'Mei', 'juni', 'juli', 'Augustus', 'september','oktober',
    'november','Desember');
    foreach ($bulan as $index => $nama) {
    echo ($index + 1 ) . '.'// untuk menulis penomoran pada sebuah list
    . $nama . '<br/>';

    $array2 = [
        [`Senin`, `Selasa`, `Rabu`, `Kamis`, `jumat`, `Sabtu`, `Minggu`],
        [`0`, `1`, `2`, `3`, `4`, `5`, `6`]
    ];
    foreach ($araay2 as $arr => $value) {
        echo $arr;
        echo $
    }*/
    /*$nama1 = array ("Gilang", "Nadia", "Kamelia", "Aina", "Rifani"); // versi lama/ prosedur
    $nama2 = ["Gilang", "Nadia", "Kamelia", "Aina", "Rifani"]; // versi terbaru/ objeck

    print_r ($nama1); // menampilkan seluruh string dalam array
    echo "<br />";
    print_r($nama2); 
    echo "<br />";
    echo "Nama saya : " . $nama1 [1];*/

    /*$siswa = [
        "name" => "Rifani",
        "gender" => "Cewe",
        "class" => "XI RPL 1"
    ];

    echo "Name : " . $siswa["name"];
    echo "<br>";
    echo "Gender : " . $siswa["gender"];
    echo "<br>";
    echo "Class : " . $siswa["class"];
    echo "<br>";*/

    $siswa = array(
        array(
            "nama" => "Aina",
            "gender" => "cewe",
            "class" => "XI Rpl 1 "
        ),
        array(
            "nama" => "Kamelia",
            "gender" => "cewe",
            "class" => "XI RPL 1"
        ),
        array(
            "nama" => "Rifani",
            "gender" => "cewe",
            "class" => "XI RPL 1"
        ),
        array(
            "nama" => "davita",
            "gender" => "cewe",
            "class" => "XI RPL 1"
        ),
        array(
            "nama" => "Nadia",
            "gender" => "cewe",
            "class" => "XI RPL 1"
        )
    );
    /*echo $siswa[1] ["nama"];
    echo "<br>";
    echo $siswa[2] ["nama"];*/

    foreach ($siswa as $row) {
        echo "Nama : " . $row["nama"] . "<br>";
        echo "Gender : " . $row["gender"] . "<br>";
        echo "Clsas : " . $row["class"] . "<br>";
        echo "<br>";
    }

?>