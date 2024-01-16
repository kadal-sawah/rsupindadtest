<div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <span class="fs-4"><i class="bi bi-heart-pulse mx-2"></i>RSU PINDAD</span>
            </a>
        </div>

        <ul class="nav col-12 col-md-6 mb-0 justify-content-center mb-md-0">
            <li>
                <div class="text-primary-emphasis nav-link text-center text-decoration-none lh-sm">
                <span class="text-uppercase">rumah sakit umum pindad bandung</br>
                </span>
                <span class="text-capitalize">Jl.Gatot subroto No.517, Sukapura, Kec.Kiaracondong, Kota Bandung,</br>
                Jawa Barat, 40285</br>
                </span>
                </div>
            </li>
        </ul>

        <div class="col-md-3 text-end">
            @auth()
            <span class="nav-link fs-2">{{auth()->user()->username}}</span>
            <!-- <span>{{ session()->get('local_survey') }}</span> -->
            @else
            <span class="nav-link fs-2">Charts</span>
            @endauth
        </div>
        </header>
    </div>