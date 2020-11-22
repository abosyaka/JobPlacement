@extends('layouts.app')

@section('title-block')
    Profile
@endsection

@section('content')
    <?php
    if (Auth::guard('recruiter')->check()) {
        $user = Auth::guard('recruiter')->user();
    }
    ?>
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
            <div class="r-m-con col-xl-10 col-lg-10 col-md-10 col-sm-9 col-10 mr-lg-4 px-lg-5 px-0">
                <div class="ml-0 h-100 d-flex flex-lg-row flex-column mr-sm-0 col px-lg-5 px-0">
                    <div class="profile-l-sub-con col-xl-4 border-rad pt-3 pb-7">
                        <div>
                            <div class="photo">
                                <img class="personPhoto" alt=""
                                     src="https://www.jobsoid.com/wp-content/uploads/2017/01/How-to-go-from-being-Good-to-Great-as-a-Recruiter.jpg">
                            </div>
                            <div class="profile-heading pb-3">
                                <h2>{{$user->name}}</h2>
                                <p>{{$user->surname}}</p>
                            </div>
                        </div>
                        <div class="profile-l-sub-con-info">
                            <p class="profile-contact"><i class="fa fa-address-card fa-lg" aria-hidden="true"></i>Contacts
                            </p>
                            <div class="profile-border-contact border-rad pt-2 pb-2 pr-2 pl-4 d-flex flex-column">
                                <p><i class="fa fa-mobile fa-2x" aria-hidden="true"></i>{{$user->email}}</p>
                                <p><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i>{{$user->phone_num}}</p>
                            </div>
                            <a href="/editProfile" type="button" class="btn btn-warning">Edit Profile</a>
                        </div>

                    </div>
                    <div class="profile-r-sub-con col-xl-8 pl-lg-5">
                        <div class="profile-r-sub-con-up d-flex flex-lg-row flex-column">
                            <div class="r-sub-separator">
                                <h4 class="text-center mt-4 mt-lg-0"><i class="fa fa-book fa-lg" aria-hidden="true"></i>Company
                                </h4>
                                <div class="border-rad pl-4 pr-3 pt-2 pb-2">
                                    <h3>{{$user->company->name}}</h3>
                                    <p>{{$user->company->business_field}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="profile-r-sub-con-down pt-5">
                            <h4 class="text-center mt-4 mt-lg-0"><i class="fa fa-user-secret fa-lg"
                                                                    aria-hidden="true"></i>About company</h4>
                            <div class="border-rad d-flex flex-lg-row flex-column pt-5 pb-4 pl-4 pr-4">
                                <p>{{$user->company->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
