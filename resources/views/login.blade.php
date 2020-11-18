@extends('layouts.app')

@section('title-block')
    Registration
@endsection

@section('content')
    <form action="{{route('login_form')}}" class="col-12 col-lg-5 col-md-8 align-self-center" method="post" style="margin: 0 auto;">
        @csrf
        <input
            type="email"
            class="form-control mt-3"
            placeholder="Email*"
            name="email"
            required
        />

        <input
            type="password"
            class="form-control mt-3"
            placeholder="Password*"
            name="password"
            required
        />

        <button
            type="submit"
            class="btn btn-outline-warning form-control mt-4 font-weight-bold"
        >
            Sign In
        </button>
    </form>
@endsection
