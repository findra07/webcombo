<style>
    .sidebar-menu>li.active>a:after,
    .sidebar-menu>li.current-page>a:after {
        top: 17px;
        width: 10px;
    }

    .sidebar-wrapper .sidebar-user-details {
        display: flex;
        justify-content: center;
    }

    .sidebar-wrapper .sidebar-user-details .user-profile {
        padding: 10px 10px 25px 10px;
        text-align: center;
        position: relative;
    }

    .sidebar-wrapper .sidebar-user-details .user-profile img.profile-thumb {
        width: 90px;
        height: 90px;
        padding: 3px;
        border: 1px solid white;
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        border-radius: 50px;
        box-shadow: 0 0 15px #000;
        margin: 0 auto;
        -webkit-transition: all .5s ease-in-out;
        -moz-transition: all .5s ease-in-out;
        -ms-transition: all .5s ease-in-out;
        -o-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out;
    }

    .page-wrapper.pinned .sidebar-wrapper .sidebar-user-details .user-profile img.profile-thumb {
        width: 50px;
        height: 50px;
        -webkit-transition: all .5s ease-in-out;
        -moz-transition: all .5s ease-in-out;
        -ms-transition: all .5s ease-in-out;
        -o-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out;
    }

    .page-wrapper.sidebar-hovered .sidebar-wrapper .sidebar-user-details .user-profile img.profile-thumb {
        width: 90px;
        height: 90px;
        -webkit-transition: all .5s ease-in-out;
        -moz-transition: all .5s ease-in-out;
        -ms-transition: all .5s ease-in-out;
        -o-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out;
    }

    .sidebar-wrapper .sidebar-user-details .user-profile h6.profile-name {
        margin: 10px 0 0 0;
        font-size: .8rem;
        font-weight: 400;
        color: #abaaaf;
        max-width: 150px;
    }

    .page-wrapper.pinned .sidebar-wrapper .app-brand {
        justify-content: left;
        margin-left: -5px;
        -webkit-transition: all .5s ease-in-out;
        -moz-transition: all .5s ease-in-out;
        -ms-transition: all .5s ease-in-out;
        -o-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out;
    }

    .page-wrapper.sidebar-hovered .sidebar-wrapper .app-brand {
        justify-content: center;
        /* margin-left: -5px; */
        -webkit-transition: all .5s ease-in-out;
        -moz-transition: all .5s ease-in-out;
        -ms-transition: all .5s ease-in-out;
        -o-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out;
    }
</style>

