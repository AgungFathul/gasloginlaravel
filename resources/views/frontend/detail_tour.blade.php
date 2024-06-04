<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('assets/css/style_detailTournament.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <title>GASLogin - Detail Tournament</title>
    <link
      rel="shortcut icon"
      href="./assets/images/fav.png"
      type="image/svg+xml"
    />
  </head>

  <body>
    @extends('spatial.navbar')

    <!-- 
    - MAIN  SECTION 
   -->
    <main>

      <div class="tour-card">
        <div class="tour-bg" data-tournament-id="1"></div>
        <div class="tour-info-container">
          <div class="tour-information">
            <h1>MLBB ALLSTARS TOURNAMENT CIBIRU</h1>
            <h4>Organized by Zi Xuan</h4>
            <ul>
              <li>
                <ion-icon name="calendar" class="icon"></ion-icon>Senin - Rabu, 1
                - 30 April 2024
              </li>
              <li>
                <ion-icon name="alarm" class="icon"></ion-icon> 19:00 - 22:00 WIB
              </li>
              <li>
                <ion-icon name="people-circle" class="icon"></ion-icon>08/08 Teams
              </li>
              <li><ion-icon name="pricetags" class="icon"></ion-icon>Free</li>
              <li>
                <ion-icon name="location" class="icon"></ion-icon>
                Offline
              </li>
            </ul>
          </div>
          <div class="reg-tour">
            <!-- Button trigger popup -->
            <button class="end-button">DAFTAR</button>
            <p>(CLOSE) 16/16 TEAMS REGISTED</p>
          </div>
        </div>
      </div>

      <!-- TABS -->
      <div class="tab-container">
        <div class="tab-box">
          <div class="tab-btns">
            <button class="tab-btn active" data-target="#overview">
              OVERVIEW
            </button>

            <button class="tab-btn" data-target="#bracket">BRACKET</button>

            <button class="tab-btn" data-target="#live">LIVE</button>

            <button class="tab-btn" data-target="#standings">STANDINGS</button>
          </div>

          <!-- 
            ISIAN TAB
           -->
          <div class="content-box">
            <!-- OVERVIEW -->
            <div class="content active" id="overview">
              <div class="overview-box">
                <div class="box-1">
                  <h2>Descriptions</h2>
                  <div class="desc-overview">
                    <span>
                      Tempat pertarungan para bintang, di mana legenda dibentuk
                      dan juara terlahir.
                    </span>
                    <p>
                      Bergabunglah dengan kami di MLBB ALLSTARS TOURNAMENT
                      CIBIRU, turnamen paling bergengsi untuk para pemain Mobile
                      Legends: Bang Bang di wilayah Cibiru. Bersiaplah untuk
                      mengalami pertempuran yang intens dan strategi yang
                      memukau dalam acara yang akan menentukan siapa yang
                      terbaik di antara yang terbaik.
                      <br />
                      <br />
                      CP: @esports_upicibiru (instagram)
                    </p>
                  </div>
                  <div class="row">
                    <div class="box-small">
                      <div class="overview-icon">
                        <img
                          src="/GasLogin/assets/images/icon-ml.jpeg"
                          alt="logo ml"
                        />
                      </div>
                      <span class="desc-1">Game</span>
                      <span class="desc-2">Mobile Legends: Bang bang</span>
                    </div>
                    <div class="box-small">
                      <div class="overview-icon">
                        <ion-icon name="desktop-outline"></ion-icon>
                      </div>
                      <span class="desc-1">Platform</span>
                      <span class="desc-2">Mobile </span>
                    </div>
                    <div class="box-small">
                      <div class="overview-icon">
                        <ion-icon name="people"></ion-icon>
                      </div>
                      <span class="desc-1">Teams</span>
                      <span class="desc-2">08/08 (Full)</span>
                    </div>
                    <div class="box-small">
                      <div class="overview-icon">
                        <ion-icon name="diamond"></ion-icon>
                      </div>
                      <span class="desc-1">Prizes</span>
                      <span class="desc-2">Prizes pool 6000💎</span>
                    </div>
                  </div>
                </div>

                <div class="box-2">
                  <div class="box-fill">
                    <div class="box-large">
                      <h2>Location</h2>
                      <div class="desc-location">
                        <div class="loct">
                          <ion-icon name="location" class="icon"></ion-icon>
                            <p>U-Food Park UPI Cibiru</p>
                          </a>
                        </div>
                        <span>Detail location</span>
                        <p>
                          Jl. Pendidikan No.15, Cibiru Wetan, Kec. Cileunyi,
                          Kabupaten Bandung, Jawa Barat 40625
                        </p>
                      </div>
                      <iframe 
                        class="iframe-map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5873234054766!2d107.72293907373137!3d-6.9398229679324155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c323777ca3a1%3A0x355eff6734ed9167!2sUniversitas%20Pendidikan%20Indonesia%20-%20Kampus%20UPI%20Cibiru!5e0!3m2!1sen!2sid!4v1713593733087!5m2!1sen!2sid" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                      </iframe>
                    </div>
                  </div>

                  <div class="box-fill">
                    <div class="box-large">
                      <h2>Requirements</h2>
                      <div class="desc-location">
                        <div class="loct">
                          <ion-icon name="pricetag" class="icon"></ion-icon></ion-icon>
                            <p>Rp. 0,- (Free)</p>
                        </div>
                        <div class="loct">
                          <ion-icon name="alert-circle" class="icon"></ion-icon>
                            <p>Student of UPI Cibiru (only)</p>   
                        </div>
                        <span>Rules</span>
                        <ul>
                          <li> <p>Wajib pick salah satu hero ALLSTARS (Esmeralda, Fredrin, Melissa, Estes)</p></li>
                        </ul>
                        <span>Format</span>
                        <p>Single Eliminations</p>
                      </div>
                    </div>
                  </div>

                  <div class="box-fill">
                    <div class="box-large">
                      <h2>Winner</h2>
                      <table class="winner">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Team</th>
                            <th>Prizes</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>🥇</td>
                            <td>FOUNDING</td>
                            <td>600 💎</td>
                          </tr>
                          <tr>
                            <td>🥈</td>
                            <td>JAW</td>
                            <td>500 💎</td>
                          </tr>
                          <tr>
                            <td>🥉</td>
                            <td>COLOSAL</td>
                            <td>300 💎</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- BRACKET -->
            <div class="content" id="bracket">
              <h2>Bracket</h2>
              <iframe
                src="https://challonge.com/1j4xxt1l/module"
                width="100%"
                height="500"
                frameborder="0"
                scrolling="auto"
                allowtransparency="true"
              ></iframe>
            </div>

            <!-- LIVE -->
            <div class="content" id="live">
              <h2>Live</h2>
              <iframe
                class="iframe-live"
                width="560"
                height="315"
                src="https://www.youtube.com/embed/"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
            </div>

            <!-- STANDING -->
            <div class="content" id="standings">
              <h2>Standings</h2>
              <div class="detail-standings">
                <table class="standings">
                  <thead>
                    <tr>
                      <th rowspan="2">Rank</th>
                      <th rowspan="2">Team</th>
                      <th colspan="2">Matches</th>
                      <th rowspan="2">WR</th>
                    </tr>
                    <tr>
                      <th>Win</th>
                      <th>Lose</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>🥇</td>
                      <td>FOUNDING</td>
                      <td>3</td>
                      <td>0</td>
                      <td>100%</td>
                    </tr>
                    <tr>
                      <td>🥈</td>
                      <td>JAW</td>
                      <td>2</td>
                      <td>1</td>
                      <td>50%</td>
                    </tr>
                    <tr>
                      <td>🥉</td>
                      <td>COLOSAL</td>
                      <td>2</td>
                      <td>1</td>
                      <td>50%</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>SHIFTER</td>
                      <td>1</td>
                      <td>2</td>
                      <td>33%</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>ARMOR</td>
                      <td>0</td>
                      <td>1</td>
                      <td>0%</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>BEAST</td>
                      <td>0</td>
                      <td>1</td>
                      <td>0%</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>WALL</td>
                      <td>0</td>
                      <td>1</td>
                      <td>0%</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>WAR</td>
                      <td>0</td>
                      <td>1</td>
                      <td>0%</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    @extends('spatial.footer')

    {{-- <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/js/script_detailTournament.js')}}"></script> --}}
    
  </body>
</html>
