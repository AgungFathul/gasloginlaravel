<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GASLogin - Tournament</title>
    <link
      rel="shortcut icon"
      href="./assets/images/fav.png"
      type="image/svg+xml"
    />
    <link rel="stylesheet" href="{{asset('assets/css/style_tournament.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <script src="{{asset('assets/js/script_tournament.js')}}"></script>
    <script src="{{asset('assets/js/script_tournament.js')}}"></script>
  </head>
  <body>
    @extends('spatial.navbar')
    <main>
      <!-- Homepage -->
      <section class="homepage" id="home">
        <div class="content">
          <div class="text">
            <h1>Join the Champion's Arena</h1>
            <p>
              Platform terdepan untuk turnamen game yang menghubungkan pemain dari seluruh dunia. <br />
              Daftarkan timmu, ikuti pertandingan, dan rebutlah tahta juara!
            </p>
          </div>
          <a href="Create_Tournament.html">Create Tournament</a>
        </div>
      </section>

      <!-- Tournament -->
      <section class="list_tournament">
        <div class="text_tournament">
          <h2>Turnamen Game</h2>
        </div>
        <section class="list_tournament">

          <!-- Carousel Section -->
          <div class="carousel">
            <div class="carousel-images">
              <div class="carousel-image">
                <img src="./assets/images/ml.jpg" alt="1" />
                <div class="image-title">Mobile Legends</div>
              </div>
              <div class="carousel-image">
                <img src="./assets/images/pubg.jpg" alt="2" />
                <div class="image-title">PUBG</div>
              </div>
              <div class="carousel-image">
                <img src="./assets/images/valo.jpg" alt="3" />
                <div class="image-title">Valorant</div>
              </div>
              <div class="carousel-image">
                <img src="./assets/images/freefire.jpg" alt="4" />
                <div class="image-title">Free Fire</div>
              </div>
              <div class="carousel-image">
                <img src="./assets/images/efootball.webp" alt="5" />
                <div class="image-title">eFootball</div>
              </div>
              <div class="carousel-image">
                <img src="./assets/images/lol_wr.png" alt="6" />
                <div class="image-title">LOL: Wild Rift</div>
              </div>
              <div class="carousel-image">
                <img src="./assets/images/eafc.jpg" alt="7" />
                <div class="image-title">EA FC</div>
              </div>
            </div>
            <button class="prev" aria-label="Previous">&#10094;</button>
            <button class="next" aria-label="Next">&#10095;</button>
          </div>
        </section>
      </section>

      <!-- Event -->
      <div class="filter-section">
        <select id="eventFilter" class="event-dropdown">
            <option value="all">Semua</option>
            <option value="upcoming">Mendatang</option>
            <option value="ongoing">Berlangsung</option>
            <option value="completed">Selesai</option>
        </select>
    </div>
    

        <!-- Card Event -->
        <div class="card-container">
          
          <a href="detail_tour.html">
            <div class="card" data-status="completed">
              <div class="card-header">
                <img src="./assets/images/ml.jpg" alt="Completed Event" />
                <span class="status status-completed">Selesai</span>
              </div>
              <div class="card-body">
                <h3 class="tournament-name">MLBB ALLSTARS CIBIRU</h3>
                <p class="tournament-detail">4 April 2024 - 30 April 2024</p>
              </div>
            </div>
          </a>

          <a href="detail_tour_valo.html">
            <div class="card" data-status="upcoming">
              <div class="card-header">
                <img src="./assets/images/eafc.jpg" alt="Upcoming Event" />
                <span class="status status-upcoming">Mendatang</span>
              </div>
              <div class="card-body">
                <h3 class="tournament-name">Spring Tournament</h3>
                <p class="tournament-detail">Mulai: 15 Mei 2024</p>
              </div>
            </div>
          </a>

          <a href="detail_tour_valo.html">
            <div class="card" data-status="upcoming">
              <div class="card-header">
                <img src="./assets/images/efootball.webp" alt="Upcoming Event" />
                <span class="status status-upcoming">Mendatang</span>
              </div>
              <div class="card-body">
                <h3 class="tournament-name">Event Name Here</h3>
                <p class="tournament-detail">Starts: Date Here</p>
              </div>
            </div>
          </a>

          <a href="detail_tour_valo.html">
            <div class="card" data-status="upcoming">
              <div class="card-header">
                <img src="./assets/images/valo.jpg" alt="Upcoming Event" />
                <span class="status status-upcoming">Mendatang</span>
              </div>
              <div class="card-body">
                <h3 class="tournament-name">Turnamen Valorant - Meister Weekly 2024 Series 4</h3>
                <p class="tournament-detail">Starts: 19 April 2024</p>
              </div>
            </div>
          </a>

          <a href="detail_tour.html">
            <div class="card" data-status="ongoing">
              <div class="card-header">
                <img src="./assets/images/eafc.jpg" alt="Ongoing Event" />
                <span class="status status-ongoing">Berlangsung</span>
              </div>
              <div class="card-body">
                <h3 class="tournament-name">Summer eSports League</h3>
                <p class="tournament-detail">1 Juni - 30 Juni 2024</p>
              </div>
            </div>
          </a>

          <a href="detail_tour.html">
            <div class="card" data-status="ongoing">
              <div class="card-header">
                <img src="./assets/images/ml.jpg" alt="Ongoing Event" />
                <span class="status status-ongoing">Berlangsung</span>
              </div>
              <div class="card-body">
                <h3 class="tournament-name">Summer eSports League</h3>
                <p class="tournament-detail">1 Juni - 30 Juni 2024</p>
              </div>
            </div>
          </a>

          <a href="detail_tour.html">
            <div class="card" data-status="ongoing">
              <div class="card-header">
                <img src="./assets/images/ml.jpg" alt="Ongoing Event" />
                <span class="status status-ongoing">Berlangsung</span>
              </div>
              <div class="card-body">
                <h3 class="tournament-name">Summer eSports League</h3>
                <p class="tournament-detail">1 Juni - 30 Juni 2024</p>
              </div>
            </div>
          </a>

          <a href="detail_tour.html">
            <div class="card" data-status="ongoing">
              <div class="card-header">
                <img src="./assets/images/ml.jpg" alt="Ongoing Event" />
                <span class="status status-ongoing">Berlangsung</span>
              </div>
              <div class="card-body">
                <h3 class="tournament-name">Summer eSports League</h3>
                <p class="tournament-detail">1 Juni - 30 Juni 2024</p>
              </div>
            </div>
          </a>

          <a href="detail_tour.html">
            <div class="card" data-status="ongoing">
              <div class="card-header">
                <img src="./assets/images/ml.jpg" alt="Ongoing Event" />
                <span class="status status-ongoing">Berlangsung</span>
              </div>
              <div class="card-body">
                <h3 class="tournament-name">Summer eSports League</h3>
                <p class="tournament-detail">1 Juni - 30 Juni 2024</p>
              </div>
            </div>
          </a>

          <a href="detail_tour.html">
            <div class="card" data-status="completed">
              <div class="card-header">
                <img src="./assets/images/lol_wr.png" alt="Completed Event" />
                <span class="status status-completed">Selesai</span>
              </div>
              <div class="card-body">
                <h3 class="tournament-name">Winter eGames Challenge</h3>
                <p class="tournament-detail">Selesai: 28 Februari 2024</p>
              </div>
            </div>
          </div>
          </a>
      </section>
    </main>

    @extends('spatial.footer')
  
  </body>
  {{-- <script src="{{asset('assets/js/script.js')}}"></script>
  <script
    type="module"
    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
  ></script>
  <script
    nomodule
    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
  ></script> --}}
</html>
