@extends('layouts.app')


@section('content')

<div class="container-fluid">
   <div class="row">
        <div class="col-sm-2">
            <div class="admin-panel my-4">
               <div class="container">
                    <div class="admin-list">
                        <div class="row admin_item">
                            <div class="col-sm-3 admin-icon"><i class="fa fa-tachometer" aria-hidden="true"></i></div>
                            <div class="col-sm-9 admin-icon"><a href="/admin">Dashbord</a></div>
                        </div>
                        <div class="row admin_item">
                            <div class="col-sm-3 admin-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                            <div class="col-sm-9 admin-icon"><a href="/admin/user"> Donors</a></div>
                        </div>
                        <div class="row admin_item">
                            <div class="col-sm-3 admin-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                            <div class="col-sm-9 admin-icon"> <a href="/admin/add">Project</a> </div>
                        </div>
                        <div class="row admin_item">
                            <div class="col-sm-3 admin-icon"><i class="fa fa-sign-out" aria-hidden="true"></i></div>
                            <div class="col-sm-9 admin-icon">Logout</div>
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-10 my-4">
            <div class="card">
               <div class="row">
                   <div class="col-sm-6">
                        <h4 class="text-center my-4">project progress</h4>
                   </div>
                   <div class="col-sm-6"></div>
               </div>
            </div>             

        </div>
   </div>
</div>

@endsection