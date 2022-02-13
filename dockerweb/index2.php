<?php
// echo "hello world"; 
$link = mysqli_connect("db","UAS_SA","UAS","Trucorp"); 

if (!$link){
    echo "tidak bisa konek ke MySQL" . PHP_EOL; 
    exit;
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            font-family: sans-serif;
        }

        table, tr, td, th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }

        tr:nth-child(even){
            background-color: rgb(220,220,220);
        }
    </style>
</head>
<body>
    <h1>Trucorp Web 2.0</h1>
    <?php
        $SQLstring = "SELECT * FROM users";
        $QueryResult = $link->query($SQLstring);
    ?>
        <table width='50%'><br>
        <tr><th align='left'>ID</th><th align='left'>Nama</th><th align='left'>Alamat</th><th align='left'>Jabatan</th></tr><br>
        <?php
            while ($row = $QueryResult->fetch_assoc()){
        ?>
                <tr><td><?= $row['ID'] ?></td>
                <td><?= $row['Nama'] ?></td>
                <td><?= $row['Alamat'] ?></td>
                <td><?= $row['Jabatan'] ?></td></tr></br>
        <?php
            }
        ?>
        </table>

</body>
</html>
