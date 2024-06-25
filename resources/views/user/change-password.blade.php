@extends("layouts.user")

@section("content")
<div class="content-wrapper">

	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Ubah Password</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
						<li class="breadcrumb-item active">Ubah Password</li>
					</ol>
				</div>
			</div>
		</div>
	</div>


	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-6 col-lg-3">
					<div class="form-group">
						<label for="old-password">Password</label>
						<input type="password" class="form-control" id="old-password"/>
					</div>
					<div class="form-group">
						<label for="new-password">New Password</label>
						<input type="password" class="form-control" id="new-password"/>
					</div>
					<div class="form-group">
						<label for="confirm-password">Confirm Password</label>
						<input type="password" class="form-control" id="confirm-password"/>
					</div>
					<button class="btn btn-primary">Simpan</button>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection