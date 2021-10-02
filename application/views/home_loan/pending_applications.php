<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Curent Applications</h1>
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

          <div class="card">
              <div class="card-header">
                <h3 class="card-title">All loan applications</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Load ID</th>
                    <th>Ref ID</th>
                    <th>Name</th>
                    <th>Acc number</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>L00512</td>
                    <td>FO:0087</td>
                    <td>Chethana Dasanayaka</td>
                    <td>0012 4452 4587 1569</td>
                    <td class="text-center">
                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-th"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="<?php echo base_url();?>MainController/home_loans"><i class="fa fa-check-circle-o"></i> Approve</a>
                            <a class="dropdown-item" href="<?php echo base_url();?>MainController/home_loans"><i class="fa fa-times"></i> Reject</a>
                        </div>
                    </td>
                  </tr>
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
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