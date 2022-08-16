
<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Cập nhật trạng thái</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index">Trang chủ</a></li>
              <li class="breadcrumb-item">Đơn hàng</li>
              <li class="breadcrumb-item active" aria-current="page">Cập nhật trạng thái</li>
            </ol>
          </div>
          <div class="row">
            <div style="margin-left: auto; margin-right: auto;" class="col-lg-6">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Cập nhật trạng thái</h6>
                </div>
                <div class="card-body"> 

                    <form method="POST">
                        
                        <div class="form-group">
                            <label>Status</label>
                            <select class="custom-select" name="Status" required>
                              <option value="DAXACNHAN">DAXACNHAN</option>
                              <option value="DANGTIENHANH">DANGTIENHANH</option>
                              <option value="DANGGIAO">DANGGIAO</option>
                              <option value="HOANTAT">HOANTAT</option>
                              <option value="HUY">HUY</option>


                            
                              
                                                        

                            </select>
                        <div class="invalid-feedback">Example invalid custom select feedback</div>
                        </div>

                        <button class="btn btn-primary" type="submit" name="submit">Cập nhật trạng thái</button>
                      </form>                       
                </div>
              </div>
            </div>        
          </div>         
</div>
        