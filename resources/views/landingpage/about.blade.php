@extends('landingpage/layouts.main')

<style>
    .header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
    }

    .visimisi {
        width: 100%;
        background: white;
        padding: 8px 36px;
        display: inline-block;
        font-size: 36px;
        letter-spacing: 1px;
        cursor: pointer;
        box-shadow: inset 0 0 0 0 #D80286;
        transition: ease-out 0.4s;
        margin-bottom: 10px;
    }

    .visimisi:hover {
        box-shadow: inset 500px 0 0 0 #D80286;
        color: white;
        border-radius: 50px 0px 50px 0px;
    }

    /* .visimisi {
        display: flex;
        padding: 10px 20px;
        margin: 5px 0;
        text-decoration: none;
        color: #333;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
        transition: background-color 0.3s, color 0.3s;
    } */

    .visimisi.active {
        background: rgba(118, 0, 129, 1);
        color: white;
        border-color: #007bff;
        border-radius: 0 50px 0 50px;
    }

    .visimisidesc {
        padding: 0% 100% 0% 5%;
        background: linear-gradient(63deg, rgba(118, 0, 129, 1) 0%, rgba(167, 0, 21, 1) 100%);
        color: white;
        text-align: justify;
        border-radius: 28px;
        min-height: 180px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin-right: -100%;
        font-size:20px; font-weight:bold;
    }

    .formatted-text {
        white-space: pre-wrap;
    }
</style>

@section('container')
<section style="padding: 0px;">
    <header class="section-header transparent-background">
        <h2 class="hero-title" style="height: 100px; display: flex; justify-content: center; align-items: center; text-align: center;">About US</h2>
        <h4>Your Trusted Partner in Innovation and Excellence</h4>
    </header>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <main class="container" style="margin-top: 0px; margin-bottom: 50px" data-aos="fade-up">
        <div class="row col-sm-12 col-md-12" style="text-align: center; margin: 100px 0px; font-size:20px; font-weight:bold;">
            Starting from the experience, professionalism, and trust from customers, iTrust Data Technology is here as a reliable company ready to be a solution to your data security protection needs. Along with trusted and proven products and solutions, iTrust is committed to deliver beyond expectation solutions.
        </div>

        <div class="row" style="margin: 100px 0px;">
            <div class="col-sm-12 col-md-4">
                <a class="visimisi target active" href="javascript:void(0)" id="target1" onclick="showDescription('visi')">Vision</a>
                <a class="visimisi target" href="javascript:void(0)" id="target2" onclick="showDescription('misi')">Mision</a>
            </div>

            <div class="col-sm-12 col-md-8">
                <div class="visimisidesc">
                    <p id="visidesc">
                        To be the most trusted global leader in data security, safeguarding the digital assets of individuals and organizations alike.
                    </p>
                    <p id="misidesc" style="display: none;">
                        * Deliver world-class data security solutions tailored to our clients' needs.<br>
                        * Continuously innovate to stay ahead of emerging threats.<br>
                        * Foster a culture of security awareness and excellence.
                    </p>
                </div>
            </div>
        </div>

        @include('landingpage.sectionourteam')
        @include('landingpage.sectionsolutions')
        @include('landingpage.sectioncontactus')
    </main>
</section>
@endsection

<script>
    function showDescription(target) {
        const visiDesc = document.getElementById('visidesc');
        const misiDesc = document.getElementById('misidesc');
        const buttons = document.querySelectorAll('.visimisi');

        // Tampilkan dan sembunyikan deskripsi
        if (target === 'visi') {
            visiDesc.style.display = 'flex';
            misiDesc.style.display = 'none';
        } else if (target === 'misi') {
            visiDesc.style.display = 'none';
            misiDesc.style.display = 'flex';
        }

        // Perbarui kelas tombol aktif
        buttons.forEach(button => {
            button.classList.remove('active');
        });

        document.getElementById(`target${target === 'visi' ? 1 : 2}`).classList.add('active');
    }
</script>
