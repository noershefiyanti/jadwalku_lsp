@extends('layouts.main', ['title' => 'About', 'page_heading' => 'About'])

@section('contents')
    <section class="row">
        <x-alert />
        <div class="col card px-3 py-3">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <div class="mb-3 ms-5">
                        <img src="{{ asset('img/fotoabout.png.png') }}" alt="" width="120" height="120">
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <label class="form-label">Aplikasi ini dibuat oleh : </label><br>
                    <div class="col-sm-3 col-md-3 col-lg-3">                        
                        <label class="form-label">Nama </label><br>
                        <label class="form-label">Prodi </label><br>
                        <label class="form-label">Nim </label><br>
                        <label class="form-label">Tanggal</label>                        
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <label class="form-label">: Noer Shefiyanti</label><br>
                        <label class="form-label">: MI</label><br>
                        <label class="form-label">: 2131730031</label><br>
                        <label class="form-label">: 13 November 2023 </label>                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


