   @extends('layouts.app')
   @section('content')
   <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <img src="{{ asset('assets/images/logo.png')}}" width="100">
                        </a>
                    </li>
                </ul>

                <!-- Right Navbar -->
                <ul class="navbar-nav navbar-right mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Help</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Feedback</a>
                    </li>
                </ul>
                <!-- ./End of right navbar -->
            </div>
        </div>
    </nav>
    <!-- ./End of navbar -->
        <!-- Search Box -->
    

    <livewire:search />

 
    <!-- ./End of search box -->

    @endsection