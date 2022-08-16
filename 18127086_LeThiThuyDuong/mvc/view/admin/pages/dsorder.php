<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Danh sách đơn hàng</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index">Trang chủ</a></li>
              <li class="breadcrumb-item">Đơn hàng</li>
              <li class="breadcrumb-item active" aria-current="page">Danh sách đơn hàng</li>
            </ol>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Danh sách đơn hàng</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                    <tr>
                        <th>OrderID</th>
                        <th>CustomerName</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>CreatedTime</th>
                        <th>ModifiedTime</th>
                        <th>Status</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                        <th>RegisterCode</th>
                        <th>Combo</th>
                        

                        <th>Update</th>
                        
                    </tr>
                    </thead>
                    
                    <tbody>
                    <?php
                        while ($ds = mysqli_fetch_array($data["dsorder"])) {?>
                        <tr>
                            <td><?php echo $ds["OrderID"]; ?></td>
                            <td><?php echo $ds["CustomerName"]; ?></td>
                            <td><?php echo $ds["Phone"]; ?></td>
                            <td><?php echo $ds["Address"]; ?></td>
                            <td><?php echo $ds["CreatedTime"]; ?></td>
                            <td><?php echo $ds["ModifiedTime"]; ?></td>

                            <td><?php echo $ds["Status"]; ?></td>

                            <td><?php echo $ds["Quantity"]; ?></td>
                            <td><?php echo $ds["Amount"]; ?></td>

                            <td><?php echo $ds["RegisterCode"]; ?></td>
                            <td><?php echo $ds["Combo"]; ?></td>
                            

                            <td><a href="order_admin/edit/<?php echo $ds["OrderID"]; ?>" class = "btn btn-primary">Edit</a></td>
                        </tr>
                    <?php } ?> 
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
</div>


        