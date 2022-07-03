@extends('layouts.app')
@section('content')
       
        <section>
            <div class="tengah">
                <h3 style="color: azure; text-align:right;">1</h3>
                <div class="gambarBerita1">
                        <br><br>
                    <div class="content1">
                        <a href="https://www.detik.com/jabar/berita/d-6018303/pasar-buku-palasari-kini-digempur-digitalisasi-dan-pandemi">
                            <img src="{{asset('asset/berita1.jpeg')}}" style="width: 100%; height: width">
                        </a>
                            <p>Pasar Buku Palasari Kini: Digempur Digitalisasi dan Pandemi</p>
                            <p>Selasa, 05 Apr 2022 22:29 WIB</p>
                            <b style="font-style: oblique;">Sudirman Wamad</b>
                            <p>Pasar Buku Palasari Kota Bandung salah satu tempat legendaris di Kota Bandung. Tempat ini juga dikenal sebagai surga bagi para pemburu dan pembaca buku. Kini, eksistensi pasar legendaris itu mulai redup.
                                <br><br>
                                Di tengah gempuran digitalisasi dan pandemi,
                            <a href="https://www.detik.com/jabar/berita/d-6018303/pasar-buku-palasari-kini-digempur-digitalisasi-dan-pandemi">.....Read More</a>
                            </p>
                    </div>
                    <div class="content2">
                        <a href="https://hot.detik.com/book/d-6009282/suka-novel-miss-peregrine-peta-dunia-imajiner-terbit-27-september">
                            <img src="{{asset('asset/berita2.jpeg')}}" style="width:80%; height: width">
                        </a>
                            <p>Suka Novel Miss Peregrine? Peta Dunia Imajiner Terbit 27 September</p>
                            <p>Kamis, 31 Mar 2022 12:22 WIB</p>
                            <b style="font-style: oblique;">Tia Agnes</b>
                            <p>Penerbit Dutton Books for Young Readers mengumumkan awal pekan ini kelanjutan serial yang bakal terbit berjudul 'Miss Peregrine's Museum of Wonders: An Indispensable Guide to the Dangers and Delights of the Peculiar World for the Instruction of New Arrivals'.
                            <a href="https://hot.detik.com/book/d-6009282/suka-novel-miss-peregrine-peta-dunia-imajiner-terbit-27-september">.....Read More</a>
                            </p>
                    </div>
                    <div class="content3">
                        <a href="https://hot.detik.com/book/d-6003069/yoris-sebastian-luncurkan-buku-101-creative-notes-versi-bahasa-inggris">
                            <img src="{{asset('asset/berita3.png')}}" style="width: 100%; height: width">
                        </a>
                            <p>Yoris Sebastian Luncurkan Buku 101 Creative Notes Versi Bahasa Inggris</p>
                            <p>Minggu, 27 Mar 2022 18:02 WIB</p>
                            <b style="font-style: oblique;">Tia Agnes</b>
                            <p>Edisi bahasa Inggris dari buku 101 Creative Notes karya Yoris Sebastian akhirnya resmi diluncurkan. Setelah ssmpat tertunda karena pandemi, Yoris akhirnya menjangkau pembaca global.
                            <a href="https://hot.detik.com/book/d-6003069/yoris-sebastian-luncurkan-buku-101-creative-notes-versi-bahasa-inggris">.....Read More</a>
                            </p>
                    </div>
                </div>

                <div class="pagination">
                    <a href="home.html">1</a>
                    <a href="page2.html">2</a>
                    <a href="page2.html">&raquo;</a>
                </div>
            </div>

                
            <div class="kanan">
                <br>
                <form action="https://books.google.co.id/">
                    <input placeholder="Search.." name="search">
                    <button>Search..</button>
                  </form>
                    <p style="text-align: center">BERITA POPULER</p>
                    <a href="https://news.detik.com/berita/d-6026977/sejumlah-pemuda-berpakaian-serbahitam-diamankan-polisi-di-palmerah">
                    <img src="{{asset('asset/bp1.jpeg')}}" style="height: 120px; width: height; left: 5px;">
                    </a>
                    <a href="https://news.detik.com/berita/d-6027115/massa-mahasiswa-tolak-presiden-3-periode-mulai-datangi-gedung-dpr">
                    <img src="{{asset('asset/bp2.jpeg')}}" style="height: 160px; width: height; left: 5px;">
                    </a>
                    <a href="https://news.detik.com/berita/d-6026828/titik-titik-massa-hendak-demo-11-april-per-pukul-1150-wib">
                    <img src="{{asset('asset/bp3.jpeg')}}" style="height: 120px; width: height; left: 5px;">
                    </a>
                    <a href="https://news.detik.com/berita/d-6026690/benarkah-panglima-tni-dukung-demo-mahasiswa-11-april">
                    <img src="{{asset('asset/img/bp4.png')}}" style="height: 120px; width: height; left: 5px;">
                    </a>
                    <a href="https://news.detik.com/berita/d-6026733/masinton-pdip-desak-menko-big-data-mundur">
                    <img src="{{asset('asset/bp5.jpeg')}}" style="height: 120px; width: height; left: 5px;">
                    </a>
            </div>
        </section>
    </body>
</html>

<style>
 header{
    background-color: #C84B31;
    position: relative;
    height: 70px;
    border-radius: 25px;
}

.logo{
    width: 150px;
    height: 50px;
    position:relative;
    top: 10px;
    left: 20px;
}

.judul{
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    position: absolute;
    top: -5px;
    left: 86%;
}

nav{
  height: 20px;
  position:relative;
  top: 23px;
}

.navbar {
  overflow: hidden;
  background-color: #2D4263;
  top: 23px;
  text-align: center;
  font-family:Arial, Helvetica, sans-serif;
  border-radius: 25px;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  border-radius: 25px;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  background-color: red;
  align-items: center;
  flex: 1;
  display: flex;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  border-radius: 25px;
}

.dropdown-content a:hover {
  background-color: rgb(131, 39, 39);
}

.dropdown:hover .dropdown-content {
  display: block;
}

section{
    display: flex;
    padding-top: 60px;
}

.tengah{
    padding: 20px;
    padding-top: 25px;
    background-color: #191919;
    flex: 6;
    border-radius: 25px;
}

.pagination {
  display: inline-block;
}

.pagination a {
  color: rgb(255, 255, 255);
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}

.kanan{
    left: 100px;
    padding-top: 5px;
    background-color: #ECDBBA;
    flex: 1;
    text-align: center;
    font-family: cursive;
    border-radius: 25px;
}

.gambarBerita1{
    display: flex;
}

.gambarBerita2{
  display: flex;
}

.gambarBerita1 .content1 , .content2 , .content3{
    background-color: #f1f1f1;
    margin: 10px;
    padding: 20px;
    font-size: 20px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    position: inherit;
}

.gambarBerita2 .content4 , .content5, .content6{
  background-color: #f1f1f1;
  margin: 10px;
  padding: 20px;
  font-size: 20px;
  font-family: Georgia, 'Times New Roman', Times, serif;
  position: inherit;
}

footer{
    background-color: #C84B31;
    position: relative;
    top: -5px;
    text-align:Center;
    text-size-adjust:inherit;
    line-height: 12px;
    line-break: loose;
    word-spacing: 5px;
    border-radius: 25px;
}
</style>
  @endsection