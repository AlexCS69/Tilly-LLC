<?php
session_start();
include("../includes/dbhandler.php");

include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
         <div class="panel-body">
          </div>
          <div class="col-md-14">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title"> Movie List</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter " id="">
                    <thead class=" text-primary">
                        <tr><th>ID</th><th>Username</th><th>Password</th><th>Email</th><th>Privilege Level</th>
                    </tr></thead>
                    <tbody>
                      <?php
                        $result=mysqli_query($conn,"select id,product_name,product_price,product_image,duration from producttb order by product_name)")or die ("Select statement FAILED!");

                        while(list($id,$product_name,$product_price,$product_image,$duration)=mysqli_fetch_array($result))
                        {
                        echo "<tr><td>$id</td><td>$product_name</td><td>$product_price</td><td>$product_image</td><td>$duration</td>

                        </tr>";
                        }
                        ?>
                    </tbody>
                  </table>
                
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <?php
include "footer.php";
?>
