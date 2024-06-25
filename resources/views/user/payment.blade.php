@extends("layouts.user")

@section("content")
<div class="content-wrapper">

	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Pembayaran UKT/SPP</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
						<li class="breadcrumb-item active">Pembayaran UKT/SPP</li>
					</ol>
				</div>
			</div>
		</div>
	</div>


	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-6 col-lg-3">
					<div class="small-box bg-info">
						<div class="inner">
							<h5>{{ auth()->user()->name }}</h3>
							<p class="m-0">{{ auth()->user()->major }}</p>
							<p class="m-0">{{ auth()->user()->prodi }}</p>
							<p class="m-0">Semester : {{ auth()->user()->semester }}</p>
						</div>
						<a href="{{ route('profile.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>

			<div class="mt-3">
				<table id="payment-table" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Tagihan</th>
							<th>Tanggal Tagihan Pembayaran</th>
							<th>Nominal Tagihan (Rp)</th>
							<th>Kode Transaksi Bank</th>
							<th>Status Pembayaran</th>
						</tr>
					</thead>
					<tbody>
						<!-- data here -->
					</tbody>
					<tfoot>
						<tr>
							<th>No</th>
							<th>Nama Tagihan</th>
							<th>Tanggal Tagihan Pembayaran</th>
							<th>Nominal Tagihan (Rp)</th>
							<th>Kode Transaksi Bank</th>
							<th>Status Pembayaran</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</section>
</div>
@endsection

@section("script")
<script>
	$(function () {
		$("#payment-table").DataTable({
			responsive: true,
			lengthChange: false,
			autoWidth: false,
			buttons: [
				"copy",
				"csv",
				"excel",
				"pdf",
				"print",
				"colvis"
			]
		})
		.buttons()
		.container()
		.appendTo('#payment-table_wrapper .col-md-6:eq(0)');
	});
</script>
@endsection