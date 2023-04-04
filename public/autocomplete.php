<?php
$connect = mysqli_connect("localhost", "root", "", "db_paperus");

if ($_REQUEST["ctr"] == "Penawaran") {
    if (isset($_POST["query"])) {
        $output = "";
        $query = "SELECT * FROM master_penawaran WHERE nama_brand = '" . $_POST["query"] . "'"." ORDER BY ".
        "id_penawaran DESC LIMIT 1";
        $result = mysqli_query($connect, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $output=$row["harga_satuan"].",".$row["net"];
            }
        } else {
            $output .= '';
        }

        echo $output;
    }
}
