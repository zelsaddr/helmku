<?= $this->extend('templates/main/main-template') ?>

<?= $this->section('styles') ?>
<style>
    .detail {
        margin-top: 150px;
        padding-bottom: 100px;
    }

    .form-select:focus {
        border-color: #000;
        box-shadow: inset 0 1px 1px #000, 0 0 8px #000;
    }

    @media screen and (max-width: 576px) {
        .detail {
            margin-top: 50px;
        }
    }

    @media screen and (max-width: 992px) {
        .detail {
            margin-top: 50px;
        }
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="detail">
    <div class="container">
        <div class="card">
            <div class="card-body py-5 pe-5">
                <div class="row">
                    <div class="col-md-5 text-center mb-3">
                        <img src="<?= base_url('assets/img/logo/daftar.png') ?>" alt="" width="300" height="300" class="rounded img-thumbnail border-0">
                    </div>
                    <div class="col-md-7">
                        <div class="py-3">
                            <form method="POST" action="">
                                <h3 class="card-title">Register Member</h3>
                                <?= csrf_field() ?>
                                <p>Mohon isi Nama dengan benar, karena akan berpengaruh dalam pengiriman!</p>
                                <div class="form-group py-1">
                                    <label>Nama :</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Ujang">
                                </div>
                                <div class="form-group mt-3">
                                    <label>Email :</label>
                                    <input type="email" name="email" class="form-control" placeholder="ujang@email.com">
                                </div>
                                <div class="form-group mt-3">
                                    <label>Password :</label>
                                    <input type="text" name="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group mt-2">
                                    <p class="text-muted">
                                        Sudah punya akun? <a href="<?= base_url('login-member') ?>">Masuk</a>
                                    </p>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" name="submit" class="btn btn-dark"><i class="bx bxs-user-plus"></i> Daftar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script>
const cart = document.querySelector('.cart');

const addCart = () => {
    let cartTotal = Number(cart.dataset.totalitems);
    newCartTotal = cartTotal + 1
    cart.setAttribute('data-totalitems', newCartTotal);
    $('#cartModal').modal('show');
}
</script>
<?= $this->endSection() ?>