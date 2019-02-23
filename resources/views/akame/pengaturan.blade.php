@extends('akame.master')

@section('content')
	
<section class="breadcrumb-area section-padding-80">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3>Pengaturan</h3>
                </div>
                <div class="card-body">
                    <form action="/pengaturan" method="post">
                    	{{ csrf_field() }}
                    	<div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="password" name="password-lama" class="form-control" placeholder="Password Lama">  
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control" placeholder="Password Baru">  
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Konfirmasi Password">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Simpan" class="btn float-right akame-btn active">
                        </div>
                    </form>
                    @include('includes.error')
                </div>
            </div>
        </div>	
	</section>

@endsection