@extends('frontend.layout.app')
@section('content')
    <section class="page-header page-header-modern bg-color-quaternary page-header-md custom-page-header">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>- İletişime Geç</h1>
                    <span class="d-block text-4">Uzm. Dr. Turan Çetin</span>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-end breadcrumb-light">
                        <li><a href="{{ route('home') }}">Anasayfa</a></li>
                        <li class="active">İletişim</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    <div class="container">
        <div class="row pt-1 pb-4 mb-3">
            <div class="col-lg-8">

                <h2 class="font-weight-bold text-color-dark">- İletişime Geç</h2>
                <form class="contact-form custom-contact-form-style-1"  method="POST">

                    <div class="row">
                        <div class="form-group col">
                            <div class="custom-input-box">
                                <input type="text" value="" maxlength="100" class="form-control" name="name" placeholder="İsim Soyisim*" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <div class="custom-input-box">
                                <input type="email" value="" maxlength="100" class="form-control" name="email" placeholder="Email*" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col">
                            <div class="custom-input-box">
                                <input type="email" value="" maxlength="100" class="form-control" name="email" placeholder="Telefon*" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col">
                            <div class="custom-input-box">
                                <input type="email" value="" maxlength="100" class="form-control" name="email" placeholder="Konu*" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <div class="custom-input-box">
                                <textarea maxlength="5000" rows="10" class="form-control" name="message" placeholder="Mesajınız*" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <input type="submit" value="Mesajı Gönder" class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase mb-4" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">

                <div class="row mb-4">
                    <div class="col">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon mt-1">
                                <i class="icon-location-pin icons"></i>
                            </div>
                            <div class="feature-box-info">
                                <h2 class="font-weight-bold text-color-dark">- Adres</h2>
                                <p class="text-4">
                                    Suadiye Mah,Vapuryolu Sok.,No:2/1,<br>Tunç Apt. Kadıköy/İstanbul

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon mt-1">
                                <i class="icon-phone icons"></i>
                            </div>
                            <div class="feature-box-info">
                                <h2 class="font-weight-bold text-color-dark">- Telefon</h2>
                                <p class="text-4">
                                    0530 500 97 40 <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon mt-1">
                                <i class="icon-envelope icons"></i>
                            </div>
                            <div class="feature-box-info">
                                <h2 class="font-weight-bold text-color-dark">- Email</h2>
                                <p class="text-4">
                                    <a href="mailto:mail@example.com" class="text-decoration-none">mail@example.com</a><br>
                                    <a href="mailto:mail2@example.com" class="text-decoration-none">mail2@example.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12051.880828869356!2d29.079998!3d40.9602315!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac78db35e1a1f%3A0x699dde364fd9f9f0!2sDr.%20Turan%20%C3%87etin%20psikiyatrist-psikoterapist!5e0!3m2!1str!2str!4v1692983961360!5m2!1str!2str" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
@endsection
