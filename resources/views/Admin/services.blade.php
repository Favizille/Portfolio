@extends('Admin.adminSideBar')
@section('content')
<div class="container-fluid page-body-wrapper">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        <li class="nav-item nav-category">Main</li>

        <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="{{ route('dashboard.admin')}}" >
            <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
            <span class="menu-title">Project</span>
            </a>

        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/icons/mdi.html">
            <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
            <span class="menu-title">Resume</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('services.all')}}">
            <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
            <span class="menu-title text-success">Services</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
            <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
            <span class="menu-title">Notification</span>
            </a>
        </li>
        <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
            <a href="#" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                <span class="menu-title">Log Out</span></a>
            </div>
        </li>
        </ul>
    </nav>
    <div class="main-panel">
        
        <div class="content-wrapper">
            <div class="page-header row ">
            <h3 class="page-title col-5"> Services</h3>
    
        
            <a href="{{route('service.add')}}" class="btn btn-success shadow px-4"> Add</a>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                            @if(session()->has('message'))
                                <div class="alert alert-success text-center">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
    
                            @if(count($errors) > 0)
                                @foreach( $errors->all() as $message )
                                    <div class="alert alert-danger display-hide">
                                    <span>{{ $message }}</span>
                                    </div>
                                @endforeach
                            @endif
                            <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> Name </th>
                                    <th> Date Added</th>
                                    <th class="text-center"> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr>
                                        <td>{{$service->name}}</td>
                                        <td>{{$service->created_at}}</td>
                                        <td class="row">
                                            <a href="{{route('service.get', $service->id)}}" class='btn btn-success px-1 col-3 mx-3'>view</a>
                                            <form action="{{route('service.edit', $service->id)}}" method="GET" class='btn btn-secondary p-0 mx-5 col-3'> @csrf  <button class="btn btn-secondary">edit</button></form>
                                            <form action="{{route('service.delete', $service->id)}}" method="POST" class='btn btn-danger p-0 col-3'> @csrf @method('DELETE')  <button class='btn btn-danger'>delete</button></form>
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
                        
@endsection