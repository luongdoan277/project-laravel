@extends('homepage')
@section('main')
    @include('component.headerProduct')
    <section class="search-order">
        <div class="title-search text-center" style="color: white">
            Search
        </div>
        <form action="{{route('order-detail')}}" class="container text-center" style="margin-top: 30px; margin-bottom: 30px">
            @csrf
            <input type="text" name="order_number" placeholder="Code your order" style="padding: 8px 0; text-align: center; border-radius: 30px; outline: none; border: none; overflow: hidden;width: 100%">
            <button type="submit" style="width: 200px; height: 40px;border-radius: 20px; margin: 30px auto 0; font-weight: 600">Search</button>
        </form>
    </section>
    @include('component.footer')
@endsection
