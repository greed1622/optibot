<aside id="sidebar-left" class="sidebar-left bg-dark">

    <div class="sidebar-header">
        <div class="sidebar-title bg-dark">
            Navigation
        </div>
        <div class="sidebar-toggle d-none d-md-block bg-dark" data-toggle-class="sidebar-left-collapsed" data-target="html"
            data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano bg-dark">
        <div class="nano-content">
            <nav id="menu" class="nav-main bg-dark" role="navigation">

                <ul class="nav nav-main">
                    <li>
                        <a class="nav-link" href="pages-vents-index.html">
                            <i class="bx bx-home-alt" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="pages-vents-patient-records.html">
                            <i class="bx bx-envelope" aria-hidden="true"></i>
                            <span>Patient Records</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <script>
            // Maintain Scroll Position
            if (typeof localStorage !== 'undefined') {
                if (localStorage.getItem('sidebar-left-position') !== null) {
                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                    sidebarLeft.scrollTop = initialPosition;
                }
            }
        </script>
    </div>

</aside>
