@extends('layouts.home')
@section('title', 'Detail Travel Nomads')
@section('content')
<main>
  <section class="section-details-header"></section>
  <section class="section-details-content">
    <div class="container">
      <div class="row">
        <div class="col p-0">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">Paket Travel</li>
              <li class="breadcrumb-item active">Details</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 p-lg-0">
          <div class="card card-details">
            <h1>Nusa Penida</h1>
            <p>Republic Of Indonesia Raya</p>
            <div class="gallery">
              <div class="xzoom-container">
                <img
                  class="xzoom"
                  id="xzoom-default"
                  src="frontend/images/details-1.jpg"
                  xoriginal="frontend/images/details-1.jpg"
                />
                <div class="xzoom-thumbs">
                  <a href="frontend/images/details-1.jpg"
                    ><img
                      class="xzoom-gallery"
                      width="128"
                      src="frontend/images/details-1.jpg"
                      xpreview="frontend/images/details-1.jpg"
                  /></a>
                  <a href="frontend/images/details-1.jpg"
                    ><img
                      class="xzoom-gallery"
                      width="128"
                      src="frontend/images/details-1.jpg"
                      xpreview="frontend/images/details-1.jpg"
                  /></a>
                  <a href="frontend/images/details-1.jpg"
                    ><img
                      class="xzoom-gallery"
                      width="128"
                      src="frontend/images/details-1.jpg"
                      xpreview="frontend/images/details-1.jpg"
                  /></a>
                  <a href="frontend/images/details-1.jpg"
                    ><img
                      class="xzoom-gallery"
                      width="128"
                      src="frontend/images/details-1.jpg"
                      xpreview="frontend/images/details-1.jpg"
                  /></a>
                  <a href="frontend/images/details-1.jpg"
                    ><img
                      class="xzoom-gallery"
                      width="128"
                      src="frontend/images/details-1.jpg"
                      xpreview="frontend/images/details-1.jpg"
                  /></a>
                </div>
              </div>
            </div>
            <h2>Tentang Wisata</h2>
            <p>Nusa Penida adalah sebuah pulau (=nusa) bagian dari negara Republik Indonesia yang terletak di sebelah tenggara Bali yang dipisahkan oleh Selat Badung. Di dekat pulau ini terdapat juga pulau-pulau kecil lainnya yaitu Nusa Ceningan dan Nusa Lembongan.</p>
            <p>Perairan pulau Nusa Penida terkenal dengan kawasan selamnya di antaranya terdapat di Crystal Bay, Manta Point, Batu Meling, Batu Lumbung, Batu Abah, Toyapakeh dan Malibu Point.</p>
            <div class="features row">
              <div class="col-md-4">
                <img src="frontend/images/ic_event.png" alt="Features Event" class="features-image">
                <div class="description">
                  <h3>Featured Event</h3>
                  <p>Tari Kecak</p>
                </div>
              </div>
              <div class="col-md-4 border-left">
                <img src="frontend/images/ic_bahasa.png" alt="Features Language" class="features-image">
                <div class="description">
                  <h3>Language</h3>
                  <p>Bahasa Indonesia</p>
                </div>
              </div>
              <div class="col-md-4 border-left">
                <img src="frontend/images/ic_foods.png" alt="Features Foods" class="features-image">
                <div class="description">
                  <h3>Foods</h3>
                  <p>Local Foods</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card card-details card-right">
            <h2>Members are going</h2>
            <div class="members-my-2">
              <img src="{{ url('./frontend/images/members.png') }}" class="member-image">
            </div>
            <hr>
            <h2>Trip Information</h2>
            <table class="trip-information">
              <tr>
                <th width="50%">Date Of Departure</th>
                <td width="50%" class="text-right">22 Aug, 2019</td>
              </tr>
              <tr>
                <th width="50%">Duration</th>
                <td width="50%" class="text-right">4D 3N</td>
              </tr>
              <tr>
                <th width="50%">Type</th>
                <td width="50%" class="text-right">Open Trip</td>
              </tr>
              <tr>
                <th width="50%">Price</th>
                <td width="50%" class="text-right">$80,00 / person</td>
              </tr>
            </table>
          </div>
          <div class="join-container">
            <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now mt-3 py-2">Join Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection