@extends('Components.Header') @section('title', 'Dashboard | FM')
@section('content')
    <div class="container-fluid p-0">
        <nav class="navbar navbar_Fm">
            @auth
                <div class="action_Fm">
                    <Button class="btn" id="menu_Toggle_Fm"><ion-icon style="font-size: 1.5rem"
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
    <div class="container">
        {{-- USE GRID --}}
        {{-- SIDEBAR --}}
        {{-- MAIN VIEW (AJAX POWERED CONDITIONAL RENDERING AS PER BUTTON CLICKED ON SIDE BAR) --}}
    </div>
@section('scripts')
@endsection

@endsection
