  <section id="intro">
  </section>
  <section id="maincontent">
    <div class="container" style="padding-bottom: 110px">
      <div class="row">
        <div class="span12">
          <div class="tagline centered">
            <div class="row">
              <div class="span12">
                <div class="tagline_text">
                  <h2>Harap Login</h2>
                  <p>
                    Anda harus login terlebih dahulu untuk dapat menggunakan layanan kami.
                  </p>
                  <!-- Alert Form Validation -->
                  <?php if ($msg != '') : ?>
                    <div class="alert alert-danger" role="alert">
                      <?php echo $msg; ?>
                    </div>
                  <?php endif; ?>


                  <!-- Sucess Register -->
                  <?php if ($this->session->flashdata('msgSuccess') != '') : ?>
                    <div class="alert alert-info" role="alert">
                      <?php echo $this->session->flashdata('msgSuccess'); ?>
                    </div>
                  <?php endif; ?>

                  <div align="center">
                    <form action="<?php echo base_url() . "AccountCtl/checkingLogin"?>" method="post">
                      <table>
                        <tr>
                          <td>Username:</td>
                          <td><input type="text" id="username" name="username" width="100" /></td>
                        </tr>
                        <tr>
                          <td>Password:</td>
                          <td><input type="password" id="sandi" name="sandi" width="100" /></td>
                        </tr>
                      </table>

                      <input type="submit" value="Login">
                    </form>
                    <p>Belum punya akun? <br><a href="<?php echo base_url() . "AccountCtl/signUp" ?>">Daftar</a> eReview</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end tagline -->
        </div>
      </div>
    </div>
  </section>