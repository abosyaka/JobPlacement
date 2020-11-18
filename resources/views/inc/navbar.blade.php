<header>
<?php
    use Illuminate\Support\Facades\Auth;
?>
    <nav
        class="navbar navbar-expand-lg navbar-light bg-custom d-flex flex-column"
    >
        <div class="row col-12">
            <a class="navbar-brand" href="/"
            ><img src="{{asset('images/logo.png')}}"
                /></a>

            <form class="form-inline my-2 my-lg-0 col-lg-7">
                <input
                    class="form-control mr-sm-2 navbar__input col-lg-6 my-2"
                    type="search"
                    placeholder="I'm  searching"
                    aria-label="Search"
                />
                <select
                    name="nav-selection"
                    class="form-control navbar__selection font-weight-bold mr-sm-2 my-sm-2"
                >
                    <option value="">Vacancies</option>
                    <option value="">Curriculum Vitae</option>
                    <option value="">Companies</option>
                </select>
                <button
                    class="col-lg-auto btn btn-warning my-2 my-sm-0 font-weight-bold form-control"
                    type="submit"
                >
                    Search
                </button>
            </form>

            @if(\Illuminate\Support\Facades\Auth::guard('employee')->check())
                <?php
                $user = Auth::guard('employee')->user();
                ?>
                <div class="col-auto ml-auto align-self-center d-flex">
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-outline-warning">Log out</button>
                    </form>
                    <a type="button" href="/employeeProfile" class="btn btn-outline-warning ml-2">{{$user->name}}</a>
                </div>
            @else
                <div class="btn-group col-auto ml-auto align-self-center" style="height: 50%;">
                    <a type="button" href="/registration" class="btn btn-outline-warning">Sign up</a>
                    <a type="button" href="/login" class="btn btn-outline-warning">Sign In</a>
                </div>
            @endif
        </div>

        <div class="col-12 mt-4">
            <ul class="d-flex navbar__list flex-lg-row flex-column p-0">
                <a class="mr-5">
                    <li>Favourite</li>
                </a>
                <a href="/registration" class="mr-5">
                    <li>CV</li>
                </a>
                <a href="/" class="">
                    <li>Home</li>
                </a>
            </ul>
        </div>
    </nav>

</header>
