

<nav class="navbar" role="navigation" aria-label="main navigation">

    <div class="container">

        <div class="navbar-brand">

            <a class="navbar-item" href="/">
                @svg('main-logo', 'main-nav-logo')
                {{-- <img src="/img/aat4.svg" alt="Auction Alternative" height="48"> --}}
            </a>

            <a role="button" class="navbar-burger" :class="{'is-active': isActive}" @click="isActive = !isActive" aria-label="menu" :aria-expanded="isActive ? 'true' : 'false'">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>

        </div>

        <div class="navbar-menu" id="navMenu" :class="{'is-active': isActive}">

            <div class="navbar-start">

                <div class="navbar-item has-dropdown is-hoverable">
                    <a href="#" class="navbar-link is-hidden-touch nav-dropdown-link {{ Request::is('services/*') ? 'is-active' : '' }}">
                        <span class="main-navbar-link">Services</span>
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item {{ setActive('services/estates', 'is-active') }}" href="/services/estates">
                            <span>
                                <span class="icon is-small">
                                    {{-- <img src="/img/estates-icon.svg" alt="Estates Icon"> --}}
                                    @svg('estates-icon', 'nav-service-icon')
                                </span>
                                <strong>Estates</strong>
                                <br>
                                An all inclusive approach to downsizing or selling
                            </span>  
                        </a>
                        <hr class="navbar-divider">

                        <a class="navbar-item {{ setActive('services/appraisals', 'is-active') }}" href="/services/appraisals">
                            <span>
                                <span class="icon is-small">
                                    {{-- <img src="/img/appraisals-icon.svg" alt="Appraisals Icon"> --}}
                                    @svg('appraisals-icon', 'nav-service-icon')
                                </span>
                                <strong>Appraisals</strong>
                                <br>
                                Professional and affordable appraisals
                            </span>  
                        </a>

                        <hr class="navbar-divider">

                        <a class="navbar-item {{ setActive('services/webuy', 'is-active') }}" href="/services/webuy">
                            <span>
                                <span class="icon is-small">
                                    {{-- <img src="/img/money-icon.svg" alt="We Buy Icon"> --}}
                                    @svg('money-icon', 'nav-service-icon')
                                </span>
                                <strong>We Buy</strong>
                                <br>
                                Fair prices paid for valuables and quality items 
                            </span>  
                        </a>
                </div>
                </div>


                <a class="navbar-item {{ setActive('about', 'is-active') }}" href="/about" >
                    <span class="main-navbar-link" >About Us</span>
                </a>

                <a class="navbar-item {{ setActive('contact', 'is-active') }}" href="/contact">
                    <span class="main-navbar-link">Contact</span>
                </a>

            </div>


        </div>
    </div>
</nav>
