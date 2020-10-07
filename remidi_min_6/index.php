<?php
$produk = [
    ["Makanan", "Slai-Olai", 10000,"1.jpg"],
    ["Minuman", "Tah Pucuk", 4500,"2.jpg"],
    ["Makanan", "Kacang Dua Kelinci", 12000,"3.jpg"],
    ["Minuman", "Frestea", 7500,"4.jpg"],
    ["Obat", "Nagatal", 45000,"14.jpg"],
    ["Makanan", "Silver Queen", 21000,"5.jpg"],
    ["Minuman", "Nutri Sari", 9500,"6.jpg"],
    ["Minuman", "mangga", 12500,"7.jpg"],
    ["Makanan", "mie instan", 2500,"8.jpg"],
    ["Minuman", "nutri sari", 8000,"9.jpg"],
    ["Minuman", "sari kurma", 23000,"10.jpg"],
    ["Minuman", "madu tj", 21000,"11.jpg"],
    ["Gandum", "quaker", 30000,"12.jpg"],
    ["Obat", "Omepros", 50000,"13.jpg"]
];

$temp_arr=[];

foreach ($produk as $key) {

   $temp_arr[]=$key[0];
}
$pilihan=array_unique($temp_arr);



$tampil_produk=[];
if(isset($_POST['filter']))
{
    $filter=$_POST['filter'];
    if($filter == "")
    {
        $tampil_produk=$produk;
    }else{
        foreach($produk as $key)
        {
            if($key[0] == $filter){
                $tampil_produk[]=[$key[0],$key[1],$key[2],$key[3]];
            }
        }
    }
}else{
    $tampil_produk=$produk;
}
// var_dump($tampil_merk);

?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body class="bg-secondary">
           
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="d-flex mx-auto">
                        <h2 class="d-flex mx-auto text-light"><i>PRODUK</i></h2>
                    </div>
                    <div class="d-flex mx-auto">
                        <h2 class="d-flex mx-auto text-light"><i>MAKANAN DAN MINUMAN</i></h2>
                    </div>
                    <form action=" " method="post">
                        <select name="filter">
                            <option value="">
                                Tampilkan Semua
                            </option>
                            <?php foreach ($pilihan as $key): ?>
                                <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
                            <?php endforeach; ?>      
                        </select>
                        <input type="submit" value="pilih">
                    </form>
                    <table class="table bg-light">
                        <thead class="bg-dark text-light">
                            <tr>
                            <th scope="col">Gambar</th>
                            <th scope="col">JENIS</th>
                            <th scope="col">PRODUK</th>
                            <th scope="col">HARGA</th>
                            </tr>
                        </thead>
                        <?php $grand_total=0; ?>
                        <?php foreach ($tampil_produk as $key => $value): ?>
                        <tbody>
                            <tr>
                            <td><img src="img/<?php echo $value[3];?>" alt="" width="100px" height="100px"></td>
                            <td><b><?php echo $value[0]; ?></b></td>
                            <td><b><?php echo $value[1]; ?></b></td>
                            <td><b><?php echo $value[2]; ?></b></td>
                            </tr>
                        </tbody>
                        <?php $grand_total+=$value[2]; ?>
                        <?php endforeach; ?>
                        <thead class="thead-light">
                            <tr>
                            <th scope="col">Total Keseluruhan</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"><?php echo $grand_total; ?></th>
                            </tr>
                        </thead>

                    </table>

                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>