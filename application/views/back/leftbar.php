<!-- Kolom Sebelah Kiri -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image"><img src="<?php echo base_url()?>assets/images/admin.png" class="img-circle" alt="User Image"/></div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('nama'); ?></p>
        <p>( <?php echo $this->session->userdata('usertype'); ?> )</p>
      </div>
    </div>

    <ul class="sidebar-menu">
      <li class="header">MENU UTAMA</li>
      <li class="treeview">
        <a href="<?php echo base_url('admin/dashboard') ?>">
          <i class="fa fa-home"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class='treeview'>
        <a href='#'><i class='fa fa-credit-card'></i><span> Featured </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li><a href='<?php echo base_url('admin/featured/create') ?>'><i class='fa fa-circle-o'></i> Tambah Featured </a></li>
          <li><a href='<?php echo base_url('admin/featured') ?>'><i class='fa fa-circle-o'></i> Data Featured </a></li>
        </ul>
      </li>
      <li class='treeview'>
        <a href='#'><i class='fa fa-newspaper-o'></i><span> Agenda </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li><a href='<?php echo base_url('admin/agenda/create') ?>'><i class='fa fa-circle-o'></i> Tambah Agenda </a></li>
          <li><a href='<?php echo base_url('admin/agenda') ?>'><i class='fa fa-circle-o'></i> Data Agenda </a></li>
        </ul>
      </li>
      
      <li class='treeview'>
        <a href='#'><i class='fa fa-area-chart'></i><span> Registration </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li><a href='<?php echo base_url('admin/registration') ?>'><i class='fa fa-circle-o'></i> Data Registration </a></li>
        </ul>
      </li>
      <li class="header">SETTING</li>
      <li class='treeview'>
        <a href='<?php $user_id = $this->session->userdata('user_id'); echo base_url('admin/auth/edit_user/'.$user_id.'') ?>'>
          <i class='fa fa-edit'></i><span> Edit Profil </span>
        </a>
      </li>

      <?php if ($this->ion_auth->is_superadmin()): ?>
      
      <li class='treeview'>
        <a href='#'><i class='fa fa-tags'></i><span> Wilayah </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li><a href='<?php echo base_url('admin/wilayah/create') ?>'><i class='fa fa-circle-o'></i> Tambah Wilayah </a></li>
          <li><a href='<?php echo base_url('admin/wilayah') ?>'><i class='fa fa-circle-o'></i> Data Wilayah </a></li>
        </ul>
      </li>
      <li class='treeview'>
        <a href='#'><i class='fa fa-user'></i><span> User </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li><a href='<?php echo base_url() ?>admin/auth/create_user'><i class='fa fa-circle-o'></i> Tambah User</a></li>
          <li><a href='<?php echo base_url() ?>admin/auth/user'><i class='fa fa-circle-o'></i> Data User</a></li>
        </ul>
      </li>
      <li class='treeview'>
        <a href='#'><i class='fa fa-users'></i><span> Group </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li><a href='<?php echo base_url() ?>admin/auth/create_group'><i class='fa fa-circle-o'></i> Tambah Group</a></li>
          <li><a href='<?php echo base_url() ?>admin/auth/users_group'><i class='fa fa-circle-o'></i> Data Group</a></li>
        </ul>
      </li>
    <?php endif ?>
    <li> <a href='<?php echo base_url() ?>admin/auth/logout'> <i class="fa fa-sign-out"></i> <span>Logout</span> </a> </li> 
  </ul>

</section>
</aside>
