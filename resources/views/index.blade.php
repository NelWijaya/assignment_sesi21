@extends('partials.master')

@section('content')
<div class="row">
  <div class="col-12">
      <img src="{{ asset('img/jumbo.jpg') }}" class="img-fluid jumbo" alt="jumbo">
  </div>
</div>

<div class="row pt-4">
  <div class="col-12 text-center">
      <h3>Kategori Produk</h3>
  </div>
</div>

<div class="row">
  <div class="col-12 col-md-4">
      <div class="card">
          <img src="{{ asset('img/img1.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <a class="card-text" href="#">Kategori Pertama</a>
          </div>
      </div>
  </div>

  <div class="col-12 col-md-4">
      <div class="card">
          <img src="{{ asset('img/img1.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <a class="card-text" href="#">Kategori Kedua</a>
          </div>
      </div>
  </div>

  <div class="col-12 col-md-4">
      <div class="card">
          <img src="{{ asset('img/img1.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <a class="card-text" href="#">Kategori Ketiga</a>
          </div>
      </div>
  </div>
</div>

<div class="row pt-4">
  <div class="col-12 text-center">
      <h3>Promo</h3>
  </div>
</div>

<div class="row">
  <div class="col-12 col-md-4">
      <div class="card">
          <img src="{{ asset('img/img2.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <a class="card-text" href="#">Produk Pertama</a>
            <p class="text-end">
              <span>Rp. 15.000,00</span>
              <br>
              Rp. 10.000,00
            </p>
          </div>
      </div>
  </div>

  <div class="col-12 col-md-4">
      <div class="card">
          <img src="{{ asset('img/img2.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <a class="card-text" href="#">Produk Kedua</a>
            <p class="text-end">
              <span>Rp. 15.000,00</span>
              <br>
              Rp. 10.000,00
            </p>
          </div>
      </div>
  </div>

  <div class="col-12 col-md-4">
      <div class="card">
          <img src="{{ asset('img/img2.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <a class="card-text" href="#">Produk Ketiga</a>
            <p class="text-end">
              <span>Rp. 15.000,00</span>
              <br>
              Rp. 10.000,00
            </p>
          </div>
      </div>
  </div>
</div>

<div class="row pt-4">
  <div class="col-12 text-center">
      <h3>Terbaru</h3>
  </div>
</div>
<div class="row">
  <div class="col-12 col-md-4">
      <div class="card">
          <img src="{{ asset('img/jumbo.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <a class="card-text" href="#">Produk Pertama</a>
            <p class="text-end">
              Rp. 10.000,00
            </p>
          </div>
      </div>
  </div>

  <div class="col-12 col-md-4">
      <div class="card">
          <img src="{{ asset('img/jumbo.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <a class="card-text" href="#">Produk Kedua</a>
            <p class="text-end">
              Rp. 10.000,00
            </p>
          </div>
      </div>
  </div>

  <div class="col-12 col-md-4">
      <div class="card">
          <img src="{{ asset('img/jumbo.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <a class="card-text" href="#">Produk Ketiga</a>
            <p class="text-end">
              Rp. 10.000,00
            </p>
          </div>
      </div>
  </div>
</div>

<hr>

<div class="row pt-4">
  <div class="col-12 text-center">
      <h3>Toko Online Menggunakan Laravel</h3>
  </div>
</div>

<div class="row">
  <div class="col-12">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia sed mi non pretium. Aenean sollicitudin lectus ut nunc feugiat sodales. Sed aliquet malesuada nibh. Vestibulum scelerisque urna nec lacus pulvinar, sit amet pretium velit vulputate. Etiam tempor molestie purus, vitae lobortis lectus vulputate vel. Sed imperdiet elit et maximus efficitur. Curabitur et eros rutrum, molestie quam vitae, dictum risus. Nulla ornare, eros quis lobortis molestie, diam justo interdum sapien, a hendrerit purus nibh in ex. Nulla at ipsum sollicitudin, molestie sem nec, convallis lorem. Nulla aliquet pretium sem at pellentesque. Aenean in dignissim arcu. Vivamus id enim semper, venenatis eros in, commodo leo. Etiam vehicula rhoncus tempus. Nunc dapibus felis ut metus accumsan, id ornare leo maximus.</p>

      <p>Duis eget metus at odio egestas sollicitudin. Fusce auctor auctor erat, vitae elementum risus eleifend convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam ornare egestas odio vel efficitur. Praesent ultrices accumsan mollis. Curabitur efficitur malesuada felis sit amet fermentum. Ut scelerisque tellus ut ligula aliquam, ac cursus neque semper. Donec tincidunt nec augue scelerisque placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus orci at augue commodo, ut commodo enim placerat. Nullam eget eros vel arcu convallis rhoncus.</p>
  </div>
</div>

<div class="row">
  <div class="col-12 text-center">
      <button class="btn btn-outline-secondary">
          Baca Selengkapnya
      </button>
  </div>
</div>
@endsection