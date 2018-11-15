<?php include("../Template/header.php"); 
include ("../Template/navbar.php");

?>
<link rel="stylesheet" href="style.css">

<body background="../User/Bg_img.jpg" >
<div class="row " style="margin-top:100px">
        <div class="col-4">
        </div>
        <div class="col-4">
            <div class="card text-center">
                <div class=" card-header bg-info" >
                    <h5 style="margin-bottom:-0px" class="text-white" > Jadwal Tiket </h5>
                </div>
                <div class="card-body text-left">
                    <p> Route : Jakarta-Bandung</p>
                    <p style="margin-top:-15px"> Jumlah Tiket : 4 </p>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilih Tanggal</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        </select>
                    </div>
                    <hr style="height:5px">
                    <h5 class="card-title text-info text-center"> Data Pemesan </h5>    
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="No Telepon">
                        </div>
                    </form>  
                    <div class="text-right" style="margin-top:20px">
                        <a class="btn btn-primary" href="Invoice.php" role="button"> Submit </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="col-4">
        </div>
    </div>


<?php include("../Template/footer.php");?>