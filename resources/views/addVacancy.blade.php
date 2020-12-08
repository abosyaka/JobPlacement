@extends('layouts.app')

@section('title-block')
    Add Vacancy
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
                            <form action="{{route('vacancy_add')}}" method="post" class="w-100">
                                @csrf
                                <div class="form-inline mb-3">
                                    <label for="title" class="font-weight-bold" style="font-size: 1.3em;">Title</label>
                                    <input type="text" class="form-control ml-2 col" name="title" id="title">
                                </div>
                                <div class="form-inline mb-3">
                                    <label for="position" class="font-weight-bold"
                                           style="font-size: 1.3em;">Position</label>
                                    <input type="text" class="form-control ml-2 col" name="position" id="position">
                                </div>
                                <div class="form-inline mb-3">
                                    <label for="exp" class="font-weight-bold" style="font-size: 1.3em;">Experience</label>
                                    <input type="text" class="form-control ml-2 col" name="exp" id="exp">
                                </div>
                                <div class="form-inline mb-3">
                                    <label for="desc" class="font-weight-bold" style="font-size: 1.3em;">Description</label>
                                    <input type="text" class="form-control ml-2 col" name="desc" id="desc">
                                </div>
                                <div class="form-inline mb-3">
                                    <label for="salary" class="font-weight-bold" style="font-size: 1.3em;">Salary</label>
                                    <input type="text" class="form-control ml-2 col" name="salary" id="salary">
                                </div>
                                <select name="specialization" id="" class="form-control mt-3">
                                    @foreach($specializations as $spec)
                                        <option value="{{$spec->id}}">{{$spec->name}}</option>
                                    @endforeach
                                </select>

                                <div class="form-inline">
                                    <button type="submit" class="btn btn-outline-warning col" style="position: static">
                                        Submit
                                    </button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
