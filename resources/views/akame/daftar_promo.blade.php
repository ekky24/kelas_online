@extends('akame.master')

@section('content')
<section class="breadcrumb-area section-padding-80">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3>Daftar Promo</h3>
                </div>
                <div class="card-body">
                    <form action="/daftar_promo" method="post">
                        {{ csrf_field() }}
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">  
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" name="email" class="form-control" placeholder="Email">  
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="number" name="no_telp" class="form-control" placeholder="No Handphone">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Get Promo" class="btn float-right akame-btn active">
                        </div>
                    </form>
                    @include('includes.error')
                </div>
            </div>
        </div>  
    </section>
@endsection