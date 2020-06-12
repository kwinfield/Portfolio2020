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
                    <form class="splash-container" method="POST" action="/admin/add-project">
                            <input type="hidden" name="_token" value="TsQ3fPEt7M3G9i8vtjHGNuaLFF1ia2OdK1bZ6x7Q">                                                
                                <div class="form-group">
                                    <label for="inputname">Name</label>
                                    <input id="inputname" type="text" class="form-control form-control-lg " name="name" value="" required="" autocomplete="name" autofocus="" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="inputdescription">Desciption</label>
                                    <input id="inputdescription" type="text" class="form-control form-control-lg " name="description" value="" required="" autocomplete="description" autofocus="" placeholder="Description">
                                </div>
                                <div class="form-group">
                                    <label for="inputthumbnail">Thumbnail Image Url</label>
                                    <input id="inputthumbnail" type="thumbnail" class="form-control form-control-lg " name="thumbnail" value="" required="" autocomplete="thumbnail" placeholder="Thumbnail Url">
                                </div>
                                <div class="form-group">
                                    <label for="inputimage">Image Url</label>
                                    <input id="inputimage" type="image" class="form-control form-control-lg " name="image" value="" required="" autocomplete="image" placeholder="Image Url">
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