<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login | KEVSSS MARKET</title>

<link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">

<style>
  :root {
    --login-red: #c62828;
    --login-red-dark: #991b1b;
  }

  body.login-page {
    min-height: 100vh;
    background:
      radial-gradient(circle at 15% 15%, rgba(198, 40, 40, .12), transparent 32%),
      linear-gradient(135deg, #f7f7f9 0%, #e7eaf0 100%);
    font-family: "Source Sans Pro", "Segoe UI", Arial, sans-serif;
    padding: 24px 12px;
  }

  .login-box {
    width: 100%;
    max-width: 390px;
    margin: 0 auto;
  }

  .login-card-custom {
    overflow: hidden;
    border: 0;
    border-radius: 18px;
    box-shadow: 0 18px 45px rgba(35, 24, 24, .16);
  }

  /* Foto login berbentuk lingkaran seperti foto profil */
  .login-photo-wrap {
    width: 130px;
    height: 130px;
    margin: 22px auto 0;
    overflow: hidden;
    position: relative;
    border-radius: 50%;
    border: 5px solid #fde7e7;
    background: #fde7e7;
    box-shadow: 0 4px 12px rgba(198, 40, 40, .12);
  }

  .login-photo {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center 57%;
    display: block;
    border-radius: 50%;
  }

  .login-photo-label { display: none; }

  .login-card-body-custom {
    padding: 25px 27px 28px;
    background: #fff;
  }

  .login-heading {
    margin: 0 0 6px;
    color: #252525;
    text-align: center;
    font-size: 27px;
    font-weight: 700;
  }

  .login-subheading {
    margin: 0 0 24px;
    color: #777;
    text-align: center;
    font-size: 14px;
  }

  .input-group-custom {
    margin-bottom: 17px;
  }

  .input-group-custom .form-control {
    height: 46px;
    border-color: #d9dce2;
    border-radius: 8px 0 0 8px;
    box-shadow: none;
    padding-left: 14px;
  }

  .input-group-custom .input-group-text {
    min-width: 46px;
    justify-content: center;
    border-color: #d9dce2;
    border-radius: 0 8px 8px 0;
    background: #fff;
    color: var(--login-red);
  }

  .field-error {
    display: block;
    margin-top: 4px;
    font-size: 12px;
  }

  .btn-login-custom {
    width: 100%;
    height: 46px;
    border: 0;
    border-radius: 8px;
    background: linear-gradient(135deg, var(--login-red), var(--login-red-dark));
    color: #fff;
    font-size: 16px;
    font-weight: 700;
    letter-spacing: .4px;
    box-shadow: 0 7px 15px rgba(198, 40, 40, .22);
    transition: transform .15s ease, box-shadow .15s ease;
  }

  .btn-login-custom:hover,
  .btn-login-custom:focus {
    color: #fff;
    transform: translateY(-1px);
    box-shadow: 0 10px 20px rgba(198, 40, 40, .3);
  }

  @media (max-width: 420px) {
    .login-photo-wrap { width: 120px; height: 120px; }
    .login-card-body-custom { padding: 22px 20px 24px; }
  }
</style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card login-card-custom">
    <div class="login-photo-wrap">
      <img
        src="<?= base_url('assets/dist/img/spiderman.jpg') ?>"
        alt="Foto mobil balap merah"
        class="login-photo">
      <div class="login-photo-label">KEVSSS MARKET</div>
    </div>

    <div class="card-body login-card-body-custom">
      <h1 class="login-heading">IM KEVSSS!</h1>
      <p class="login-subheading">Welcome to my dashboard!!!.</p>

      <?php if ($this->session->flashdata('message')): ?>
        <?= $this->session->flashdata('message') ?>
      <?php endif; ?>

      <form action="" method="post">
        <div class="input-group input-group-custom">
          <input
            class="form-control"
            id="inputUsername"
            name="inputUsername"
            type="text"
            placeholder="Username"
            autocomplete="username"
            required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user" aria-hidden="true"></span>
            </div>
          </div>
          <small class="text-danger field-error"><em><?= form_error('inputUsername') ?></em></small>
        </div>

        <div class="input-group input-group-custom">
          <input
            class="form-control"
            id="inputPassword"
            name="inputPassword"
            type="password"
            placeholder="Password"
            autocomplete="current-password"
            required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock" aria-hidden="true"></span>
            </div>
          </div>
          <small class="text-danger field-error"><em><?= form_error('inputPassword') ?></em></small>
        </div>

        <button type="submit" class="btn btn-login-custom">
          <i class="fas fa-sign-in-alt mr-2" aria-hidden="true"></i>Login
        </button>
      </form>
    </div>
  </div>
</div>

<script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/dist/js/adminlte.min.js') ?>"></script>
</body>
</html>
