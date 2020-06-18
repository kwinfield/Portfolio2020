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
                            <input type="hidden" name="_token" value="q3CrWJAqOlKrzkU5uLaK7DV53Phu82yzZME7l2r5">                                                <input type="hidden" name="_method" value="PUT">                                                <div class="form-group">
                                <label for="inputfacebook">Facebook Url</label>
                                <input id="inputfacebook" type="text" class="form-control form-control-lg " name="facebook_url" value="https://www.facebook.com/burgerking/" required="" autocomplete="facebook_url" autofocus="" placeholder="Add Facebook Url">
                                                                                </div>
                            <div class="form-group">
                                <label for="inputtwitter">Twitter Url</label>
                                <input id="inputtwitter" type="text" class="form-control form-control-lg " name="twitter_url" value="https://twitter.com/BurgerKing" required="" autocomplete="twitter_url" autofocus="" placeholder="Add Twitter Url">
                                                                                </div>
                            <div class="form-group">
                                <label for="inputinstagram">Instagram Url</label>
                                <input id="inputinstagram" type="text" class="form-control form-control-lg " name="instagram_url" value="https://www.instagram.com/burgerking" autocomplete="instagram_url" autofocus="" placeholder="Add Instagram Url">
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