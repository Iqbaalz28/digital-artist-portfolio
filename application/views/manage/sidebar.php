  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php if ($this->session->userdata('user_image') != null) { ?>
            <img src="<?php echo upload_url() . '/users/' . $this->session->userdata('user_image'); ?>" class="img-responsive">
          <?php } else { ?>
            <img src="<?php echo media_url() ?>img/user.png" class="img-responsive">
          <?php } ?>
        </div>
        <div class="pull-left info">
          <p><?php echo ucfirst($this->session->userdata('ufullname')); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <div style="margin-top: 20px"></div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li>
          <a href="<?php echo site_url('manage/profile'); ?>">
            <i class="fa fa-user menu-icon"></i>
            <span>Profile</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('manage/contact'); ?>">
            <i class="fa fa-address-book menu-icon"></i>
            <span>Contact</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('manage/client'); ?>">
            <i class="fa fa-briefcase menu-icon"></i>
            <span>Client</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('manage/interview'); ?>">
            <i class="fa fa-microphone menu-icon"></i>
            <span>Interview</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('manage/honour'); ?>">
            <i class="fa fa-trophy menu-icon"></i>
            <span>Honor</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('manage/illustration'); ?>">
            <i class="fa fa-paint-brush menu-icon"></i>
            <span>Illustration</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('manage/gallery'); ?>">
            <i class="fa fa-image menu-icon"></i>
            <span>Gallery</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('manage/blog'); ?>">
            <i class="fa fa-pencil menu-icon"></i>
            <span>Blog</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('manage/users'); ?>">
            <i class="fa fa-users menu-icon"></i>
            <span>Data Admin</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('manage/auth/logout'); ?>">
            <i class="fa fa-sign-out menu-icon"></i>
            <span>Logout</span>
            <span class="pull-right-container"></span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>