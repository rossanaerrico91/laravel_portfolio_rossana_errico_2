@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-4">@yield('service_title')</h1>
    <!-- Anteprima Portfolio -->
    <section id="portfolio" class="bg-light">
        <div class="container">


            <div class="card">



                <div class="card-body">


                    @yield('service_body')

                </div>
            </div>

        </div>
    </section>
@endsection
