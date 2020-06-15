

<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="/jasa/admin/"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a
                            >
                            
                           
                            <a class="nav-link" href="/jasa/admin/Products/"
                                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts</a
                            >
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $this->session->userdata('username')?>
                    </div>
                </nav>
                </div>