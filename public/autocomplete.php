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
else if ($_REQUEST["ctr"] == "AccPenawaran") {
    if (isset($_POST["query"])) {
        $query = "UPDATE master_penawaran SET status_penawaran = 1 WHERE id_penawaran='".$_POST["query"]."'";
        $result = mysqli_query($connect, $query);
    }
}
else if ($_REQUEST["ctr"] == "DeclinePenawaran") {
    if (isset($_POST["query"])) {
        $query = "UPDATE master_penawaran SET status_penawaran = -1 WHERE id_penawaran='".$_POST["query"]."'";
        $result = mysqli_query($connect, $query);
    }
}
else if ($_REQUEST["ctr"] == "AccPembayaran") {
    if (isset($_POST["query"])) {
        $query = "UPDATE master_pembayaran SET status_pembayaran = 1 WHERE id_pembayaran='".$_POST["query"]."'";
        $result = mysqli_query($connect, $query);
    }
}
else if ($_REQUEST["ctr"] == "DeclinePembayaran") {
    if (isset($_POST["query"])) {
        $query = "UPDATE master_pembayaran SET status_pembayaran = -1 WHERE id_pembayaran='".$_POST["query"]."'";
        $result = mysqli_query($connect, $query);
    }
}
else if ($_REQUEST["ctr"] == "AccDesain") {
    if (isset($_POST["query"])) {
        $query = "UPDATE master_desain SET status_desain = 1 WHERE id_desain='".$_POST["query"]."'";
        $result = mysqli_query($connect, $query);
    }
}
else if ($_REQUEST["ctr"] == "DeclineDesain") {
    if (isset($_POST["query"])) {
        $query = "UPDATE master_desain SET status_desain = -1 WHERE id_desain='".$_POST["query"]."'";
        $result = mysqli_query($connect, $query);
    }
}
else if ($_REQUEST["ctr"] == "Pembayaran") {
    if (isset($_POST["query"])) {
        $output = "";
        $query = "SELECT * FROM master_penawaran WHERE id_penawaran = '" . $_POST["query"] . "'";
        $result = mysqli_query($connect, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $output=$row["nama_brand"].",".$row["pic"].",".$row["jenis_box"].",".$row["qty"].",".$row["jum_produksi"].",".$row["net"];
            }
        } else {
            $output .= '';
        }
        echo $output;
    }
}
else if ($_REQUEST["ctr"] == "DesainCustomer") {
    if (isset($_POST["query"])) {
        $output = "";
        $query = "SELECT * FROM master_pembayaran WHERE id_penawaran = '" . $_POST["query"] . "'";
        $result = mysqli_query($connect, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $output=$row["pic"].",".$row["jenis_box"];
            }
        } else {
            $output .= '';
        }
        echo $output;
    }
}
else if ($_REQUEST["ctr"] == "PenawaranSPK") {
    if (isset($_POST["query"])) {
        $output = "";
        $query = "SELECT * FROM master_desain md, master_penawaran mp WHERE md.id_penawaran = '" . $_POST["query"] . "' AND mp.id_penawaran = '" . $_POST["query"] . "'";
        $result = mysqli_query($connect, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $output=$row["pic"].",".$row["jenis_box"].",".$row["jum_produksi"].",".$row["link_desain"].",".$row["pisau"].",".$row["plat"];
            }
        } else {
            $output .= '';
        }
        echo $output;
    }
}
