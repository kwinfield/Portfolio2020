@extends('layouts.admin')

@section('title', 'SEO Settings')

@section('content')

<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">SEO Settings</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">SEO Settings</li>
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
                    <h5 class="card-header">Edit Seo Settings</h5>
                    <div class="card-body">
                    <form class="splash-container" method="POST" action="/admin/settings/seo">
                            <input type="hidden" name="_token" value="q3CrWJAqOlKrzkU5uLaK7DV53Phu82yzZME7l2r5">                                                <input type="hidden" name="_method" value="PUT">                                                <div class="form-group">
                                <label for="inputdescription">Description</label>
                                <input id="inputdescription" type="text" class="form-control form-control-lg " name="description" value="Billys Burgers is an American multinational chain of hamburger fast food restaurants. Headquartered in the unincorporated area of Miami-Dade County, Florida, the company was founded in 1953 as Insta-Burger King, a Jacksonville, Florida–based restaurant chain." required="" autocomplete="description" autofocus="" placeholder="Add Site Title">
                                                                                </div>
                            <div class="form-group">
                                <label for="inputkeywords">Keywords</label>
                                <input id="inputkeywords" type="text" class="form-control form-control-lg " name="keywords" value="Burgers, Local Burgers, Billy's Burgers, Salads, Best Burgers in Town" required="" autocomplete="keywords" autofocus="" placeholder="Add Street Address">
                                                                                </div>
                            <div class="row">
                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                    
                            </div>
                            <div class="col-sm-6 pl-0">
                                    <p class="text-right">
                                    <button type="submit" class="btn btn-space btn-primary" onclick="if (! confirm('Your SEO Settings have been updated!')) {return false;}">Submit</button>
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