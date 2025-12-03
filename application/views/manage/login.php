<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Admin | Login</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link href="<?php echo media_url() ?>css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo media_url() ?>css/font-awesome.min.css" rel="stylesheet" />
  <link href="<?php echo media_url() ?>css/login.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo media_url() ?>css/jquery.toast.css">

  <script src="<?php echo media_url() ?>/js/jquery.min.js"></script>

  <script src="<?php echo media_url() ?>js/jquery.toast.js"></script>
</head>

<body>


  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <?php echo form_open('manage/auth/login', array('class' => 'login100-form validate-form')); ?>
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <?php if ($this->session->flashdata('failed')) { ?>
            <br><br>
            <div class="alert alert-danger alert-dismissible" style="margin-top: -85px !important;">
              <h5><i class="fa fa-close"></i> Email atau Password salah!</h5>
            </div>
          <?php  }  ?>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Email</label>
                <input type="email" required="" autofocus="" name="email" placeholder="Masukan email" class="form-control flat">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Password</label>
                <input type="password" required="" name="password" id="password" placeholder="Masukan password" class="form-control flat">
                <!-- An element to toggle between password visibility -->
                <input type="checkbox" onclick="showPassword()">Show Password
              </div>
            </div>
          </div>
          <button class="btn btn-login">Login</button>
        </div>
        <div class="col-md-3"></div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>


</body>

</html>

<script>
  function showPassword() {
    var input = document.getElementById("password");
    if (input.type === "password") {
      input.type = "teinputt";
    } else {
      input.type = "password";
    }
  }
</script>

<?php if ($this->session->flashdata('success')) { ?>
  <script>
    $(document).ready(function() {
      $.toast({
        heading: 'Berhasil',
        text: '<?php echo $this->session->flashdata('success') ?>',
        position: 'top-right',
        loaderBg: '#ff6849',
        icon: 'success',
        hideAfter: 3500,
        stack: 6
      })
    });
  </script>
<?php } ?>

<?php if ($this->session->flashdata('failed')) { ?>
  <script>
    $(document).ready(function() {
      $.toast({
        heading: 'Gagal',
        text: '<?php echo $this->session->flashdata('failed') ?>',
        position: 'top-right',
        loaderBg: '#ff2e2e',
        icon: 'error',
        hideAfter: 3500,
        stack: 6
      })
    });
  </script>
<?php } ?>