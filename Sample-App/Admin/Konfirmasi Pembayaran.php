<?php include("../Template/header.php");
include ("../Template/Navbar Admin.php"); ?>
<body background="../User/Bg_img.jpg">
<!-- <div img src="../User/Picture 1.png" alt="Landing Page Picture"> -->
    <div class="row " style="margin-top:100px">
        <div class="col-4">
        </div>
        <div class="col-4">
            <div class="card text-center">
                <div class=" card-header bg-info" >
                    <h5 style="margin-bottom:-0px" class="text-white" > Konfirmasi Pembayaran </h5>
                </div>
                <div class="card-body text-left">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Payment Code">
                    </div>
                    <div class="text-right">
                        <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#exampleModalLong"> Ubah Status </button>
                    </div>
                </form>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin mengubah status pembayaran <strong> payment_code </strong> dari <strong> Belum Bayar </strong> ke <strong> Lunas </strong> ? </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                </div>
                </div>
            </div>
        </div>
    </div>
        <div class="col-4">
        </div>
    </div>

<!-- </div> -->
<?php include("../Template/footer.php");?>
