<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Fill New Application</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
              <li class="breadcrumb-item active">Home Loans</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          
          <!-- /.card-header -->
          <div class="card-body">

          <h5>Personal Details</h5>
          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control">
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Area</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option>Kandy</option>
                    <option>Colombo</option>
                    <option>Baththaramulla</option>
                    <option>Nugegoda</option>
                    <option>Malabe</option>
                    <option>Kottawa</option>
                  </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Mobile Number</label>
				  <input type="text" class="form-control">
                  
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>NIC Number</label>
				   <input type="text" class="form-control">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Reason To apply for the loan</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Reason</option>
                    <option>To build a house</option>
                    <option>To purches a Vehicle</option>
                    <option>To purches a land</option>
                    <option>To start a Business</option>
                    <option>For wedding</option>
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>

            <h5>Other Bank loan Details</h5>
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Bank Name</label>
                  <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <option selected="selected">Loan type</option>
                    <option>Home Loan</option>
                    <option>Personal Loan</option>
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Other Income Details</label>
                  <div class="select2-purple">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                <a href="<?php echo base_url();?>MainController/home_loans">
                    <div class="btn btn-primary">Save</div>
                    </div>
                </a>
            </div>
            
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
         
          </div>
        </div>
        <!-- /.card -->
       
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>