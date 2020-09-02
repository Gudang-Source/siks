<?php $this->load->view("template/head", $head); ?>
<?php $this->load->view("template/topbar"); ?>
<?php $this->load->view("template/sidebar"); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark"><?php echo $title; ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active"><?php echo $title; ?></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <!-- container fluid -->
        <div class="container-fluid">

        <table class="table-sm">
    	    <tr><td>Tgl</td><td><?php echo date_format(date_create($tgl), "d-m-Y"); ?></td></tr>
    	    <tr><td>Nobuk</td><td><?php echo $nobuk; ?></td></tr>
    	    <tr><td>Keterangan</td><td><?php echo $keterangan; ?></td></tr>
    	    <tr><td>Jumlah</td><td><?php echo number_format($jumlah); ?></td></tr>
    	    <tr><td></td><td><a href="<?php echo site_url('t102_pengeluaran') ?>" class="btn btn-default">Cancel</a></td></tr>
        </table>

        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php $this->load->view("template/foot"); ?>
    <?php $this->load->view("template/js"); ?>
