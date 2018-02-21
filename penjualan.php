<?php include 'index.php'; ?>

	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">

				<div class="col-lg-12">
					<div class="table-container table-navigation">
						<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"
							style="display: flex;">
							<h2 id="invoice-title" style="display: inline-block">Transaksi
								Penjualan</h2>
							<h2 id="partial-title" style="padding-left: 0.5em;"></h2>
						</div>
						
					<div class="card-body">
							<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th class="text-center"><input type="checkbox"
											name="check_all_invoice" id="check_all_invoice" value="1"
											class="disabled hidden"></th>
										<th><a class="sort_header" data-value="nomor_transaksi"
											data-order="" href="#">Nomor</a></th>											
										<th><a class="sort_header" data-value="transaction_date"
											data-order="" href="#">Tanggal</a></th>
										<th><a class="sort_header"
											data-value="customer_id" data-order="" href="#">Customer</a>
										</th>
										<th class="sort_header"><a class="sort_header"
											data-value="kode_produk" data-order="" href="#">Kode Produk</a>
										</th>
										<th><a class="sort_header" data-value="harga"
											data-order="" href="#">Harga</a></th>
										<th><a class="sort_header" data-value="qty" data-order=""
											href="#">Qty</a></th>
										<th><a class="sort_header"
											data-value="total" data-order="" href="#">Total</a>
										</th>
										
									</tr>
								</thead>
				</div>
							</table>
											<div class="col-sm-6 col-md-6">
					<a class="btn btn-primary" href="/invoices/new"> <i
						class="fa fa-plus"></i> Buat Penjualan Baru
					</a>
				</div>
						</div>
					</div>

					</div>

					<nav class="paging-nav invoice-pagination-bar">
					<div class="col-lg-12 navbar-container">
						<div class="row">
							<div class="col-md-6 dataTables_info"></div>
							<!-- di sini di append buat yang kalimat showing 1 .. 25 dari 123123 baris -->
							<div class="col-md-6 dataTables_paginate"></div>
						</div>
					</div>
					</nav>

					<div id="refresh-overlay" style="color: white; display: none;">
						<div class="overlay text-center">
							<svg class="spinner" viewBox="0 0 66 66"
								xmlns="http://www.w3.org/2000/svg"> <circle class="path" cx="33"
								cy="33" fill="none" r="30" stroke-linecap="round"
								stroke-width="6"></circle> </svg>
							<div class="refresh-feed"
								style="margin-top: 50px; font-size: large">Memuat data...</div>
						</div>
						<div class="overlay-background"></div>
					</div>

				</div>
			</div>
		</div>
		<!-- /.container-fluid-->
		<!-- /.content-wrapper-->
		<footer class="sticky-footer">
		<div class="container">
			<div class="text-center">
				<small>Copyright © Your Website 2018</small>
			</div>
		</div>
		</footer>
		<!-- Scroll to Top Button-->
		<a class="scroll-to-top rounded" href="#page-top"> <i
			class="fa fa-angle-up"></i>
		</a>
		<!-- Logout Modal-->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
			aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
						<button class="close" type="button" data-dismiss="modal"
							aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">Select "Logout" below if you are ready to
						end your current session.</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button"
							data-dismiss="modal">Cancel</button>
						<a class="btn btn-primary" href="login.html">Logout</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Bootstrap core JavaScript-->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- Core plugin JavaScript-->
		<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
		<!-- Page level plugin JavaScript-->
		<script src="vendor/chart.js/Chart.min.js"></script>
		<script src="vendor/datatables/jquery.dataTables.js"></script>
		<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
		<!-- Custom scripts for all pages-->
		<script src="js/sb-admin.min.js"></script>
		<!-- Custom scripts for this page-->
		<script src="js/sb-admin-datatables.min.js"></script>
		<script src="js/sb-admin-charts.min.js"></script>
	</div>
