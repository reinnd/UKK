<?php
    include_once "../../controller/c_aspirasi.php";
    //head
    $active_page = 'dashboard';
    include "u_header.php";
?>
    <title>Dashboard</title>
</head>
<body>
    <!-- header & navigation -->
<?php
    include "u_navbar.php";
?>
<!-- main start here -->
            <section class="container grid grid-template-default">
                <div class="box dash selesai-aspirasi">
                    <p>Selesai</p>
                    <div>0</div>
                </div>
                <div class="box dash diproses-aspirasi">
                    <p>Diproses</p>
                    <div>1</div>
                </div>
                <div class="box dash menunggu-aspirasi">
                    <p>Menunggu</p>
                    <div>1</div>
                </div>
                <div class="box dash total-aspirasi">
                    <p>Total aspirasi saya</p>
                    <div>2</div>
                </div>
            </section>
            <section class="container">
                <h4 style="margin-bottom: 5px;">terbaru</h4>
            <div class="flex ">
                <table class="flex-grow">
                <tr>
                            <th>no</th>
                            <th>nama topik</th>
                            <th>status</th>
                            <th>balasan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>wifi lemot</td>
                            <td><span style="font-weight: 600;">proses</span></td>
                            <td>belum ada balasan</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>kipas rusak</td>
                            <td><span style="font-weight: 600;">menunggu</span></td>
                            <td>belum ada balasan</td>
                        </tr>
                    </tbody>
                </table>
                </div>
                <ul class="pagination">
                    <li><a class="disabled" href="#">&laquo;</a></li>
                    <li><a class="active" href="#">1</a></li>
                    <li><a class="disabled" href="#">&raquo;</a></li>
                </ul>
            </section>
<!-- footer & closing -->
<?php
    include "u_footer.php";
?>