@extends('head')
@section('content')


</div>
</div>
</div>


 <!--============= Hero Section Starts Here =============-->
 <div class="hero-section style-2 pb-lg-400">
    <div class="container">
        <ul class="breadcrumb">
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a href="#0">My Account</a>
            </li>
            <li>
                <span>Users Controll</span>
            </li>
        </ul>
    </div>
    <div class="bg_img hero-bg bottom_center" data-background="assets/images/banner/hero-bg.png"></div>
</div>
<!--============= Hero Section Ends Here =============-->


<!--============= Dashboard Section Starts Here =============-->
<section class="dashboard-section padding-bottom mt--240 mt-lg--325 pos-rel">
    <div class="container">
        @include('dashboard/dash')
        <div class="col-lg-8">
            <a class="btn btn-info btn-sm" href="/adduser">
                <i class="fas fa-user">
                </i>
               Add Users
            </a>
               <br>
               <br>
                <div class="dashboard-widget">
                    <h5 class="title mb-10">Controll Account</h5>
                    <div class="dashboard-purchasing-tabs">
                        <ul class="nav-tabs nav">
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane show active fade" id="current">
                                <table class="purchasing-table">
                                    <thead>
                                        <th>Username</th>
                                        <th>Level</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $s)
                                        <tr>
                                            <td data-purchase="Username">{{ $s->name }} </td>
                                            <td data-purchase="Level">{{ $s->level }}</td>
                                            <td data-purchase="Email">{{ $s->email }}</td>
                                            <td data-purchase="Action">
                                                    <a class="btn btn-info btn-sm" href="/userupdate/{{ $s->id }}">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                        Edit
                                                    </a>
                                                    <a class="btn btn-danger btn-sm" href="/deleteuser/{{ $s->id }}">
                                                        <i class="fas fa-trash">
                                                        </i>
                                                        Delete
                                                    </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Dashboard Section Ends Here =============-->

@endsection