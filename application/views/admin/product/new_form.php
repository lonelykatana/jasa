<!DOCTYPE html>
<html lang="en">
    <head>
    <?php $this->load->view("admin/_partials/head.php") ?>
    <body class="sb-nav-fixed">
    <?php $this->load->view("admin/_partials/navbar.php") ?>
        <div id="layoutSidenav">
        <?php $this->load->view("admin/_partials/sidebar.php") ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
                        <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
                    
                <!-- DataTables -->
                <div class="card mb-3">
                <div class="card-header">
						<a href="<?php echo site_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">
                        <form action="<?php echo site_url('admin/products/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Name*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" placeholder="Product name" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Price*</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="number" name="price" min="0" placeholder="Product price" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Description*</label>
								<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 name="description" placeholder="Product description..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="price">Kategori*</label>
								<input class="form-control <?php echo form_error('kategori') ? 'is-invalid':'' ?>"
								 type="text" name="kategori" min="0" placeholder="Product category" />
								<div class="invalid-feedback">
									<?php echo form_error('kategori') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>
						
					</div>
				</div>

			</div>
            </main>
                <?php $this->load->view("admin/_partials/footer.php") ?>
        </div>
        </div>
        <?php $this->load->view("admin/_partials/js.php") ?>
    </body>
</html>         

