<div class="card bg-primary border-0 border-radius-0 custom-box-shadow-1">
    <div class="card-body">
        <h3 class="text-transform-none text-color-light font-weight-bold mb-5">HIZLI İLETİŞİM FORMU</h3>
        <form class="contact-form custom-form-style-1 form-errors-light" action="" method="POST">
            @csrf

            <div class="row">
                <div class="form-group col mb-3">
                    <input type="text" value="" class="form-control" name="name" placeholder="Adınız Soyadınız *">
                </div>
            </div>
            <div class="row">
                <div class="form-group col mb-3">
                    <input type="email" value=""  class="form-control" name="email" placeholder="E-mail *">
                </div>
            </div>
            <div class="row">
                <div class="form-group col mb-3">
                    <input type="text" value="" class="form-control" name="phone"  placeholder="Telefon *">
                </div>
            </div>
            <div class="row">
                <div class="form-group col mb-4">
                    <textarea rows="3" class="form-control" name="message" placeholder="Mesajınız *"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group col text-lg-end mb-0">
                    <button type="submit" class="btn custom-btn-primary-darken font-weight-bold btn-px-5 btn-py-3 text-white">MESAJI GÖNDER</button>
                </div>
            </div>
        </form>
    </div>
</div>
