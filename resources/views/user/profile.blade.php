@extends("layouts.user")

@section("content")
<div class="content-wrapper">

	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Profil</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
						<li class="breadcrumb-item active">Profil</li>
					</ol>
				</div>
			</div>
		</div>
	</div>


	<section class="content">
		<div class="container-fluid">
			<table class="table">
				<tbody>
					<tr>
						<td>Nama</td>
						<td>{{ auth()->user()->name }}</td>
					</tr>
					<tr>
						<td>NIM</td>
						<td>{{ auth()->user()->nim }}</td>
					</tr>
					<tr>
						<td>TTL</td>
						<td>{{ auth()->user()->ttl }}</td>
					</tr>
					<tr>
						<td>Agama</td>
						<td>{{ auth()->user()->religion }}</td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>{{ auth()->user()->gender }}</td>
					</tr>
					<tr>
						<td>No. Hp</td>
						<td>{{ auth()->user()->phone }}</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>{{ auth()->user()->email }}</td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>{{ auth()->user()->address }}</td>
					</tr>
					<tr>
						<td>Ibu Kandung</td>
						<td>{{ auth()->user()->mother }}</td>
					</tr>
					<tr>
						<td>Jurusan</td>
						<td>{{ auth()->user()->major }}</td>
					</tr>
					<tr>
						<td>Semester</td>
						<td>{{ auth()->user()->semester }}</td>
					</tr>
					<tr>
						<td>Program Studi</td>
						<td>{{ auth()->user()->prodi }}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>
</div>
@endsection