<nav id="sidebar" class="sidebar-wrapper">

    <!-- App brand starts -->
    <div class="app-brand p-4">
        <a href="index.html">
            <img src="<?php echo base_url('assets/') ?>img/combologo-putih3.png" class="logo" alt="Bootstrap Gallery" />
        </a>
    </div>
    <!-- App brand ends -->

    <div class="sidebar-user-details">
        <div class="user-profile">
            <img class="profile-thumb" src="<?php echo base_url('assets_admin/') ?>images/user.png" alt="">
            <h6 class="profile-name"><?php echo $user->name; ?></h6>
        </div>
    </div>


    <!-- Sidebar profile actions starts -->
    <ul class="profile-actions d-lg-flex d-none">
        <li>
            <a href="settings.html" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip-success" data-bs-title="Settings">
                <i class="bi bi-gear fs-4"></i>
            </a>
        </li>
        <li>
            <a href="profile.html" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip-success" data-bs-title="Profile">
                <i class="bi bi-person-square fs-4"></i>
            </a>
        </li>
        <li>
            <a href="events.html" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip-success" data-bs-title="Notifications">
                <i class="bi bi-bell fs-4"></i>
                <span class="count-label"></span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip-warning" data-bs-title="Skype">
                <i class="bi bi-skype fs-4"></i>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip-danger" data-bs-title="Dribbble">
                <i class="bi bi-dribbble fs-4"></i>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip-info" data-bs-title="Twitter">
                <i class="bi bi-twitter fs-4"></i>
            </a>
        </li>
    </ul>
    <!-- Sidebar profile actions ends -->

    <!-- Sidebar menu starts -->
    <div class="sidebarMenuScroll">
        <?php
        $current_url = $this->uri->segment(2); // Mendapatkan segmen URL untuk menentukan halaman saat ini
        ?>
        <ul class="sidebar-menu">
            <li class="menu-item <?php echo ($current_url == 'dashboard') ? 'active' : ''; ?>">
                <a href="<?php echo base_url('Administrator/dashboard') ?>">
                    <i class="bi bi-pie-chart"></i>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>
            <!-- <li>
                <a href="analytics.html">
                    <i class="bi bi-bar-chart-line"></i>
                    <span class="menu-text">Analytics</span>
                </a>
            </li> -->
            <!-- <li>
                <a href="widgets.html">
                    <i class="bi bi-box"></i>
                    <span class="menu-text">Widgets</span>
                </a>
            </li> -->
            <!-- <li>
                <a href="calendar.html">
                    <i class="bi bi-calendar2"></i>
                    <span class="menu-text">Calendar</span>
                </a>
            </li> -->
            <!-- <li class="treeview">
                <a href="#!">
                    <i class="bi bi-stickies"></i>
                    <span class="menu-text">Components</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="accordions.html">Accordions</a>
                    </li>
                    <li>
                        <a href="alerts.html">Alerts</a>
                    </li>
                    <li>
                        <a href="buttons.html">Buttons</a>
                    </li>
                    <li>
                        <a href="badges.html">Badges</a>
                    </li>
                    <li>
                        <a href="carousel.html">Carousel</a>
                    </li>
                    <li>
                        <a href="list-items.html">List Items</a>
                    </li>
                    <li>
                        <a href="progress.html">Progress Bars</a>
                    </li>
                    <li>
                        <a href="popovers.html">Popovers</a>
                    </li>
                    <li>
                        <a href="tooltips.html">Tooltips</a>
                    </li>
                </ul>
            </li> -->
            <li class="treeview menu-item <?php echo ($current_url == 'content') ? 'active' : ''; ?>">
                <a href="#!">
                    <i class="bi bi-ui-checks-grid"></i>
                    <span class="menu-text">Content</span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo ($current_url == 'content') ? 'active' : ''; ?>">
                        <a href="<?php echo base_url('administrator/content') ?>">Background</a>
                    </li>
                </ul>
            </li>
            <!-- <li class="treeview">
                <a href="#!">
                    <i class="bi bi-window-sidebar"></i>
                    <span class="menu-text">Invoices</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="create-invoice.html">Create Invoice</a>
                    </li>
                    <li>
                        <a href="view-invoice.html">View Invoice</a>
                    </li>
                    <li>
                        <a href="invoice-list.html">Invoice List</a>
                    </li>
                </ul>
            </li> -->
            <li class="menu-item <?php echo ($current_url == 'rekap') ? 'active' : ''; ?>">
                <a href="<?php echo base_url('Administrator/rekap') ?>">
                    <i class="bi bi-border-all"></i>
                    <span class="menu-text">Rekap Data</span>
                </a>
            </li>
            <!-- <li>
                <a href="events.html">
                    <i class="bi bi-calendar4"></i>
                    <span class="menu-text">Events</span>
                </a>
            </li> -->
            <!-- <li>
                <a href="subscribers.html">
                    <i class="bi bi-check-circle"></i>
                    <span class="menu-text">Subscribers</span>
                </a>
            </li> -->
            <!-- <li>
                <a href="contacts.html">
                    <i class="bi bi-wallet2"></i>
                    <span class="menu-text">Contacts</span>
                </a>
            </li> -->
            <!-- <li>
                <a href="settings.html">
                    <i class="bi bi-gear"></i>
                    <span class="menu-text">Settings</span>
                </a>
            </li> -->
            <!-- <li>
                <a href="profile.html">
                    <i class="bi bi-person-square"></i>
                    <span class="menu-text">Profile</span>
                </a>
            </li> -->
            <!-- <li class="treeview">
                <a href="#!">
                    <i class="bi bi-code-square"></i>
                    <span class="menu-text">Cards</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="cards.html">Cards</a>
                    </li>
                    <li>
                        <a href="advanced-cards.html">Advanced Cards</a>
                    </li>
                </ul>
            </li> -->
            <!-- <li class="treeview">
                <a href="#!">
                    <i class="bi bi-pie-chart"></i>
                    <span class="menu-text">Graphs</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="apex.html">Apex</a>
                    </li>
                    <li>
                        <a href="morris.html">Morris</a>
                    </li>
                </ul>
            </li> -->
            <!-- <li>
                <a href="maps.html">
                    <i class="bi bi-pin-map"></i>
                    <span class="menu-text">Maps</span>
                </a>
            </li> -->
            <!-- <li>
                <a href="tabs.html">
                    <i class="bi bi-slash-square"></i>
                    <span class="menu-text">Tabs</span>
                </a>
            </li> -->
            <!-- <li>
                <a href="modals.html">
                    <i class="bi bi-terminal"></i>
                    <span class="menu-text">Modals</span>
                </a>
            </li> -->
            <!-- <li>
                <a href="icons.html">
                    <i class="bi bi-textarea"></i>
                    <span class="menu-text">Icons</span>
                </a>
            </li> -->
            <!-- <li>
                <a href="typography.html">
                    <i class="bi bi-explicit"></i>
                    <span class="menu-text">Typography</span>
                </a>
            </li> -->
            <!-- <li class="treeview">
                <a href="#!">
                    <i class="bi bi-upc-scan"></i>
                    <span class="menu-text">Login/Signup</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="login.html">Login</a>
                    </li>
                    <li>
                        <a href="signup.html">Signup</a>
                    </li>
                    <li>
                        <a href="forgot-password.html">Forgot Password</a>
                    </li>
                </ul>
            </li> -->
            <!-- <li>
                <a href="page-not-found.html">
                    <i class="bi bi-exclamation-diamond"></i>
                    <span class="menu-text">Page Not Found</span>
                </a>
            </li> -->
            <!-- <li>
                <a href="maintenance.html">
                    <i class="bi bi-exclamation-octagon"></i>
                    <span class="menu-text">Maintenance</span>
                </a>
            </li> -->
            <!-- <li class="treeview">
                <a href="#!">
                    <i class="bi bi-code-square"></i>
                    <span class="menu-text">Multi Level</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#!">Level One Link</a>
                    </li>
                    <li>
                        <a href="#!">
                            Level One Menu
                            <i class="bi bi-chevron-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="#!">Level Two Link</a>
                            </li>
                            <li>
                                <a href="#!">Level Two Menu
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a href="#!">Level Three Link</a>
                                    </li>
                                    <li>
                                        <a href="#!">Level Three Link</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#!">Level One Link</a>
                    </li>
                </ul>
            </li> -->
        </ul>
    </div>
    <!-- Sidebar menu ends -->

</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuItems = document.querySelectorAll('.menu-item a');
        menuItems.forEach(item => {
            item.addEventListener('click', function() {
                menuItems.forEach(el => el.parentElement.classList.remove('active'));
                this.parentElement.classList.add('active');
            });
        });
    });
</script>