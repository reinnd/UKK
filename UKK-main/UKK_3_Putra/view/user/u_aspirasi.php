<?php
    include_once "../../controller/c_aspirasi.php";
    //head
    include("u_header.php");
?>
    <title>Dashboard</title>
</head>
<body>
    <!-- header & navigation -->
<?php
    include("u_navbar.php");
?>
<!-- main start here -->
            <section class="container ">
                <table>
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Dari</th>
                          <th>Tentang</th>
                          <th>Waktu Upload</th>
                          <th>status</th>
                          <th>balasan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            foreach ($data as $result){
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td ><?= $result->username ?></td>
                                <td ><?= $result->judul ?></td>
                                <td ><?= $result->waktu_upload ?></td>
                                <td ><?= $result->status ?></td>
                                <td ><?= $result->isi_feedback ?></td>
                            </tr>
                        <?php 
                            }
                        ?>
                    </tbody>
                </table>
            </section>
<!-- footer & closing -->
<?php
    include("u_footer.php");
?>