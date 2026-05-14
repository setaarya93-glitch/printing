@extends('layouts.app')

@section('content')
    {{-- Navigation --}}
    @include('landing.nav.nav')

    <main>

        {{-- Product Print Section --}}
        <div id="product">
            @include('landing.product.index')
        </div>

        {{-- About Section --}}
        <div id="about">
            @include('landing.about.index')
        </div>

        {{-- Why Fastprinting Creative (Values) --}}
        <div id="values">
            @include('landing.values.index')
        </div>

        {{-- Sample Product Print --}}
        <div id="sample">
            @include('landing.sample.index')
        </div>

        {{-- Testimoni --}}
        <div id="testimoni">
            @include('landing.testimoni.index')
        </div>
    </main>

    {{-- Footer --}}
    @include('landing.footer.footer')
@endsection
