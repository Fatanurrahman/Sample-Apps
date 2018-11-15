<?php include("../Template/header.php");
include ("../Template/navbar.php"); ?>
<link rel="stylesheet" href="style.css">

<body background="../User/Bg img 2.jpg">
    <div class="row " style="margin-top:100px">
        <div class="col-2">
        </div>
        <div class="col-8">
        <div class="card text-center" style="margin-bottom:100px">
            <div class=" card-header bg-info" >
                <h5 style="margin-bottom:-0px" class="text-white" > Invoice </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">    
                        <div class="card" style="margin-bottom:20px ">
                            <div class="card-body" style="padding:10px">
                                <h5 class="card-title text-info"> Nama </h5>
                                Muhammad Fata Nurrahman
                            </div>
                        </div>
                        <div class="card" style="margin-bottom:20px">
                            <div class="card-body" style="padding:10px">
                                <h5 class="card-title text-info"> Email </h5>
                                fata.nurrahman@gmail.com
                            </div>
                        </div>
                        <div class="card" style="margin-bottom:20px">
                            <div class="card-body" style="padding:10px">
                                <h5 class="card-title text-info"> No Telepon </h5>
                                6281313309235
                            </div>
                        </div>
                    </div>
                    <div class="col">    
                        <div class="card" style="margin-bottom:20px">
                            <div class="card-body" style="padding:10px">
                                <h5 class="card-title text-info"> Tanggal Keberangkatan/Kedatangan </h5>
                                Senin, 21 November 2018 (13.00 - 17.00)
                            </div>
                        </div>
                        <div class="card" style="margin-bottom:50px">
                            <div class="card-body" style="padding:10px">
                                <h5 class="card-title text-info"> Rute </h5>
                                Jakarta - Bandung
                            </div>
                        </div>  
                    </div>
                </div>
                <div style="margin:20px 0px 50px 0px">
                    <h3 > Harga </h3>
                    <h4 class="display-4 text-info"> Rp 450.000 </h4>
                    <p> ( 3 tiket ) </p>
                </div>
                <div style="margin-bottom:75px">
                    <h3> Kode Pembayaran </h3>
                    <h4 class="display-4 text-info"> < Kode Pembayaran > </h4>
                </div>
                <h5 style="margin-bottom:40px"> Harap melakukan pembayaran sebelum pukul <strong class="text-danger"> 13:05 21/11/2018 </strong> </h5>
            </div>
            <div class="row" style="margin-bottom:50px">
                <div class="col">
                    <h5> Rekening BNI :</h5>
                    <h4 class="text-info"> 3471032610980001 </h4>
                    <p> A/N Condro Travel Keren Banget Parah </p>
                </div>
                <div class="col">
                    <h5> Rekening Mandiri :</h5>
                    <h4 class="text-info"> 900 00 2429004 2 </h4>
                    <p> A/N Condro Travel Mandiri Banget Parah </p>
                </div>
            </div>
            <h5 > Lalu kirim bukti pembayaran ke email : </h5>
            <h4 class="text-info" style="margin-bottom:50px"> cond_travel@cond.com </h4>
            <button type="button" class="btn btn-info btn-lg" style="margin:0px 100px 50px 100px">Download Invoice</button>
        </div>

        <div class="col-2">
        </div>
    </div>

<?php include("../Template/footer.php");?>