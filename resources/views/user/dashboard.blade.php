@extends("layouts.user")

@section("content")
<div class="content-wrapper">

	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Selamat Datang</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
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
		</div>
	</section>
</div>
@endsection