<!DOCTYPE html>
<html>
  <head>
    <title>GASLogin - Create Tournament</title>
    <link
      rel="shortcut icon"
      href="./assets/images/fav.png"
      type="image/svg+xml"
    />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style_createTournament.css')}}" />
    <script
      type="text/javascript"
      src="{{asset('assets/js/script_createTournament.js')}}"
      defer
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    @extends('spatial.navbar')
    
    <div class="titlebar">
      <h1>Create Your Own Tournament</h1>
    </div>
    <form id="infoturnamen">
      <div class="infodasar">
        <h2>Informasi Dasar Turnamen</h2>
        <h6>Nama Turnamen</h6>
        <input type="text" placeholder="Nama Turnamen" />
        <h6>Custom URL Turnamen</h6>
        <input type="text" placeholder="Custom URL Turnamen" />
      </div>
      <div class="infogame">
        <h3>Platform</h3>
        <h3>Permainan</h3>
        <div class="infogame-container">
          <div class="platform">
            <button type="button" class="platformbutt platformbutton active" id="pc">
              PC
            </button>
            <button
              type="button"
              class="platformbutt platformbutton"
              id="mobile"
            >
              Mobile
            </button>
            <button type="button" class="platformbutt platformbutton" id="ps4">
              PS4
            </button>
            <button
              type="button"
              class="platformbutt platformbutton"
              id="console"
            >
              Console
            </button>
          </div>
          <div class="gamelist">
            <div class="game">
              <img id="game1" src="./assets/images/valorant.jpg" />
            </div>
            <div class="game">
              <img id="game2" src="./assets/images/cs2.jpg" />
            </div>
            <div class="game">
              <img id="game3" src="./assets/images/dota2.jpg" />
            </div>
            <div class="game">
              <img id="game4" src="./assets/images/pubgg.jpg" />
            </div>
          </div>
        </div>
      </div>
      <div class="deskripsi">
        <h2>Deskripsi Turnamen</h2>
        <textarea placeholder="Deskripsi Turnamen" rows="8"></textarea>
      </div>
      <div class="jadwal">
        <h2>Jadwal Turnamen</h2>
        <h6>Tanggal Mulai</h6>
        <input type="date" placeholder="dd/mm/yyyy" />
        <h6>Tanggal Selesai</h6>
        <input type="date" placeholder="dd/mm/yyyy" />
      </div>
      <div class="lokasi">
        <h2>Lokasi Turnamen</h2>
        <div class="lokasi-container">
          <div class="lokasi-button">
            <button
              type="button"
              id="offlinebtn"
              class="lokasi-buttons lokasibuttons active"
            >
              Offline
            </button>
            <button
              type="button"
              id="onlinebtn"
              class="lokasi-buttons lokasibuttons"
            >
              Online
            </button>
            <button
              type="button"
              id="hybridbtn"
              class="lokasi-buttons lokasibuttons"
            >
              Hybrid
            </button>
          </div>
          <div class="lokasi-input">
            <div class="lokasi-line1">
              <div class="namatempat">
                <h6>Nama Tempat</h6>
                <input type="text" placeholder="Nama Tempat" />
              </div>
              <div class="namatempat">
                <h6>Negara</h6>
                <input type="text" placeholder="Negara" />
              </div>
            </div>
            <div class="lokasi-line2">
              <div class="namatempat">
                <h6>Provinsi</h6>
                <input type="text" placeholder="Provinsi" />
              </div>
              <div class="namatempat">
                <h6>Kota/Kabupaten</h6>
                <input type="text" placeholder="Kota/Kabupaten" />
              </div>
            </div>
            <div class="detailalamat">
              <h6>Detail Alamat</h6>
              <textarea
                id="keterangan"
                placeholder="Detail alamat"
                rows="5"
              ></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="detailturnamen">
        <h2>Detail Turnamen</h2>
        <h3>Hadiah (Opsional)</h3>
        <div class="hadiah">
          <div class="hadiahinput" id="hadiah1">
            <div class="hadiahinputhead" id="hih1">
              <h6>Hadiah</h6>
              <button type="button" class="remove-button">X</button>
            </div>
            <input type="text" placeholder="Hadiah" />
            <h6>Kriteria Pemenang</h6>
            <p>Juara 1</p>
          </div>
          <div class="hadiahinput" id="hadiah2">
            <div class="hadiahinputhead" id="hih2">
              <h6>Hadiah</h6>
              <button type="button" class="remove-button">X</button>
            </div>
            <input type="text" placeholder="Hadiah" />
            <h6>Kriteria Pemenang</h6>
            <p>Juara 2</p>
          </div>
          <div class="hadiahinput" id="hadiah3">
            <div class="hadiahinputhead" id="hih3">
              <h6>Hadiah</h6>
              <button type="button" class="remove-button">X</button>
            </div>
            <input type="text" placeholder="Hadiah" />
            <h6>Kriteria Pemenang</h6>
            <p>Juara 3</p>
          </div>
          <div class="hadiahinput" id="hadiah4">
            <div class="hadiahinputhead" id="hih4">
              <h6>Hadiah</h6>
              <button type="button" class="remove-button">X</button>
            </div>
            <input type="text" placeholder="Hadiah" />
            <h6>Kriteria Pemenang</h6>
            <input type="text" placeholder="Kriteria Lainnya" />
          </div>
          <div class="hadiahinput" id="hadiah5">
            <div class="hadiahinputhead" id="hih5">
              <h6>Hadiah</h6>
              <button type="button" class="remove-button">X</button>
            </div>
            <input type="text" placeholder="Hadiah" />
            <h6>Kriteria Pemenang</h6>
            <input type="text" placeholder="Kriteria Lainnya" />
          </div>
        </div>
        <button type="button" class="tambah" id="toggle-hadiah-button">
          + Tambah Hadiah
        </button>

        <h3>Aturan (Opsional)</h3>
        <textarea placeholder="Aturan" rows="8"></textarea>
        <h3>FAQ (Opsional)</h3>
        <div class="faq">
          <div class="faqinput" id="faq1">
            <div class="faqinputhead" id="fih1">
              <h6>Pertanyaan 1</h6>
              <button type="button" class="remove-button">X</button>
            </div>
            <input type="text" placeholder="Pertanyaan" />
            <h6>Jawaban</h6>
            <input type="text" placeholder="Jawaban" />
          </div>
          <div class="faqinput" id="faq2">
            <div class="faqinputhead" id="fih2">
              <h6>Pertanyaan 2</h6>
              <button type="button" class="remove-button">X</button>
            </div>
            <input type="text" placeholder="Pertanyaan" />
            <h6>Jawaban</h6>
            <input type="text" placeholder="Jawaban" />
          </div>
          <div class="faqinput" id="faq3">
            <div class="faqinputhead" id="fih3">
              <h6>Pertanyaan 3</h6>
              <button type="button" class="remove-button">X</button>
            </div>
            <input type="text" placeholder="Pertanyaan" />
            <h6>Jawaban</h6>
            <input type="text" placeholder="Jawaban" />
          </div>
        </div>
        <button type="button" class="tambah" id="toggle-faq-button">
          + Tambah FAQ
        </button>

        <h3>Sponsor (Opsional)</h3>
        <div class="sponsor">
          <div class="sponsorinput" id="sponsor1">
            <div class="sponsorinputhead" id="sih1">
              <h6>Sponsor 1</h6>
              <button type="button" class="remove-button">X</button>
            </div>
            <input type="text" placeholder="Sponsor" />
            <div class="uploadlogo">
              <label for="uploadlogo1" class="customuploadbutton">
                Upload logo sponsor
              </label>
              <input type="file" id="uploadlogo1" accept="image/*" />
              <span id="file-name-1" class="file-name"></span>
            </div>
          </div>
          <div class="sponsorinput" id="sponsor2">
            <div class="sponsorinputhead" id="sih2">
              <h6>Sponsor 2</h6>
              <button type="button" class="remove-button">X</button>
            </div>
            <input type="text" placeholder="Sponsor" />
            <div class="uploadlogo">
              <label for="uploadlogo2" class="customuploadbutton">
                Upload logo sponsor
              </label>
              <input type="file" id="uploadlogo2" accept="image/*" />
              <span id="file-name-2" class="file-name"></span>
            </div>
          </div>
          <div class="sponsorinput" id="sponsor3">
            <div class="sponsorinputhead" id="sih3">
              <h6>Sponsor 3</h6>
              <button type="button" class="remove-button">X</button>
            </div>
            <input type="text" placeholder="Sponsor" />
            <div class="uploadlogo">
              <label for="uploadlogo3" class="customuploadbutton">
                Upload logo sponsor
              </label>
              <input type="file" id="uploadlogo3" accept="image/*" />
              <span id="file-name-3" class="file-name"></span>
            </div>
          </div>
        </div>
        <button type="button" class="tambah" id="toggle-sponsor-button">
          + Tambah Sponsor
        </button>

        <div class="konfirmasi">
          <button id="simpansebagaidraft">Simpan Sebagai Draft</button>
          <button id="selanjutnya">Selanjutnya</button>
        </div>
      </div>
    </form>

    @extends('spatial.footer')

    <a href="#top" class="btn btn-primary go-top" data-go-top>
      <ion-icon name="chevron-up-outline"></ion-icon>
    </a>

    {{-- <script src="{{asset('assets/js/script.js')}}"></script> --}}
  </body>
</html>
