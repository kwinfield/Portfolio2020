@extends('layouts.admin')

@section('title', 'All Projects')

@section('content')

<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Projects</h2>
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
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">All projects</h5>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Email</th>
                                <th scope="col">Date Created</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>Billy Smith</td>
                                    <td>05/14/20</td>
                                    <td><a href="/admin/projects/1/edit"><i class="fas fa-edit"></i></a></td>
                                    <td><a href="/admin/projects/1/delete" onclick="if (! confirm('Are you sure you want to delete category?')) {return false;}"><i class="fas fa-trash-alt"></i></a></td>
                                </tr>                   
                        </tbody>
                    </table>
                    <nav>
                        <ul class="pagination">
                            <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                                <span class="page-link" aria-hidden="true">‹</span>
                            </li>
                            <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                            <li class="page-item"><a class="page-link" href="http://kw-restaurant.herokuapp.com/admin/projects?page=2">2</a></li>
                            <li class="page-item"><a class="page-link" href="http://kw-restaurant.herokuapp.com/admin/projects?page=3">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="http://kw-restaurant.herokuapp.com/admin/projects?page=2" rel="next" aria-label="Next »">›</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection