<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GASLogin</title>
    <link
      rel="shortcut icon"
      href="./assets/images/fav.png"
      type="image/svg+xml"
    />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style-wild.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style_tournament.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>

  <body id="top">

    @extends('spatial.navbar')
    
    <main>
      <article>
        <!-- 
        - #About
      -->

        <div class="section-wrapper">
          <section class="about" id="about">
            <div class="container">
              <figure class="about-banner">
                <img
                  src="./assets/images/team-logo-1.png"
                  alt="M shape"
                  class="about-img"
                />

                <img
                  src="./assets/images/team-logo-2.png"
                  alt="Game character"
                  class="character character-1"
                />

                <img
                  src="./assets/images/team-logo-3.png"
                  alt="Game character"
                  class="character character-5"
                />

                <img
                  src="./assets/images/team-logo-4.png"
                  alt="Game character"
                  class="character character-3"
                />
                <img
                  src="./assets/images/team-logo-5.png"
                  alt="Game character"
                  class="character character-4"
                />
              </figure>

              <div class="about-content">
                <p class="about-subtitle">Cari Lawan Untuk Teammu!</p>

                <h2 class="about-title">
                  Tantangan selalu <strong>menanti</strong>
                </h2>

                <p class="about-text">
                  Sambutlah Era Baru Gaming dengan GAS Login. Kami hadir untuk
                  membawa permainan Anda ke level berikutnya. Dapatkan akses
                  eksklusif ke layanan pembuatan turnamen kami yang inovatif.
                </p>

                <p class="about-bottom-text">
                  <ion-icon name="arrow-forward-circle-outline"></ion-icon>

                  <a href="tournament.html"
                    ><span>Tingkatkan Pengalaman Gaming Anda Sekarang!</span></a
                  >
                </p>
              </div>
            </div>
          </section>

          <!-- 
          - #PARTNER
        -->

        <section class="section partner">
          <div class="container">
            <a href="#" class="partner-logo">
              <img
                src="./assets/images/partner-1.png"
                width="157"
                height="55"
                loading="lazy"
                alt="Children Fund"
                class="gray"
              />

              <img
                src="./assets/images/partner-1-active.png"
                width="157"
                height="55"
                loading="lazy"
                alt="Children Fund"
                class="color"
              />
            </a>

            <a href="#" class="partner-logo">
              <img
                src="./assets/images/partner-2.png"
                width="163"
                height="55"
                loading="lazy"
                alt="Non Profit Agency"
                class="gray"
              />

              <img
                src="./assets/images/partner-2-active.png"
                width="163"
                height="55"
                loading="lazy"
                alt="Non Profit Agency"
                class="color"
              />
            </a>

            <a href="#" class="partner-logo">
              <img
                src="./assets/images/partner-3.png"
                width="149"
                height="55"
                loading="lazy"
                alt="Rise Hand Help Us"
                class="gray"
              />

              <img
                src="./assets/images/partner-3-active.png"
                width="149"
                height="55"
                loading="lazy"
                alt="Rise Hand Help Us"
                class="color"
              />
            </a>

            <a href="#" class="partner-logo">
              <img
                src="./assets/images/partner-4.png"
                width="169"
                height="58"
                loading="lazy"
                alt="Helping"
                class="gray"
              />

              <img
                src="./assets/images/partner-4-active.png"
                width="169"
                height="58"
                loading="lazy"
                alt="Helping"
                class="color"
              />
            </a>

            <a href="#" class="partner-logo">
              <img
                src="./assets/images/partner-5.png"
                width="211"
                height="55"
                loading="lazy"
                alt="Poor Fund Organization"
                class="gray"
              />

              <img
                src="./assets/images/partner-5-active.png"
                width="211"
                height="55"
                loading="lazy"
                alt="Poor Fund Organization"
                class="color"
              />
            </a>
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
        
          <!-- 
          - #DONATE
        -->

          <section class="section donate" id="donate">
            <div class="container">
              <h2 class="h2 section-title">
                Ajak Pasukanmu Berkumpul <strong>dan Raih Kemenangan Bersama</strong>
              </h2>
              <ul class="donate-list">
                <li>
                  <div class="donate-card">
                    <figure class="card-banner">
                      <img
                        src="./assets/images/hero-banner.png"
                        width="520"
                        height="325"
                        loading="lazy"
                        alt="Elephant"
                        class="img-cover"
                      />
                    </figure>

                    <div class="card-content">
                      <div class="progress-wrapper">
                        <p class="progress-text">
                          <span>Mengumpulkan</span>

                          <data value="256">Rp.1000.000</data>
                        </p>

                        <data class="progress-value" value="83">83%</data>
                      </div>

                      <div class="progress-box">
                        <div class="progress"></div>
                      </div>

                      <h3 class="h3 card-title">Donasi untuk anak yatim</h3>

                      <div class="card-wrapper">
                        <p class="card-wrapper-text">
                          <span>Match</span>

                          <data class="green" value="34562">Charity</data>
                        </p>

                        <p class="card-wrapper-text">
                          <span>Terkumpul</span>

                          <data class="yellow" value="562">Rp.400.000</data>
                        </p>

                        <p class="card-wrapper-text">
                          <span>Tujuan</span>

                          <data class="cyan" value="864">Rp.600.000</data>
                        </p>
                      </div>
<a href="detail_donation.html">
                      <button class="btn ">
                        <span>DAFTAR</span>

                        
                      </button></a>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="donate-card">
                    <figure class="card-banner">
                      <img
                        src="./assets/images/hero-banner.png"
                        width="520"
                        height="325"
                        loading="lazy"
                        alt="Elephant"
                        class="img-cover"
                      />
                    </figure>

                    <div class="card-content">
                      <div class="progress-wrapper">
                        <p class="progress-text">
                          <span>Mengumpulkan</span>

                          <data value="256">Rp.1000.000</data>
                        </p>

                        <data class="progress-value" value="83">83%</data>
                      </div>

                      <div class="progress-box">
                        <div class="progress"></div>
                      </div>

                      <h3 class="h3 card-title">Donasi untuk pendidikan</h3>

                      <div class="card-wrapper">
                        <p class="card-wrapper-text">
                          <span>Match</span>

                          <data class="green" value="34562">Charity</data>
                        </p>

                        <p class="card-wrapper-text">
                          <span>Terkumpul</span>

                          <data class="yellow" value="562">Rp.400.000</data>
                        </p>

                        <p class="card-wrapper-text">
                          <span>Tujuan</span>

                          <data class="cyan" value="864">Rp.600.000</data>
                        </p>
                      </div>

                      <button class="btn ">
                        <span>DAFTAR</span>

                        
                      </button>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="donate-card">
                    <figure class="card-banner">
                      <img
                        src="./assets/images/hero-banner.png"
                        width="520"
                        height="325"
                        loading="lazy"
                        alt="Elephant"
                        class="img-cover"
                      />
                    </figure>

                    <div class="card-content">
                      <div class="progress-wrapper">
                        <p class="progress-text">
                          <span>Mengumpulkan</span>

                          <data value="256">Rp.1000.000</data>
                        </p>

                        <data class="progress-value" value="83">83%</data>
                      </div>

                      <div class="progress-box">
                        <div class="progress"></div>
                      </div>

                      <h3 class="h3 card-title">donasi untuk palestina</h3>

                      <div class="card-wrapper">
                        <p class="card-wrapper-text">
                          <span>Match</span>

                          <data class="green" value="34562">Charity</data>
                        </p>

                        <p class="card-wrapper-text">
                          <span>Terkumpul</span>

                          <data class="yellow" value="562">Rp.400.000</data>
                        </p>

                        <p class="card-wrapper-text">
                          <span>Tujuan</span>

                          <data class="cyan" value="864">Rp.600.000</data>
                        </p>
                      </div>

                      <button class="btn ">
                        <span>DAFTAR</span>

                        
                      </button>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="donate-card">
                    <figure class="card-banner">
                      <img
                        src="./assets/images/hero-banner.png"
                        width="520"
                        height="325"
                        loading="lazy"
                        alt="Elephant"
                        class="img-cover"
                      />
                    </figure>

                    <div class="card-content">
                      <div class="progress-wrapper">
                        <p class="progress-text">
                          <span>Mengumpulkan</span>

                          <data value="256">Rp.1000.000</data>
                        </p>

                        <data class="progress-value" value="83">83%</data>
                      </div>

                      <div class="progress-box">
                        <div class="progress"></div>
                      </div>

                      <h3 class="h3 card-title">Terkumpul untuk korban bencana</h3>

                      <div class="card-wrapper">
                        <p class="card-wrapper-text">
                          <span>Match</span>

                          <data class="green" value="34562">Charity</data>
                        </p>

                        <p class="card-wrapper-text">
                          <span>Team</span>

                          <data class="yellow" value="562">Rp.400.000</data>
                        </p>

                        <p class="card-wrapper-text">
                          <span>Tujuan</span>

                          <data class="cyan" value="864">Rp.600.000</data>
                        </p>
                      </div>

                      <button class="btn ">
                        <span>DAFTAR</span>

                        
                      </button>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </section>

          <!-- 
          - #EVENT
        -->

          <section class="section event" id="event">
            <div class="container">
              <ul class="event-list">
                <li>
                  <div class="event-card">
                    <time class="card-time" datetime="01-05">
                      <span class="month">Apr</span>

                      <span class="date">14</span>
                    </time>

                    <div class="wrapper">
                      <div class="card-content">
                        <p class="card-subtitle">MLBB ALSTAR CIBIRU</p>

                        <h3 class="card-title">
                          Hidupkan dunia dengan pemain unggulan!
                        </h3>
                      </div>

                      <a href="blog.html">
                        <button class="btn btn-black">
                        <span>View Events</span>

                        <ion-icon
                          name="arrow-forward"
                          aria-hidden="true"
                        ></ion-icon>
                      </button></a>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="event-card">
                    <time class="card-time" datetime="02-23">
                      <span class="month">Mei</span>

                      <span class="date">15</span>
                    </time>

                    <div class="wrapper">
                      <div class="card-content">
                        <p class="card-subtitle">Spring Tournament</p>

                        <h3 class="card-title">
                          Kumpulkan pemain dan menangkan FC24 dalam genggaman! 
                        </h3>
                      </div>

                      <a href="detail_tour_valo.html">
                        <button class="btn btn-black">
                        <span>View Events</span>

                        <ion-icon
                          name="arrow-forward"
                          aria-hidden="true"
                        ></ion-icon>
                      </button></a>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="event-card">
                    <time class="card-time" datetime="03-27">
                      <span class="month">Mar</span>

                      <span class="date">27</span>
                    </time>

                    <div class="wrapper">
                      <div class="card-content">
                        <p class="card-subtitle">Valorant</p>

                        <h3 class="card-title">
                          Kumpulkan para player dan ledakan base musuhmu!
                        </h3>
                      </div>

                      <a href="detail_tour_valo.html">
                        <button class="btn btn-black">
                        <span>View Events</span>

                        <ion-icon
                          name="arrow-forward"
                          aria-hidden="true"
                        ></ion-icon>
                      </button></a>
                    </div>
                  </div>
                </li>
              </ul>
              <a href="tournament.html">
              <button class="btn btn-secondary">
                <span>Lihat Event Lebih banyak</span>
              </button></a>
            </div>
          </section>

      
    @extends('spatial.footer')


    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/js/script_tournament.js')}}"></script>
    
    <script>
      @if($message = Session::get('success'))
      Swal.fire({
      icon: "success",
      title: "Berhasil",
      text: "{{$message}}",
    });
    @endif
    </script>
  </body>
</html>
