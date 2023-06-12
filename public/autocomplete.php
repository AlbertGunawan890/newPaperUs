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
else if ($_REQUEST["ctr"] == "AccProcessing1") {
    if (isset($_POST["query"])) {
        $query = "UPDATE processing1 SET status = 1 WHERE id_proses1='".$_POST["query"]."'";
        $result = mysqli_query($connect, $query);
    }
}
else if ($_REQUEST["ctr"] == "DeclineProcessing1") {
    if (isset($_POST["query"])) {
        $query = "UPDATE processing1 SET status = -1 WHERE id_proses1='".$_POST["query"]."'";
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
        $query2 = "SELECT SUM(t.subtotal) as total FROM (
                SELECT 'p1' as p, COUNT(p1.id_penawaran) as subtotal FROM processing1 p1 WHERE p1.id_penawaran = '". $_POST["query"] ."'
                UNION
                    SELECT 'p2' as p, COUNT(p2.id_penawaran) as subtotal FROM processing2 p2 WHERE p2.id_penawaran = '". $_POST["query"] ."'
                UNION
                    SELECT 'p3' as p, COUNT(p3.id_penawaran) as subtotal FROM processing3 p3 WHERE p3.id_penawaran = '". $_POST["query"] ."'
                UNION
                    SELECT 'p4' as p, COUNT(p4.id_penawaran) as subtotal FROM processing4 p4 WHERE p4.id_penawaran = '". $_POST["query"] ."'
                UNION
                    SELECT 'p5' as p, COUNT(p5.id_penawaran) as subtotal FROM processing5 p5 WHERE p5.id_penawaran = '". $_POST["query"] ."'
            ) t";
        $result2 = mysqli_query($connect, $query2);
        if (mysqli_num_rows($result2) > 0) {
            while ($row = mysqli_fetch_array($result2)) {
                $output .= "," . $row["total"];
            }
        }
        // $output .= "," . $result[0];
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
                                <button id="btnAcc'.$ctr.'" type="button" class="btn btn-success"
                                    onclick="btnAcc1('. $row["id_proses1"].');Rule1('.$ctr.');"><i class="fas fa-check"></i></button>
                                <button id="btnDecline'.$ctr.'" type="button" class="btn btn-danger"
                                onclick="btnDecline1('. $row["id_proses1"].');Rule2('.$ctr.');"><i class="fas fa-times"></i></i></button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>';
                $ctr++;
            }
        echo $output;
    }
}
else if ($_REQUEST["ctr"] == "Processing2SPK") {
    if (isset($_POST["query"])) {
        $output = "";
        $arr = [];
        $query = "SELECT * FROM processing2 p2, master_penawaran mp WHERE p2.id_penawaran = '" . $_POST["query"] . "' AND mp.id_penawaran = '" . $_POST["query"] . "'";
        $queryVendor = "SELECT * FROM master_vendor";
        $result = mysqli_query($connect, $query);
        $ctr = 1;
        // if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $output .= '
                    <tr>
                        <td>' . $ctr . '</td>
                        <td><input type="text" class="form-control" placeholder="Pilih proses"
                        value="'.$row["proses"].'" name="proses2['.$row["id_proses2"].']" readonly></td>
                        <td><select data-live-search="true" class=" form-control" id="id_vendor"
                        name="nama_vendor2">
                        <option selected>---Pilih Vendor---</option>';
                        $resultVendor = mysqli_query($connect, $queryVendor);
                        while ($rowVendor = mysqli_fetch_array($resultVendor)){
                            $output .= '<option value="'. $rowVendor["nama_vendor"] .'">'. $rowVendor["nama_vendor"] .'</option>';
                        }
                $output .= '</select></td>
                                    <td><input type="number" class="form-control" placeholder="Jumlah"
                                    name="jumlah2['. $row["id_proses2"] .']"
                                    onchange="harga_total_change2('.$row["id_proses2"].')">
                            </td>
                            <td><input type="number" class="form-control" placeholder="Harga satuan"
                                    name="harga_satuan2['. $row["id_proses2"].']"
                                    onchange="harga_total_change2('. $row["id_proses2"].')"></td>
                            <td>
                                <input readonly type="number" class="form-control"
                                    name="harga_total2['. $row["id_proses2"].']" value="0">
                            </td>
                            <td><input readonly type="number" class="form-control"
                                    name="harga_satuan_sebelumnya2['. $row["id_proses2"].']" value="0"></td>
                            <td><input readonly type="number" class="form-control"
                                    name="harga_total_sebelumnya2['. $row["id_proses2"].']" value="0"></td>
                            <td>
                            <button id="btnAcc2'.$ctr.'" type="button" class="btn btn-success"
                            onclick="btnAcc2('. $row["id_proses2"].');Rule3('.$ctr.');"><i class="fas fa-check"></i></button>
                        <button id="btnDecline2'.$ctr.'" type="button" class="btn btn-danger"
                        onclick="btnDecline2('. $row["id_proses2"].');Rule4('.$ctr.');"><i class="fas fa-times"></i></i></button>
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
else if ($_REQUEST["ctr"] == "Processing3SPK") {
    if (isset($_POST["query"])) {
        $output = "";
        $arr = [];
        $query = "SELECT * FROM processing3 p3, master_penawaran mp WHERE p3.id_penawaran = '" . $_POST["query"] . "' AND mp.id_penawaran = '" . $_POST["query"] . "'";
        $queryVendor = "SELECT * FROM master_vendor";
        $result = mysqli_query($connect, $query);
        $ctr = 1;
        // if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $output .= '
                    <tr>
                        <td>' . $ctr . '</td>
                        <td><input type="text" class="form-control" placeholder="Pilih proses"
                        value="'.$row["proses"].'" name="proses3['.$row["id_proses3"].']" readonly></td>
                        <td><select data-live-search="true" class=" form-control" id="id_vendor"
                        name="nama_vendor3">
                        <option selected>---Pilih Vendor---</option>';
                        $resultVendor = mysqli_query($connect, $queryVendor);
                        while ($rowVendor = mysqli_fetch_array($resultVendor)){
                            $output .= '<option value="'. $rowVendor["nama_vendor"] .'">'. $rowVendor["nama_vendor"] .'</option>';
                        }
                $output .= '</select></td>
                                    <td><input type="number" class="form-control" placeholder="Jumlah"
                                    name="jumlah3['. $row["id_proses3"] .']"
                                    onchange="harga_total_change3('.$row["id_proses3"].')">
                            </td>
                            <td><input type="number" class="form-control" placeholder="Harga satuan"
                                    name="harga_satuan3['. $row["id_proses3"].']"
                                    onchange="harga_total_change3('. $row["id_proses3"].')"></td>
                            <td>
                                <input readonly type="number" class="form-control"
                                    name="harga_total3['. $row["id_proses3"].']" value="0">
                            </td>
                            <td><input readonly type="number" class="form-control"
                                    name="harga_satuan_sebelumnya3['. $row["id_proses3"].']" value="0"></td>
                            <td><input readonly type="number" class="form-control"
                                    name="harga_total_sebelumnya3['. $row["id_proses3"].']" value="0"></td>
                            <td>
                               <button id="btnAcc3'.$ctr.'" type="button" class="btn btn-success"
                                    onclick="btnAcc3('. $row["id_proses3"].');Rule5('.$ctr.');"><i class="fas fa-check"></i></button>
                                <button id="btnDecline3'.$ctr.'" type="button" class="btn btn-danger"
                                onclick="btnDecline3('. $row["id_proses3"].');Rule6('.$ctr.');"><i class="fas fa-times"></i></i></button>
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
else if ($_REQUEST["ctr"] == "Processing4SPK") {
    if (isset($_POST["query"])) {
        $output = "";
        $arr = [];
        $query = "SELECT * FROM processing4 p4, master_penawaran mp WHERE p4.id_penawaran = '" . $_POST["query"] . "' AND mp.id_penawaran = '" . $_POST["query"] . "'";
        $queryVendor = "SELECT * FROM master_vendor";
        $result = mysqli_query($connect, $query);
        $ctr = 1;
        // if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $output .= '
                    <tr>
                        <td>' . $ctr . '</td>
                        <td><input type="text" class="form-control" placeholder="Pilih proses"
                        value="'.$row["proses"].'" name="proses4['.$row["id_proses4"].']" readonly></td>
                        <td><select data-live-search="true" class=" form-control" id="id_vendor"
                        name="nama_vendor4">
                        <option selected>---Pilih Vendor---</option>';
                        $resultVendor = mysqli_query($connect, $queryVendor);
                        while ($rowVendor = mysqli_fetch_array($resultVendor)){
                            $output .= '<option value="'. $rowVendor["nama_vendor"] .'">'. $rowVendor["nama_vendor"] .'</option>';
                        }
                $output .= '</select></td>
                                    <td><input type="number" class="form-control" placeholder="Jumlah"
                                    name="jumlah4['. $row["id_proses4"] .']"
                                    onchange="harga_total_change4('.$row["id_proses4"].')">
                            </td>
                            <td><input type="number" class="form-control" placeholder="Harga satuan"
                                    name="harga_satuan4['. $row["id_proses4"].']"
                                    onchange="harga_total_change4('. $row["id_proses4"].')"></td>
                            <td>
                                <input readonly type="number" class="form-control"
                                    name="harga_total4['. $row["id_proses4"].']" value="0">
                            </td>
                            <td><input readonly type="number" class="form-control"
                                    name="harga_satuan_sebelumnya4['. $row["id_proses4"].']" value="0"></td>
                            <td><input readonly type="number" class="form-control"
                                    name="harga_total_sebelumnya4['. $row["id_proses4"].']" value="0"></td>
                            <td>
                            <button id="btnAcc4'.$ctr.'" type="button" class="btn btn-success"
                            onclick="btnAcc4('. $row["id_proses4"].');Rule7('.$ctr.');"><i class="fas fa-check"></i></button>
                        <button id="btnDecline4'.$ctr.'" type="button" class="btn btn-danger"
                        onclick="btnDecline4('. $row["id_proses4"].');Rule8('.$ctr.');"><i class="fas fa-times"></i></i></button>
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
else if ($_REQUEST["ctr"] == "Processing5SPK") {
    if (isset($_POST["query"])) {
        $output = "";
        $arr = [];
        $query = "SELECT * FROM processing5 p5, master_penawaran mp WHERE p5.id_penawaran = '" . $_POST["query"] . "' AND mp.id_penawaran = '" . $_POST["query"] . "'";
        $queryVendor = "SELECT * FROM master_vendor";
        $result = mysqli_query($connect, $query);
        $ctr = 1;
        // if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $output .= '
                    <tr>
                        <td>' . $ctr . '</td>
                        <td><input type="text" class="form-control" placeholder="Pilih proses"
                        value="'.$row["proses"].'" name="proses5['.$row["id_proses5"].']" readonly></td>
                        <td><select data-live-search="true" class=" form-control" id="id_vendor"
                        name="nama_vendor5">
                        <option selected>---Pilih Vendor---</option>';
                        $resultVendor = mysqli_query($connect, $queryVendor);
                        while ($rowVendor = mysqli_fetch_array($resultVendor)){
                            $output .= '<option value="'. $rowVendor["nama_vendor"] .'">'. $rowVendor["nama_vendor"] .'</option>';
                        }
                $output .= '</select></td>
                                    <td><input type="number" class="form-control" placeholder="Jumlah"
                                    name="jumlah5['. $row["id_proses5"] .']"
                                    onchange="harga_total_change5('.$row["id_proses5"].')">
                            </td>
                            <td><input type="number" class="form-control" placeholder="Harga satuan"
                                    name="harga_satuan5['. $row["id_proses5"].']"
                                    onchange="harga_total_change5('. $row["id_proses5"].')"></td>
                            <td>
                                <input readonly type="number" class="form-control"
                                    name="harga_total5['. $row["id_proses5"].']" value="0">
                            </td>
                            <td><input readonly type="number" class="form-control"
                                    name="harga_satuan_sebelumnya5['. $row["id_proses5"].']" value="0"></td>
                            <td><input readonly type="number" class="form-control"
                                    name="harga_total_sebelumnya5['. $row["id_proses5"].']" value="0"></td>
                            <td>
                            <button id="btnAcc5'.$ctr.'" type="button" class="btn btn-success"
                            onclick="btnAcc5('. $row["id_proses5"].');Rule9('.$ctr.');"><i class="fas fa-check"></i></button>
                        <button id="btnDecline5'.$ctr.'" type="button" class="btn btn-danger"
                        onclick="btnDecline5('. $row["id_proses5"].');Rule10('.$ctr.');"><i class="fas fa-times"></i></i></button>
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
