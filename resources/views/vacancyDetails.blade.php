@extends('layouts.app')

@section('title-block')
    Details
@endsection

@section('content')
    <main>
        <div class="m-con d-flex flex-lg-row flex-column pt-4">
            <div class="l-m-con col-xl-2 col-lg-2 col-md-5 col-sm-5 pt-4 pr-5 pl-5 pb-5">
                <div class="d-flex flex-column">
                    <h2>My Events</h2>
                    <ul>
                        <li><i class="fa fa-envelope-o  fa-2x" aria-hidden="true"></i> <a href="#">Invitations</a></li>
                        <li><i class="fa fa-commenting-o  fa-2x" aria-hidden="true"></i> <a href="#">Replies</a></li>
                        <li><i class="fa fa-eye fa-2x" aria-hidden="true"></i> <a href="#">Views Resume</a></li>
                        <li><i class="fa fa-star fa-2x" aria-hidden="true"></i> <a href="#">Favourites</a></li>
                    </ul>
                </div>
            </div>
            <div class="r-m-con col-xl-10 col-lg-10 col-md-10 col-sm-9 col-10 mr-lg-4 px-lg-5 px-0"
                 style="background-color: rgba(255, 255, 255, 0.4);">
                <div class="ml-0 h-100 d-flex flex-column mr-sm-0 col px-lg-5 px-0">
                    <h1 class="display-4">{{$vacancy->title}}</h1>
                    <p class="lead">We need {{$vacancy->position}} With {{$vacancy->exp}} experience</p>
                    <p>{{$vacancy->description}}</p>
                    <hr class="my-4">
                    <p>Salary: {{$vacancy->salary}}</p>
                </div>
                <?php
                if (\Illuminate\Support\Facades\Auth::guard("recruiter")->check())
                    ?>
                @if($user->company_id==$vacancy->company_id)
                    <div><a href="{{ url('/vacancyEdit', [$vacancy->id]) }}">Edit</a></div>

                @endif

            </div>
        </div>
    </main>
@endsection
