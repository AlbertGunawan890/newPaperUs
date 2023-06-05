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
else if ($_REQUEST["ctr"] == "AccPengiriman") {
    if (isset($_POST["query"])) {
        $query = "UPDATE master_pengiriman SET status_pengiriman = 1 WHERE no_spk='".$_POST["query"]."'";
        $result = mysqli_query($connect, $query);
    }
}
else if ($_REQUEST["ctr"] == "DeclinePengiriman") {
    if (isset($_POST["query"])) {
        $query = "UPDATE master_pengiriman SET status_pengiriman = -1 WHERE no_spk='".$_POST["query"]."'";
        $result = mysqli_query($connect, $query);
    }
}
else if ($_REQUEST["ctr"] == "AccPenagihan") {
    if (isset($_POST["query"])) {
        $query = "UPDATE master_penagihan SET status_penagihan = 1 WHERE id_penawaran='".$_POST["query"]."'";
        $result = mysqli_query($connect, $query);
    }
}
else if ($_REQUEST["ctr"] == "DeclinePenagihan") {
    if (isset($_POST["query"])) {
        $query = "UPDATE master_penagihan SET status_penagihan = -1 WHERE id_penawaran='".$_POST["query"]."'";
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
        $query = "SELECT * FROM master_penawaran mpen, master_pembayaran mpem WHERE mpen.id_penawaran = '" . $_POST["query"] . "' AND mpem.id_penawaran = '" . $_POST["query"] . "'";
        $result = mysqli_query($connect, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $output=$row["nama_brand"].",".$row["pic"].",".$row["jenis_box"].",".$row["qty"].",".$row["jum_produksi"].",".$row["net"].",".$row["sisa"];
            }
        } else {
            $query2 = "SELECT * FROM master_penawaran  WHERE id_penawaran = '" . $_POST["query"] . "'";
            $result2 = mysqli_query($connect, $query2);
            while ($row2 = mysqli_fetch_array($result2)) {
                $output=$row2["nama_brand"].",".$row2["pic"].",".$row2["jenis_box"].",".$row2["qty"].",".$row2["jum_produksi"].",".$row2["net"];
            }
        }
        echo $output;
    }
}
else if ($_REQUEST["ctr"] == "Penagihan") {
    if (isset($_POST["query"])) {
        $output = "";
        $query = "SELECT * FROM master_pembayaran WHERE id_penawaran = '" . $_POST["query"] . "'";
        $result = mysqli_query($connect, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $output=$row["pic"].",".$row["jenis_box"].",".$row["qty"].",".$row["harga"].",".$row["pembayaran"].",".$row["sisa"];
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
else if ($_REQUEST["ctr"] == "Processing1SPK") {
    if (isset($_POST["query"])) {
        $output = "";
        $arr = [];
        $query = "SELECT * FROM processing1 p1, master_penawaran mp WHERE p1.id_penawaran = '" . $_POST["query"] . "' AND mp.id_penawaran = '" . $_POST["query"] . "'";
        $queryVendor = "SELECT * FROM master_vendor";
        $result = mysqli_query($connect, $query);
        $ctr = 1;
        // if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $output .= '
                    <tr>
                        <td>' . $ctr . '</td>
                        <td><input type="text" class="form-control" placeholder="Pilih proses"
                        value="'.$row["proses"].'" name="proses['.$row["id_proses1"].']" readonly></td>
                        <td><select data-live-search="true" class=" form-control" id="id_vendor"
                        name="nama_vendor">
                        <option selected>---Pilih Vendor---</option>';
                        $resultVendor = mysqli_query($connect, $queryVendor);
                        while ($rowVendor = mysqli_fetch_array($resultVendor)){
                            $output .= '<option value="'. $rowVendor["nama_vendor"] .'">'. $rowVendor["nama_vendor"] .'</option>';
                        }
                $output .= '</select></td>
                                    <td><input type="number" class="form-control" placeholder="Jumlah"
                                    name="jumlah['. $row["id_proses1"] .']"
                                    onchange="harga_total_change('.$row["id_proses1"].')">
                            </td>
                            <td><input type="number" class="form-control" placeholder="Harga satuan"
                                    name="harga_satuan['. $row["id_proses1"].']"
                                    onchange="harga_total_change('. $row["id_proses1"].')"></td>
                            <td>
                                <input readonly type="number" class="form-control"
                                    name="harga_total['. $row["id_proses1"].']" value="0">
                            </td>
                            <td><input readonly type="number" class="form-control"
                                    name="harga_satuan_sebelumnya['. $row["id_proses1"].']" value="0"></td>
                            <td><input readonly type="number" class="form-control"
                                    name="harga_total_sebelumnya['. $row["id_proses1"].']" value="0"></td>
                            <td>
                                <button type="button" class="btn btn-success"
                                    onclick="btnAcc('. $row["id_proses1"].')"><i class="fas fa-check"></i></button>
                                <button type="button" class="btn btn-danger"><i class="fas fa-times"></i></i></button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                    </tr>
                ';
                $ctr++;
            }
        echo $output;
    }
}
else if ($_REQUEST["ctr"] == "AccSPKProcess1") {
    if (isset($_POST["query"])) {
        $id_proses=$_POST['query'][0];
        $jenis_proses=$_POST['query'][1];
        $nama_vendor=$_POST['query'][2];
        $jumlah=$_POST['query'][3];
        $harga_satuan=$_POST['query'][4];
        $harga_total=$_POST['query'][5];
        $harga_satuan_sebelumnya=$_POST['query'][6];
        $harga_total_sebelumnya=$_POST['query'][7];
        $no_spk=$_POST['query'][8];
        $query =  "INSERT INTO `spk_processing1`(`id`,`id_proses` ,`jenis_proses`,`nama_vendor`, `jumlah`, `harga_satuan`,`harga_total`,`harga_satuan_sebelumnya`, `harga_total_sebelumnya`, `status`,`no_spk`)
        VALUES ('','$id_proses','$jenis_proses','$nama_vendor','$jumlah','$harga_satuan','$harga_total','$harga_satuan_sebelumnya','$harga_total_sebelumnya',1,'$no_spk')";
        $result = mysqli_query($connect, $query);
    }
}
