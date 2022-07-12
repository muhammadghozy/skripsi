@extends("layouts.app")
		
		@section("wrapper")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Jadwal Praktik</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Jadwal Praktik Dokter</li>
							</ol>
						</nav>
					</div>
					{{-- <div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-light">Settings</button>
							<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div> --}}
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-11 mx-auto">
						{{-- <h6 class="mb-0 text-uppercase">Hoverable rows</h6> --}}
						<hr/>
						<div class="card">
							<div class="card-body">
								<table class="table mb-0 table-hover">
									<thead>
										<tr>
											<th scope="col">No</th>
											<th scope="col">Nama</th>
											<th scope="col">Spesialis</th>
											<th scope="col">Hari</th>
											<th scope="col">Jam</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>dr. Rosyid Prasetyo</td>
											<td>Dokter Umum</td>
											<td>Senin</td>
											<td>07:00-18:00</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>dr. Desi Dyan Ratnasari</td>
											<td>Dokter Umum</td>
											<td>Minggu</td>
											<td>07:00-18:00</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>dr. Lia Dwi Nur Fitri Astuti</td>
											<td>Dokter Umum</td>
											<td>Kamis dan Sabtu</td>
											<td>07:00-18:00</td>
										</tr>
										<tr>
											<th scope="row">5</th>
											<td>dr. Siti Wahyuni</td>
											<td>Dokter Umum</td>
											<td>Selasa, Rabu, dan Jumat</td>
											<td>07:00-18:00</td>
										</tr>
										<tr>
											<th scope="row">6</th>
											<td>drg. Rizqa Mahdyna</td>
											<td>Dokter Gigi</td>
											<td>Selasa-Sabtu (Minggu Libur)</td>
											<td>07:00-18:00</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
		<!--end page wrapper -->
		@endsection
	