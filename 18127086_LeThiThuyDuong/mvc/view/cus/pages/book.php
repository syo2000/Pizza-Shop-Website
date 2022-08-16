
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Book Pizza
                    </h1>
                    <p>
                    Food ordering service, every family's happiness
                    </p>

                  </div>
                </div>
              </div>
            </div>
</div>
      </div>

    </section>

</div>

  <!-- book section -->
  <section class="book_section layout_padding">
    <div class="container">
      <div class="row">
        <div style="margin-left: auto; margin-right: auto;" class="col-lg-6">
        <div class="heading_container">
        <h2>
          Book 
        </h2>
      </div>

          <div class="form_container">
          <form method="POST" >


          <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="CustomerName">CustomerName</label>
                                <input type="text" class="form-control" name="CustomerName" placeholder="Nhập tên khach hang" required >
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="Phone">Phone</label>
                                <input type="text" class="form-control" name="Phone" placeholder="Nhập SDT" required >
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="Address">Address</label>
                                <input type="text" class="form-control" name="Address" placeholder="Nhập dia chi" required >
                            </div>
                        </div>

                        

                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="dob">Quantity</label>
                                <input type="number" name="Quantity" class="form-control" name="" min="1" max="100" required >
                            </div>
                        </div>     
                        
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="Note">Note</label>
                                <input type="text" class="form-control" name="Note" placeholder="Nhập ghi chu" required >
                            </div>
                        </div>
                        
                        
                        
                        <div class="form-group">
                            <label for="Combo">Combo</label>
                            <select class="custom-select nice-select wide" name="ProductID" required>
                            <option value="">Chọn combo</option>
                            
                              <?php while ($row = mysqli_fetch_array($data["combopizza"])) {?>
                                
                                <option value="<?=$row['ProductID']?>"><?= $row['Combo'] ?></option>
                              <?php } ?>

                            </select>
                        <div class="invalid-feedback">Example invalid custom select feedback</div>
                        </div>

                        <button class="btn btn-primary" type="submit" name="submit" >Book</button>

                      </form>  
          </div>
        </div>
      </div>
    </div>



    <!-- Modal -->

  </section>
  <!-- end book section -->
