  <div class="container mt-5">
      <div class="row" style="margin-bottom: 100px; margin-top: -30px;">
          <div class="col-md-6 col-sm-12 vertical-images">
              <img src="<?= base_url('uploads/foto_1/') . $profile['foto_1'] ?>" alt="Foto Profile 1" class="img-fluid mb-2">
              <img src="<?= base_url('uploads/foto_2/') . $profile['foto_2'] ?>" alt="Foto Profile 2" class="img-fluid mb-2">
          </div>

          <div class="col-md-6 col-sm-12">
              <div class="row">
                  <div class="col-12" style="vertical-align: top;">
                      <?= $profile['konten'] ?>
                  </div>
              </div>
              <?php if (!empty($clients)) { ?>
                  <div class="row">
                      <div class="col-12" style="vertical-align: top;">
                          <h5 style="font-weight: bold;">
                              Selected Clients
                          </h5>
                          <ul>
                              <?php foreach ($clients as $key => $value) { ?>
                                  <li><?= $value['name'] ?></li>
                              <?php } ?>
                          </ul>
                      </div>
                  </div>
              <?php } ?>
              <?php if (!empty($interviews)) { ?>
                  <div class="row">
                      <div class="col-12" style="vertical-align: top;">
                          <h5 style="font-weight: bold;">Interview</h5>
                          <ul>
                            <?php foreach ($interviews as $key => $value) { ?>
                                <i><?= $value['name'] ?></i>
                            <?php } ?>
                          </ul>
                      </div>
                  </div>
              <?php } ?>
              <?php if (!empty($honours)) { ?>
                    <div class="row">
                        <div class="col-12" style="vertical-align: top;">
                            <h5 style="font-weight: bold;">Honors</h5>
                            <ul>
                                <?php foreach ($honours as $key => $value) { ?>
                                    <li><?= $value['name'] ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
              <?php } ?>
          </div>
      </div>
  </div>