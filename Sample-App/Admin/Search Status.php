<?php include("../Template/header.php");
include ("../Template/Navbar Admin.php"); ?>
<body background="../User/Bg_img.jpg">
<div class="row " style="margin-top:100px">
    <div class="col-4">
    </div>
    <div class="col-4">
    <div class="card text-center">
        <div class=" card-header bg-info" >
            <h5 style="margin-bottom:-0px" class="text-white" > Cari Pemesanan </h5>
        </div>
        <div class="card-body text-left">
            <form>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Status</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Lunas</option>
                        <option>Belum Bayar</option>
                    </select>
                </div>
                <div class="text-right">
                    <a class="btn btn-info" href="List Status.php" role="button"> Cari </a>
                </div>
            </form>
        </div>
    </div>
</div>
    <div class="col-4">
    </div>
</div>
<?php include("../Template/footer.php");?>