<aside class="main-sidebar" >
   <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
         <?php $con_name=$this->uri->segment(1);?>
         <?php $con_name = trim($con_name); ?>
         <li class="header">SV Tech Knowledge</li>
         <li class="<?= ($con_name=='gjdashboard')?'active':'';?>">
            <a href="<?php echo base_url(); ?>gjdashboard">
              <i class="fa fa-tachometer-alt"></i> 
              <span>Dashboard</span>
            </a>
         </li>
         <!-- <li class="<?= ($con_name=='gjmail')?'active':'';?>">
            <a href="<?php echo base_url(); ?>gjmail"><i class="far fa-envelope"></i> <span>Mail</span></a>
         </li> -->
         <li class="<?= ($con_name=='gjimagegallery')?'active':'';?>">
            <a href="<?php echo base_url(); ?>gjimagegallery"><i class="fa fa-images"></i> <span>Image Gallery</span></a>
         </li>
         <li class="treeview <?= ($con_name=='gjcategory')?'active':'';?>">
            <a href="">
            <i class="fa fa-list-alt"></i>
            <span>Category</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
               <li><a href="<?php echo base_url(); ?>gjcategory/create"><i class="fa fa-edit"></i> Create </a></li>
               <li><a href="<?php echo base_url(); ?>gjcategory"><i class="fa fa-eye"></i> View </a></li>
            </ul>
         </li>
         <li class="treeview <?= ($con_name=='gjproduct')?'active':'';?>">
            <a href="">
            <i class="fa fa-truck"></i>
            <span>Product</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
               <li><a href="<?php echo base_url(); ?>gjproduct/create"><i class="fa fa-edit"></i> Create </a></li>
               <li><a href="<?php echo base_url(); ?>gjproduct"><i class="fa fa-eye"></i> View </a></li>
            </ul>
         </li>
         <li class="treeview <?= ($con_name=='gjpackage')?'active':'';?>">
            <a href="">
            <i class="fa fa-box-open"></i>
            <span>Packages</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
               <li><a href="<?php echo base_url(); ?>gjpackage/create"><i class="fa fa-edit"></i> Create </a></li>
               <li><a href="<?php echo base_url(); ?>gjpackage"><i class="fa fa-eye"></i> View </a></li>
            </ul>
         </li>
         <li class="treeview <?= ($con_name=='gjservice')?'active':'';?>">
            <a href="">
            <i class="fa fa-handshake"></i>
            <span>Services</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
               <li><a href="<?php echo base_url(); ?>gjservice/create"><i class="fa fa-edit"></i> Create </a></li>
               <li><a href="<?php echo base_url(); ?>gjservice"><i class="fa fa-eye"></i> View </a></li>
            </ul>
         </li>
         <li class="treeview <?= ($con_name=='gjslider')?'active':'';?>">
            <a href="">
            <i class="fa fa-image"></i>
            <span>Slider</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
               <li><a href="<?php echo base_url(); ?>gjslider/create"><i class="fa fa-edit"></i> Create </a></li>
               <li><a href="<?php echo base_url(); ?>gjslider"><i class="fa fa-eye"></i> View </a></li>
            </ul>
         </li>
         
         
         <li class="treeview <?= ($con_name=='gjpartner')?'active':'';?>">
              <a href="">
                <i class="fa fa-user"></i>
                <span>Partners/client</span>
                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>gjpartner/create"><i class="fa fa-edit"></i> Create</a></li>
                <li><a href="<?php echo base_url(); ?>gjpartner"><i class="fa fa-eye"></i> View</a></li>
              </ul>
          </li>
         <li class="<?= ($con_name=='gjsubscriber')?'active':'';?>"><a href="<?php echo base_url(); ?>gjsubscriber"><i class="fa fa-users "></i> <span>Subscribers</span> </a></li>
         <li class="<?= ($con_name=='gjinquiry')?'active':'';?>"><a href="<?php echo base_url(); ?>gjinquiry"><i class="fa fa-file-alt"></i> <span>Inquiry</span></a></li>
         <li class="treeview <?= ($con_name=='sent')?'active':'';?>">
            <a href="">
            <i class="fa fa-cogs"></i>
            <span>Settings</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
               <li><a href="<?php echo base_url(); ?>gjcontact/"><i class="fa fa-address-book"></i> Contact Details </a></li>
               <li><a href="<?php echo base_url(); ?>gjcontact/"><i class="fa fa-user-lock"></i> Admin Details </a></li>
            </ul>
         </li>
         <li class="treeview <?= ($con_name=='gjbusinessemail')?'active':'';?>">
            <a href="">
              <i class="fa fa-envelope"></i>
              <span>Business Email</span>
              <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
               <li><a href="<?php echo base_url(); ?>gjbusinessemail/create"><i class="fa fa-edit"></i> Create </a></li>
               <li><a href="<?php echo base_url(); ?>gjbusinessemail"><i class="fa fa-eye"></i> View </a></li>
            </ul>
         </li>
         <li class="treeview <?= ($con_name=='gjonpageseo')?'active':'';?>">
            <a href="<?php echo base_url(); ?>gjonpageseo">
                <i class="fa fa-search"></i>
                <span>SEO</span>
                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
             <ul class="treeview-menu">
                 <li><a href="<?php echo base_url(); ?>gjonpageseo"><i class="fa fa-search"></i> Onpage SEO </a></li>
                 <li><a href="<?php echo base_url(); ?>gjonpageseo/compress_images"><i class="fa fa-images"></i> Compress Images</a></li>
                 <li><a href="<?php echo base_url(); ?>gjonpageseo/generateslug"><i class="fa fa-sitemap"></i> Generate Sitemap </a></li>
                 <li><a href="<?php echo base_url(); ?>gjonpageseo/submit_sitemap"><i class="fa fa-sitemap"></i> Submit Sitemap </a></li>
                 <li><a href="<?php echo base_url(); ?>gjonpageseo/generaterobots"><i class="fa fa-robot"></i> Generate Robots.txt </a></li>
             </ul>
         </li>
         
      </ul>
   </section>
</aside>