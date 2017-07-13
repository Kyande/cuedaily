<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>

        @include('layouts.head')
        
    </head>
    <body>
        <button id="goToTop" onclick="topFunction()"><span class="fa fa-arrow-up" aria-hidden="true"></span></button>
        
        <div class="container">

            <div class="row">
                <div class="col-md-12">
  
                    @include('layouts.nav')

                </div>

                <div class="col-md-12">
                    
                    <div class="col-md-9">
                    
                        @yield('content')

                    </div>

                    <div class="col-md-3">
                        
                        @include('layouts.sidebar')

                    </div>

                </div>

            </div>
        
        </div>

        @include('layouts.footer')

    <footer>
        
    </footer>

    </body>
</html>
