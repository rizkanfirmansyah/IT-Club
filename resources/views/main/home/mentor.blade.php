@extends('templates.home')
@section('navbar')
@include('include.home.navbar_mentor')
@endsection
@section('main')

 
      <div class="header-materi img-fluid">
        <div class="container">
            <div class="judul-tugas text-center">
                <h1>MENTOR</h1>
                <h3>Berikut Mentor Yang Akan Melatihmu</h3>
            </div>
        </div>
    </div>
    <!-- Header -->

    <!-- Mentor -->

    <section id="mentor">
        <div class="container">
            <div class="row">
              @foreach($mentors as $mentor)

                <div class="col col-sm-4">
                    <div class="card card-mentor mx-auto" style="width: 20rem; border-radius: 4%; margin-top:20px !important;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col col-sm-4 d-flex">
                                    <div class="avatar-mentor">
                                        <img class="rounded-circle border-primary" src="{{$mentor->image()}}" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-8 pl-3 pt-4">
                                        <h5 class="card-title">{{$mentor->name}}</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">{{$mentor->profession}}</h6>
                                    </div>
                            </div>
                            <div class=" bidang-mentor pt-3">
                              @foreach($mentor->divisions as $divisi)
                                <div class="ml-1 mentor2 divisi-{{$divisi->name}}">Mentor {{$divisi->name}}</div>
                              @endforeach
                            </div>
                            <a href="{{route('mentor_detail', $mentor->slug)}}" class="btn btn-primary mt-4">Lihat Profile Mentor</a>
                        </div>
                    </div>
                </div>
               @endforeach
              
            </div>
        </div>
         
    </section>
    
    <div class="d-flex justify-content-center">
         {{$mentors->links()}}
    </div>


    <!-- Mentor -->
@endsection

@section('footer')
@include('include.home.footer_hijau')
@endsection