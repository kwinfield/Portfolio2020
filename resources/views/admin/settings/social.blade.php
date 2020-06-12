@extends('layouts.admin')

@section('title', 'Social Settings')

@section('content')

<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Social Settings</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Social Settings</li>
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
                    <h5 class="card-header">Edit Social Settings</h5>
                    <div class="card-body">
                    <form class="splash-container" method="POST" action="/admin/settings/social">
                            <input type="hidden" name="_token" value="TsQ3fPEt7M3G9i8vtjHGNuaLFF1ia2OdK1bZ6x7Q">                                                <input type="hidden" name="_method" value="PUT">                                                <div class="form-group">
                                <label for="inputtitle">Business Name</label>
                                <input id="inputtitle" type="text" class="form-control form-control-lg " name="site_title" value="Billys Burgers" required="" autocomplete="site_title" autofocus="" placeholder="Add Site Title">
                                                                                </div>
                            <div class="form-group">
                                <label for="inputaddress1">Address 1</label>
                                <input id="inputaddress1" type="text" class="form-control form-control-lg " name="address_1" value="14 Mountain Rd" required="" autocomplete="address_1" autofocus="" placeholder="Add Street Address">
                                                                                </div>
                            <div class="form-group">
                                <label for="inputaddress2">Address 1</label>
                                <input id="inputaddress2" type="text" class="form-control form-control-lg " name="address_2" value="" autocomplete="address_2" autofocus="" placeholder="">
                                                                                </div>
                            <div class="form-group">
                                <label for="inputcity">City</label>
                                <input id="inputcity" type="text" class="form-control form-control-lg " name="city" value="Glen Burnie" required="" autocomplete="city" autofocus="" placeholder="Add City">
                                                                                </div>
                            <div class="form-group">
                                <label for="inputstate">State</label>
                                <input id="inputstate" type="text" class="form-control form-control-lg " name="state" value="MD" required="" autocomplete="state" autofocus="" placeholder="Add State">
                                                                                </div>
                            <div class="form-group">
                                <label for="inputzipcode">Zipcode</label>
                                <input id="inputzipcode" type="text" class="form-control form-control-lg " name="zipcode" value="21060" required="" autocomplete="zipcode" autofocus="" placeholder="Add Zipcode">
                                                                                </div>
                            <div class="form-group">
                                <label for="inputphonenumber">Phone Number</label>
                                <input id="inputphonenumber" type="text" class="form-control form-control-lg " name="phone_number" value="347-231-4545" required="" autocomplete="phone_number" autofocus="" placeholder="Add Phone Number">
                                                                                </div>
                            <div class="row">
                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                    
                            </div>
                            <div class="col-sm-6 pl-0">
                                    <p class="text-right">
                                    <button type="submit" class="btn btn-space btn-primary" onclick="if (! confirm('Your Social Settings have been updated!')) {return false;}">Submit</button>
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