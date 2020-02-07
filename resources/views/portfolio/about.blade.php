@extends('layouts.main')

@section('title', 'Tentang Saya')
@section('main')
    <main id="about">
        <h1 class="lg-heading">
            Tentang <span class="text-secondary">Saya</span>
        </h1>
        <h2 class="sm-heading">
            Terima kasih atas kunjungnnya, semoga yang anda butuhkan ada di sini...
        </h2>
        <div class="about-info">
            <img src="img/IMG_03.jpg" alt="Moh Sarifudin" class="bio-image">
            <div class="prolog">
                <h3 class="text-secondary">PROLOG</h3>
                <p>Berawal dari hobi akan teknologi dimana segala hal yg saya kerjakan mulai dari bangun pagi sampai
                    tidur
                    lagi tidak lepas dari gadget. Rasa penasaran akan sistem kerja dari sistem komputer membawa saya
                    mencari
                    tahu akan sistem komputer dan yang pertama kali saya temukan dari tutorial di internet adalah bahasa
                    pemrograman website dalam hal ini adalah PHP. Ya, saya adalah programer otodidak yg tidak berasal
                    dari
                    kampus jurusan IT. Sekarang ngoding telah mienjadi hobi yang tidak lepas dari kegiatan sehari-hari.
                    Berikut adalah beberapa informasi tentang skil atau bahasa pemrograman yang saya kuasai. </p>
            </div>
            <div class="bio">
                <h3 class="text-secondary">BIODATA</h3>
                <table>
                    <tr>
                        <td>Nama </td>
                        <td> :Moh Sarifudin</td>
                    </tr>
                    <tr>
                        <td>Alamat </td>
                        <td> :Jl. Belibis No. 43 Makassar</td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir </td>
                        <td> :Buol, 7 Agustus 1993</td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class="desc grid-1">
                <h3>Designer</h3>
                <h6>UX dan UI</h6>
                <p>UX</p>
                <div class="progres" style="--width: 0" data-lable="0%"></div>
                <p>UI</p>
                <div class="progres" style="--width: 0" data-lable="0%"></div>
            </div>
            <div class="desc grid-2">
                <h3>Front End</h3>
                <h6>HTML, CSS dan JS</h6>
                <p>HTML</p>
                <div class="progres" style="--width: 85" data-lable="85%"></div>
                <p>CSS</p>
                <div class="progres" style="--width: 80" data-lable="80%"></div>
                <p>JS</p>
                <div class="progres" style="--width: 50" data-lable="50%"></div>
            </div>
            <div class="desc grid-3">
                <h3>Back End</h3>
                <h6>PHP dan JS Framework</h6>
                <p>Codeigniter</p>
                <div class="progres" style="--width: 50" data-lable="50%"></div>
                <p>Laravel</p>
                <div class="progres" style="--width: 50" data-lable="50%"></div>
            </div>
        </div>
    </main>
@endsection