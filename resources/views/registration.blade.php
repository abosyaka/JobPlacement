@extends('layouts.app')

@section('title-block')
    Registration
@endsection

@section('content')
    <main class="registration">
        <div class="row justify-content-center">
            <p class="btn-group">
                <button
                    type="button"
                    class="btn btn-outline-warning"
                    data-toggle="collapse"
                    data-target="#multiCollapseExample1"
                    aria-expanded="false"
                    aria-controls="multiCollapseExample1"
                    id="button1"
                >
                    Apply as Employee
                </button>
                <button
                    class="btn btn-outline-warning"
                    type="button"
                    data-toggle="collapse"
                    data-target="#multiCollapseExample2"
                    aria-expanded="false"
                    aria-controls="multiCollapseExample2"
                    id="button2"
                >
                    Apply as Hirer
                </button>
            </p>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="card card-body d-flex overflow-auto">
                        <h3 class="font-weight-bold text-center">Apply as Employee</h3>
                        <form action="{{route('employee_reg')}}" class="col-12 col-lg-5 col-md-8 align-self-center"
                              method="post">
                            @csrf
                            <input
                                type="text"
                                class="form-control mt-3"
                                placeholder="First name*"
                                name="name"
                                required
                            />
                            <input
                                type="text"
                                class="form-control mt-3"
                                placeholder="Second name*"
                                name="surname"
                                required
                            />
                            <input
                                type="email"
                                class="form-control mt-3"
                                placeholder="Email*"
                                name="email"
                                required
                            />
                            <input
                                type="tel"
                                class="form-control mt-3"
                                placeholder="Phone number*"
                                name="tel"
                                required
                            />
                            <input
                                type="password"
                                class="form-control mt-3"
                                placeholder="Password*"
                                name="password"
                                required
                            />
                            <select name="specialization" id="" class="form-control mt-3">
                                @foreach($specializations as $spec)
                                    <option value="{{$spec->id}}">{{$spec->name}}</option>
                                @endforeach
                            </select>
                            <button
                                type="submit"
                                class="btn btn-outline-warning form-control mt-4 font-weight-bold"
                            >
                                Sign Up
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                    <div class="card card-body">
                        <h3 class="font-weight-bold text-center">Apply as Hirer</h3>
                        <form action="{{route('hirer_reg')}}" class="col-12 col-lg-5 col-md-8 align-self-center"
                              method="post">
                            @csrf
                            <select class="form-control mt-3" name="company">
                                @foreach($companies as $company)
                                    <option value="{{$company->id}}">{{$company->name}}</option>
                                @endforeach
                            </select>
                            <h3 class="font-weight-bold text-center mt-4">Contact</h3>
                            <input
                                type="text"
                                class="form-control mt-3"
                                placeholder="First name*"
                                name="name"
                                required
                            />
                            <input
                                type="text"
                                class="form-control mt-3"
                                placeholder="Second name*"
                                name="surname"
                                required
                            />
                            <input
                                type="email"
                                class="form-control mt-3"
                                placeholder="Email*"
                                name="email"
                                required
                            />
                            <input
                                type="tel"
                                class="form-control mt-3"
                                placeholder="Phone number*"
                                name="phone"
                                required
                            />
                            <input
                                type="password"
                                class="form-control mt-3"
                                placeholder="Password"
                                name="password"
                                required
                            />
                            <button
                                type="submit"
                                class="btn btn-outline-warning form-control mt-4 font-weight-bold"
                            >
                                Sign Up
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
