@extends('layouts.admin')

@section('title', 'General Settings')

@section('content')

<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">General Settings</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">General Settings</li>
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
        <div class="card col-6">
            <h5 class="card-header">About Section</h5>
            <div class="card-body">
                <form class="splash-container" method="POST" action="/admin/settings/general">
                    <input type="hidden" name="_token" value="TsQ3fPEt7M3G9i8vtjHGNuaLFF1ia2OdK1bZ6x7Q">                                                
                    <input type="hidden" name="_method" value="PUT">                                                
                    <div class="form-group">
                        <label for="inputaboutme">About Me</label>
                        <input id="inputimgurl" type="text" class="form-control form-control-lg mb-2" name="imgurl" value="" required="" autocomplete="imgurl" autofocus="" placeholder="Image Url">
                        <textarea id="inputaboutme" type="text" class="form-control form-control-lg " name="aboutme" value="About Me" required="" autocomplete="aboutme" autofocus="" placeholder="About Me" rows="5">
                        </textarea>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                
                        </div>
                        <div class="col-sm-6 pl-0">
                            <p class="text-right">
                            <button type="submit" class="btn btn-space btn-primary" onclick="if (! confirm('Are you sure you want to update this section?')) {return false;}">Update</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card col-6">
            <h5 class="card-header">Testimonials</h5>
            <div class="card-body">
                <form class="splash-container" method="POST" action="/admin/settings/general">
                    <input type="hidden" name="_token" value="TsQ3fPEt7M3G9i8vtjHGNuaLFF1ia2OdK1bZ6x7Q">                                                
                    <input type="hidden" name="_method" value="PUT">                                                
                    <div class="form-group">
                        <label for="inputaboutme">Testimonials</label>
                        <input id="inputname" type="text" class="form-control form-control-lg mb-2" name="name" value="" required="" autocomplete="name" autofocus="" placeholder="Name">
                        <input id="inputtitle" type="text" class="form-control form-control-lg mb-2" name="title" value="" required="" autocomplete="title" autofocus="" placeholder="Title">
                        <input id="inputimgurl" type="text" class="form-control form-control-lg mb-2" name="imgurl" value="" required="" autocomplete="imgurl" autofocus="" placeholder="Image Url">
                        <textarea id="inputaboutme" type="text" class="form-control form-control-lg " name="aboutme" value="About Me" required="" autocomplete="aboutme" autofocus="" placeholder="About Me">
                        </textarea>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                
                        </div>
                        <div class="col-sm-6 pl-0">
                            <p class="text-right">
                            <button type="submit" class="btn btn-space btn-primary" onclick="if (! confirm('Are you sure you want to update this section?')) {return false;}">Update</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card col-12">
            <h5 class="card-header">Experience</h5>
            <div class="card-body row">
            <form class="splash-container col-4" method="POST" action="/admin/settings/general">
                <input type="hidden" name="_token" value="TsQ3fPEt7M3G9i8vtjHGNuaLFF1ia2OdK1bZ6x7Q">                                                
                <input type="hidden" name="_method" value="PUT">                                                
                <div class="form-group">
                <label for="inputaboutme">Job #1</label>
                    <input id="inputname" type="text" class="form-control form-control-lg mb-2" name="title" value="" required="" autocomplete="title" autofocus="" placeholder="Title">
                    <input id="inputname" type="text" class="form-control form-control-lg mb-2" name="dates" value="" required="" autocomplete="dates" autofocus="" placeholder="Dates">
                    <input id="inputname" type="text" class="form-control form-control-lg mb-2" name="companyname" value="" required="" autocomplete="companyname" autofocus="" placeholder="Company Name">
                    <textarea id="inputaboutme" type="text" class="form-control form-control-lg " name="jobdescription" value="jobdescription" required="" autocomplete="jobdescription" autofocus="" placeholder="Job Description">
                    </textarea>
                </div>
                <div class="row">
                    <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                            
                    </div>
                    <div class="col-sm-6 pl-0">
                        <p class="text-right">
                        <button type="submit" class="btn btn-space btn-primary" onclick="if (! confirm('Are you sure you want to update this section?')) {return false;}">Update</button>
                        </p>
                    </div>
                </div>
            </form>
            <form class="splash-container col-4" method="POST" action="/admin/settings/general">
                <input type="hidden" name="_token" value="TsQ3fPEt7M3G9i8vtjHGNuaLFF1ia2OdK1bZ6x7Q">                                                
                <input type="hidden" name="_method" value="PUT">                                                
                <div class="form-group">
                <label for="inputaboutme">Job #2</label>
                    <input id="inputname" type="text" class="form-control form-control-lg mb-2" name="title" value="" required="" autocomplete="title" autofocus="" placeholder="Title">
                    <input id="inputname" type="text" class="form-control form-control-lg mb-2" name="dates" value="" required="" autocomplete="dates" autofocus="" placeholder="Dates">
                    <input id="inputname" type="text" class="form-control form-control-lg mb-2" name="companyname" value="" required="" autocomplete="companyname" autofocus="" placeholder="Company Name">
                    <textarea id="inputaboutme" type="text" class="form-control form-control-lg " name="jobdescription" value="jobdescription" required="" autocomplete="jobdescription" autofocus="" placeholder="Job Description">
                    </textarea>
                </div>
                <div class="row">
                    <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                            
                    </div>
                    <div class="col-sm-6 pl-0">
                        <p class="text-right">
                        <button type="submit" class="btn btn-space btn-primary" onclick="if (! confirm('Are you sure you want to update this section?')) {return false;}">Update</button>
                        </p>
                    </div>
                </div>
            </form>
            <form class="splash-container col-4" method="POST" action="/admin/settings/general">
                <input type="hidden" name="_token" value="TsQ3fPEt7M3G9i8vtjHGNuaLFF1ia2OdK1bZ6x7Q">                                                
                <input type="hidden" name="_method" value="PUT">                                                
                <div class="form-group">
                <label for="inputaboutme">Job #3</label>
                    <input id="inputname" type="text" class="form-control form-control-lg mb-2" name="title" value="" required="" autocomplete="title" autofocus="" placeholder="Title">
                    <input id="inputname" type="text" class="form-control form-control-lg mb-2" name="dates" value="" required="" autocomplete="dates" autofocus="" placeholder="Dates">
                    <input id="inputname" type="text" class="form-control form-control-lg mb-2" name="companyname" value="" required="" autocomplete="companyname" autofocus="" placeholder="Company Name">
                    <textarea id="inputaboutme" type="text" class="form-control form-control-lg " name="jobdescription" value="jobdescription" required="" autocomplete="jobdescription" autofocus="" placeholder="Job Description">
                    </textarea>
                </div>
                <div class="row">
                    <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                            
                    </div>
                    <div class="col-sm-6 pl-0">
                        <p class="text-right">
                        <button type="submit" class="btn btn-space btn-primary" onclick="if (! confirm('Are you sure you want to update this section?')) {return false;}">Update</button>
                        </p>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

@endsection