@extends('layouts.app')

@section('title-block')
    Edit Profile
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
            <div class="r-m-con col-xl-10 col-lg-10 col-md-10 col-sm-9 col-10 mr-lg-4 px-lg-5 px-0">
                <div class="ml-0 h-100 d-flex flex-lg-row flex-column mr-sm-0 col px-lg-5 px-0">
                    <div class="profile-r-sub-con col-xl-8 pl-lg-5 d-flex flex-col flex-md-row">

                        @if($user instanceof \App\Models\Employee)
                            <div class="photo">
                                <img class="personPhoto" alt="" src="{{$user->avatar}}">
                            </div>
                            <form action="{{route('edit')}}" method="post">
                                @csrf
                                <div class="form-inline mb-3">
                                    <label for="name" class="font-weight-bold" style="font-size: 1.3em;">Name</label>
                                    <input type="text" class="form-control ml-2 col" name="name" id="name"
                                           value="{{$user->name}}">
                                </div>
                                <div class="form-inline mb-3">
                                    <label for="password" class="font-weight-bold"
                                           style="font-size: 1.3em;">Password</label>
                                    <input type="password" class="form-control ml-2 col" name="password" id="password"
                                           style="border-radius: 15em">
                                </div>
                                <div class="form-inline mb-3">
                                    <label for="avatar" class="font-weight-bold"
                                           style="font-size: 1.3em;">Avatar</label>
                                    <input type="text" class="form-control ml-2 col" name="avatar" id="avatar"
                                           value="{{$user->avatar}}">
                                </div>
                                <div class="form-inline mb-3">
                                    <label for="spec" class="font-weight-bold"
                                           style="font-size: 1.3em;">Specialization</label>
                                    <select name="specialization" id="spec"
                                            class="form-control navbar__selection ml-2 col"
                                            style="font-size: 16px;">
                                        @foreach($specializations as $spec)
                                            <option value="{{$spec->id}}"
                                                    @if($user->specialization->id === $spec->id) selected @endif
                                            >{{$spec->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-inline">
                                    <button type="submit" class="btn btn-outline-warning col" style="position: static">
                                        Save
                                    </button>
                                </div>
                            </form>
                        @elseif($user instanceof \App\Models\Recruiter)
                            <form action="{{route('edit_rec')}}" method="post">
                                @csrf
                                <div class="form-inline mb-3">
                                    <label for="name" class="font-weight-bold" style="font-size: 1.3em;">Name</label>
                                    <input type="text" class="form-control ml-2 col" name="r_name" id="name"
                                           value="{{$user->name}}">
                                </div>
                                <div class="form-inline mb-3">
                                    <label for="password" class="font-weight-bold"
                                           style="font-size: 1.3em;">Password</label>
                                    <input type="password" class="form-control ml-2 col" name="r_password" id="password"
                                           style="border-radius: 15em">
                                </div>
                                <div class="form-inline mb-3">
                                    <label for="tel" class="font-weight-bold" style="font-size: 1.3em;">Avatar</label>
                                    <input type="tel" class="form-control ml-2 col" name="tel" id="tel"
                                           value="{{$user->phone_num}}"
                                           style="border-radius: 15em">
                                </div>

                                <div class="form-inline">
                                    <button type="submit" class="btn btn-outline-warning col" style="position: static">
                                        Save
                                    </button>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
