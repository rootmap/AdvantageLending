<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light"> 
        <a class="navbar-brand order-1 order-md-0" href="{{url('/')}}"> 
            <img src="{{asset('mod/images/Oasis-logo.svg')}}" alt="Oasis Financial" class="img-fluid" style="width:150px; max-width:100%;"> 
        </a> 
        <button class="hamburger order-3 order-md-0 hamburger--collapse d-block d-md-none" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
            <span class="hamburger-box"> 
                <span class="hamburger-inner"></span> 
            </span> 
            <span class="hamburger-label">Menu</span> 
        </button>
        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse justify-content-end order-4 order-md-0 pt-3 pt-md-0">
            <ul id="menu-main-menu" class="nav navbar-nav">
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-54" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54 nav-item"><a title="How It Works" href="{{url('/how-it-works/')}}" class="nav-link">How It Works</a></li>
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53 nav-item"><a title="Types Of Funding" href="{{url('/types-of-funding/')}}" class="nav-link">Types Of Funding</a></li>
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-52" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52 nav-item"><a title="About Oasis" href="{{url('/about-oasis/')}}" class="nav-link">About Oasis</a></li>
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-63" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63 nav-item"><a title="FAQ" href="{{url('/faq/')}}" class="nav-link">FAQ</a></li>
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-148" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-148 nav-item"><a title="For Attorneys" href="{{url('/for-attorneys/')}}" class="nav-link">For Attorneys</a></li>
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-149" class="d-md-none menu-item menu-item-type-post_type menu-item-object-page menu-item-149 nav-item"><a title="Careers" href="{{url('/about-oasis/careers/')}}" class="nav-link">Careers</a></li>
            </ul>
        </div> 
        <a href="{{url('/apply-now/')}}" class="btn btn-primary btn-sm ml-md-3 order-2 order-md-0">Apply Now</a>
    </nav>
    {{-- <div class="row">
        <div class="logo col-md-3">
            <a class="navbar-brand order-1 order-md-0" href="{{url('/')}}"> 
                <img src="{{asset('mod/images/Oasis-logo.svg')}}" alt="Oasis Financial" class="img-fluid" style="width:150px; max-width:100%;"> 
            </a>
        </div>
        <div class="col-md-9 top-menu">

            <!-- top navigation menu start -->
            <nav class="top-nav mega-menu">
                <ul id="mnu-eft" class="def-effect">
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-54" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54 nav-item"><a title="How It Works" href="{{url('/how-it-works/')}}" class="nav-link">How It Works</a></li>
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53 nav-item"><a title="Types Of Funding" href="{{url('/types-of-funding/')}}" class="nav-link">Types Of Funding</a></li>
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-52" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52 nav-item"><a title="About Oasis" href="{{url('/about-oasis/')}}" class="nav-link">About Oasis</a></li>
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-63" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63 nav-item"><a title="FAQ" href="{{url('/faq/')}}" class="nav-link">FAQ</a></li>
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-148" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-148 nav-item"><a title="For Attorneys" href="{{url('/for-attorneys/')}}" class="nav-link">For Attorneys</a></li>
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-149" class="d-md-none menu-item menu-item-type-post_type menu-item-object-page menu-item-149 nav-item"><a title="Careers" href="{{url('/about-oasis/careers/')}}" class="nav-link">Careers</a></li>
                </ul>
            </nav>
            <!-- top navigation menu end -->
        </div>
    </div> --}}
</div>


<style>
    html *:last-child {
        margin-bottom: 0;
    }
    .text-center {
        text-align: center;
    }
    .top-menu {
        float: right !important;
        width: auto !important;
    }
    .mega-menu {
        position: relative;
    }
    .top-nav {
        float: left;
    }
    .top-nav > ul > li {
        position: relative;
        float: left;
        margin: 0;
        border-left: 1px #eee solid;
        height: 83px;
        overflow: hidden\9;
    }
    .top-nav > ul > li > a {
        display: block;
        padding: 0 17px;
        padding-top: 22px;
        height: 83px;
        text-transform: uppercase;
        overflow: hidden;
        text-align: center;
        font-size: 17px;
        color: #676767
    }
    .top-nav > ul > li:after {
        position: absolute;
        bottom: -9px;
        left: -3px;
        display: inline-block;
        width: 100%;
        height: 9px;
        border-left: 1px #E4E4E4 solid;
        background: transparent;
        content: "";
        -moz-transform: skew(-35deg, 0);
        -ms-transform: skew(-35deg, 0);
        -o-transform: skew(-35deg, 0);
        -webkit-transform: skew(-35deg, 0);
        transform: skew(-35deg, 0);
    }
    .top-nav > ul li a i {
        color: #b8b8b8;
        font-size: 16px;
    }
    .top-nav > ul li a span {
        display: block;
        margin-top: 5px;
    }
    ul, li {
        margin: 0;
        padding: 0;
        list-style: none;
    }
</style>
