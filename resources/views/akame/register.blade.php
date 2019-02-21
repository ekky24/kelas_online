@extends('akame.master')

@section('content')
	
<div class="container section-padding-80"">
	<div class="row">
		<!-- Section Heading -->
		<div class="col-12">
			<div class="section-heading text-center">
				<h2>Daftar Sekarang</h2>
				<p>Dapatkan berbagai keuntungan terbaik hanya di Kelas Online!</p>
			</div>
		</div>
	</div>

	<div class="row">
    	<div class="col-12">
        	<!-- Form -->
            <form action="register" method="post" class="akame-contact-form border-0 p-0 form-horizontal">
       			<div class="row">
       				<div class="col-lg-12 text-center">
						<center>
							<input type="text" name="nama" class="form-control mb-30 col-lg-6" placeholder="Nama Lengkap">
						</center>
					</div>
				</div>
				<div class="row">
            		<div class="col-lg-12 text-center">
						 <center>
						 	<input type="text" name="email" class="form-control mb-30 col-lg-6" placeholder="Email">
						 </center>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 text-center">
						<center>
							<input type="email" name="telp" class="form-control mb-30 col-lg-6" placeholder="Nomor Telepon">
						</center>
					</div>
				</div>
				<div class="row">
					<div class="col-12 text-center">
						<center><button type="submit" class="btn akame-btn btn-3 mt-15 active">Daftar Sekarang</button></center>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection