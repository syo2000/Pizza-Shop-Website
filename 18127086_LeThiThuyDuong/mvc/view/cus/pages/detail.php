</div>

              

          

  <!-- book section -->
  <section class="book_section layout_padding">
    <div class="container">
      <div class="row">
        <div style="margin-left: auto; margin-right: auto;" class="col-lg-12">
        <div class="heading_container">
        <h2>
          Detail Order
        </h2>
        <br>
        <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                    <tr>
                        <th>OrderID</th>
                        <th>CustomerName</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                        
                        <th>RegisterCode</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>  
                    
                        <!-- <tr>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            
                            <td>
                          <div class="d-flex align-items-center">
                            <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                              Edit
                              <i class="typcn typcn-edit btn-icon-append"></i>                          
                            </button>
                            <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                              Delete
                              <i class="typcn typcn-delete-outline btn-icon-append"></i>                          
                            </button>
                          </div>
                        </td>
                           
                        </tr> -->
                        <?php
                        while ($ct = mysqli_fetch_array($data["detail"])) {
                        ?>
                        <tr>
                            <td><?php echo $ct["OrderID"]; ?></td>
                            <td><?php echo $ct["CustomerName"]; ?></td>
                            <td><?php echo $ct["Phone"]; ?></td>
                            <td><?php echo $ct["Address"]; ?></td>
                            <td><?php echo $ct["Quantity"]; ?></td>
                            <td><?php echo $ct["Amount"]; ?></td>
                            <td><?php echo $ct["RegisterCode"]; ?></td>
    
                            <td>
                          <div class="d-flex align-items-center">
                            <a class="btn btn-success btn-sm btn-icon-text mr-3" href="order/edit/<?php echo  $ct["OrderID"]; ?>">
                              Edit
                              <i class="typcn typcn-edit btn-icon-append"></i>                          
                        </a>
                            
                          </div>
                        </td>                          
                        </tr>
                           
                        

                    <?php } ?>
                    
                       
                    </tbody>
                  </table>

        <!-- <div class="input-group">
          <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
          <a href="order/lookup/" type="button" class="btn btn-outline-primary">search</a>
        </div>
        
        

      </div>
      
      <div class="card mb-4 order_online">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Detail Book</h6>
                </div>
                <div class="card-body"> 
               <div>
                <dl class="row">
                    
  <dt class="col-sm-3">Description lists</dt>
  <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

  <dt class="col-sm-3">Term</dt>
  <dd class="col-sm-9">
    <p>Definition for the term.</p>
    <p>And some more placeholder definition text.</p>
  </dd>

  <dt class="col-sm-3">Another term</dt>
  <dd class="col-sm-9">This definition is short, so no extra paragraphs or anything.</dd>

  <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
  <dd class="col-sm-9">This can be useful when space is tight. Adds an ellipsis at the end.</dd> -->

<!--   
</dl> 
<button onclick="window.location.href='detailorder/update'" class="btn btn-primary" type="submit" name="submit">Update</button>
<button class="btn btn-primary" type="submit" name="submit">Delete</button> -->


</div>             
                </div>
                          
          </div>


      
      </div>
    </div>
</div>
  </section>
  <!-- end book section -->
