@extends('Components.Header') @section('title', 'Dashboard | FM')
@section('content')
    <div class="container-fluid p-0">
        <nav class="navbar navbar_Fm">
            @auth
                <div class="action_Fm">
                    <Button class="btn toggle-button" id="menu_Toggle_Fm"><ion-icon style="font-size: 1.5rem"
                            name="menu-outline"></ion-icon></Button>

                </div>
            @endauth
            <div class="logo_Fm mx-auto"">
                <a class="navbar-brand href="/">
                    Finance Manager
                </a>
            </div>
            @auth
                <div class="action_Fm">
                    <a href="{{ route('logout') }}" class="btn">Logout</a>
                </div>
            @endauth

        </nav>
    </div>
    <div class="container-fluid p-0 article_Dashboard_FM" id="article_Dashboard_Id_FM">
        <aside>
            <div class="d-flex flex-column flex-shrink-0">
                <ul class="nav nav-pills flex-column mb-auto dashboard_Nav_Fm">
                    <li class="nav-item">
                        <a href="#" class="nav-link active" aria-current="page">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#home"></use>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#table"></use>
                            </svg>
                            Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#grid"></use>
                            </svg>
                            Products
                        </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown">
                    {{-- <strong>UserName</strong> --}}
                </div>
            </div>
        </aside>
        <section>
        </section>
    </div>
@section('scripts')
    @Include('Protected.MicroComponents.scripts')
@endsection

@endsection
