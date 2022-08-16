</div>

  <!-- book section -->
  <section class="book_section layout_padding">
    <div class="container">
      <div class="row">
        <div style="margin-left: auto; margin-right: auto;" class="col-lg-6">
        <div class="heading_container">
        <h2>
          Update Book 
        </h2>
      </div>

          <div class="form_container">
          <form method="POST">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label>Customer Name</label>
                                <input type="text" class="form-control" name="CustomerName" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label>Address</label>
                                <input type="text" class="form-control" name="Address" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="Phone" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="dob">Quantity</label>
                                <input type="number" name="Quantity" class="form-control" name="" min="1" max="100" required >
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="clubname">Combo</label>
                            <select class="custom-select nice-select wide" name="" required>
                              <option value="">1</option>
                            

                              

                            </select>
                        <div class="invalid-feedback">Example invalid custom select feedback</div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label>Note</label>
                                <input type="text" class="form-control" name="Note" placeholder="" >
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit" name="submit">Update</button>

                      </form>  
 
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end book section -->
