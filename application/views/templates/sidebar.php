<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Sidebar - Brand -->
                    <form class="form-inline">
                        <div class="h3 sidebar-brand-icon">
                        <i class="fas fa-store" style="color: #ff5f5f;"></i>
                        </div>
                        <div class="h3 sidebar-brand-text mx-2" style="color: #ff5f5f;">ALE</div>
                    </form>

                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        

                        <div class="navbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <?php $keranjang = 'Keranjang Belanja: '.$this->cart->total_items(). ' items' ?>
                                    <?php echo anchor('dashboard/detail_keranjang', $keranjang) ?>
                                </li>
                            </ul>
                        
                            <div class="topbar-divider d-none d-sm-block"></div>
                            <ul class="na navbar-nav navbar-right">
                                <?php if($this->session->userdata('username')) { ?>
                                    <li><div>Selamat Datang <?php echo $this->session->userdata('username') ?></div></li>
                                    <li class="ml-2"><?php echo anchor('auth/logout','Logout') ?></li>
                                    <?php } else { ?>
                                    <li><?php echo  anchor('auth/login', 'Login'); ?></li>
                                    <?php } ?>
                            </ul>

                        </div>

                    </ul>

                </nav>
                <!-- End of Topbar -->