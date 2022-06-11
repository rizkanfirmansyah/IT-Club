 @extends('templates.home')
@section('navbar')
@include('include.home.navbar_biru')
@endsection
@section('main')

<div class="container">
          <div class="tentang mt-5 pt-5 mb-5 pb-5">
                <div class="row">
                    <div class="col col-sm-6 col-md-6 img-1 text-center">
                        <img src="{{asset('home_page/img/img_tentang_2.png')}}" class="img-tentang">
                    </div>

                    <div class="col col-sm-6">
                        <div class="judul-tentang">
                            <h2>Tentang Kami<span><img  src="{{asset('home_page//img/icon_titik.png')}}" class="mx-3 mb-1 w-2"></span></h2>
                            <h2><b>Kami Ekstrakurikuler IT Club</b></h2>
                        </div>
                        <p class="deskripsi-tentang">
                            IT Club adalah salah satu Ekstrakurikuler yang ada di SMK Negeri 5 Bandung yang bergerak di bidang Information Technology atau teknologi informasi. Sebagai Ekstrakurikuler artinya IT Club adalah tempat atau wadah untuk mengembangkan kepribadian, bakat dan kemampuan anggotanya dalam “Teknologi Informasi”. IT Club memiliki sebuah Visi untuk bisa menjadi Ekstrakurikuler yang bermutu dan diakui oleh ekskul lainnya, sedangkan misi kami adalah menghasilkan jasa dan produk yang bermanfaat, membuat produk yang berguna,menyampaikan dan berbagi ilmu dengan yang lainnya.
                            <br><br>
                            Pengembangan kemampuan di IT Club itu sendiri dibagi kedalam beberapa bagian, ada Multimedia, Programming dan Networking. Untuk mengembangkan skill dan pengalaman anggotanya maka IT Club mengikuti perlombaan-perlombaan mulai dari tingkat Kota, Provinsi bahkan sampai tingkat Nasional, Alhamdulillah kita juga mampu meraih beberapa perlombaan yang tentunya bisa kita banggakan. Lulusan dari ekskul IT Club juga keren-keren loh, karena nanti pada saat kalian lulus akan disalurkan atau diarahkan sesuai dengan tujuan kalian apakah mau bekerja atau kuliah, jika tujuan kalian bekerja maka akan disalurkan keperusahaan yang tentunya berhubungan dengan IT, jika tujuan kalian berkuliah maka akan diberikan beasiswa di Univesitas yang telah bekerjasama dengan Jurusan TKJ. 
                            <br>
                            So people with the spirit of learning kita tunggu kalian di Ekstrakurikuler IT Club.

                        </p>

                        <div class="divisi-item">
                            <div class="row text-center divisi-tentang">

                                 @foreach($divisions as $division) 
                                <div class="col col-sm-3 item-1">
                                    <img src="{{$division->image()}}">
                                    <h5 class="mt-3 mb-0">{{$division->name}}</h5>
                                    <a href="{{route('division', $division->slug)}}" class="text-black-50">Baca Selengkapnya</a>
                                </div>
                               @endforeach
                            </div>
                        </div>
                    </div>
                </div>
          </div>
      </div>

@endsection

@section('footer')
@include('include.home.footer_putih')
@endsection