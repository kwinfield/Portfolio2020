@extends('layouts.admin')

@section('title', 'Add Project')

@section('content')

<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Add Project</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Projects</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader -->
    <!-- ============================================================== -->
    
    <div class="row">
        <!-- ============================================================== -->
        <!-- basic table -->
        <!-- ============================================================== -->
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card">
                    <h5 class="card-header">Add a New Project</h5>
                    <div class="card-body">
                    <form class="splash-container" method="POST" action="/admin/users">
                            <input type="hidden" name="_token" value="TsQ3fPEt7M3G9i8vtjHGNuaLFF1ia2OdK1bZ6x7Q">                                                <div class="form-group">
                                <label for="inputfirstItem">First Name</label>
                                <input id="inputfirstItem" type="text" class="form-control form-control-lg " name="fname" value="" required="" autocomplete="name" autofocus="" placeholder="First Name">
                                                                                </div>
                            <div class="form-group">
                                <label for="inputlastItem">Last Name</label>
                                <input id="inputlastItem" type="text" class="form-control form-control-lg " name="lname" value="" required="" autocomplete="name" autofocus="" placeholder="Last Name">

                                                                                </div>
                            <div class="form-group">
                                <label for="inputemail">Email</label>
                                <input id="einputemail" type="email" class="form-control form-control-lg " name="email" value="" required="" autocomplete="email" placeholder="E-mail">

                                                                                </div>
                            <div class="form-group">
                                <label for="inputpassword">Password</label>
                                <input id="inputpassword" type="password" class="form-control form-control-lg " name="password" required="" autocomplete="new-password" placeholder="Password">

                                                                                </div>
                            <div class="form-group">
                                <label for="inputpassword">Confirm Password</label>
                                <input id="inputpassword" type="password" class="form-control form-control-lg" name="password_confirmation" required="" autocomplete="new-password" placeholder="Confirm">
                            </div>
                            <div class="form-group">
                            <label for="inputrole">Role</label>
                            <select name="role_id" class="form-control" id="inputrole">
                            
                                                                                        <option value="1" selected="">Admin</option>
                                        
                                    
                                                                                        <option value="2">Employee</option>
                                        
                                    
                                                                                </select>
                            </div>
                            <div class="row">
                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                    
                            </div>
                            <div class="col-sm-6 pl-0">
                                    <p class="text-right">
                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                    </p>
                            </div>
                            </div>
                    </form>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection