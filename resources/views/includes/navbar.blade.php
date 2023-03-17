<nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-fixed-top navbar-service">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="/images/logonav.png" class="img-fluid" width="80" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-0 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" style="color: white;" aria-current="page"
                        href="{{ route('produk') }}">PRODUK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: white;" aria-current="page"
                        href="{{ route('profil') }}">PROFIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: white;" aria-current="page" href="{{ route('client') }}">OUR
                        CLIENT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disable" style="color: white;" aria-current="page" href="#">KONFIRMASI
                        PEMBAYARAN</a>
                </li>
                <div class="row">
                    <div class="col-md-8">
                        <div class="input-group rounded-lg">
                            <input class="form-control py-2 border-right-0 border" type="search" value="Pencarian"
                                id="example-search-input">
                            <span class="input-group-append">
                                <div class="input-group-text bg-transparent"><i class="fa fa-search icon-home"></i>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
                <li class="d-flex align-items-center pl-4">
                    <i class="fa-solid fa-cart-shopping fa-2x icon-home"></i>
                </li>
            </ul>
        </div>
    </div>
</nav>