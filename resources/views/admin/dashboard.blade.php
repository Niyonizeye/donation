@extends('admin.includes.leftnav')

@section('content')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Sum amount</h3>

                <p>Total Amount Generated</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>          
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
             
              <div class="inner">
                <h3>percentage<sup style="font-size: 20px">%</sup></h3>
                <p>Average percentage donation</p>
              </div>
             
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Donor Name</h3>

                <p>Donor</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">    
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>some content</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>        
        <div class="row">
          <section class="col-lg-7 connectedSortable">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  Donotion content
                </h3>
              </div>
              <div class="card-body">
                <div class="tab-content p-0">
                  <div class="container my-4">

                        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                          <th class="th-sm">Full Name</th>
                          <th class="th-sm">Category</th>
                          <th class="th-sm">Country</th>
                          <th class="th-sm">Start date</th>
                          <th class="th-sm">PaymentMethod</th>
                          <th class="th-sm">Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                       
                       body
                        </tbody>
                        </table>
                        <nav aria-label="...">
                            <ul class="pagination">
                              <li class="page-item disabled">
                                <span class="page-link">Previous</span>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item active" aria-current="page">
                                <span class="page-link">2</span>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                              </li>
                            </ul>
                        </nav>

                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Comment list
                </h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm">
                    <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                  @foreach($comment as $comments)
                        <li>
                          <span class="text">{{$comments->name}}</span>
                          <small class="badge badge-danger"><i class="far fa-clock"></i>
                              {{$current=$comments->created_at->diffForHumans()}}

                          </small>  
                          <div class="form-check-inline">
                            <label class="form-check-label">
                               <input type="text" value="{{$comments->id}}">
                              <input type="radio" name="CommentStatus" class="form-check-input" value="Approved">Approve
                            </label>
                          </div>
                          <div class="form-check-inline">
                            <label class="form-check-label">
                              <input type="radio" name="CommentStatus" class="form-check-input" value="Declined">Decline
                            </label>
                          </div>            
                          
                        </li> 
                    @endforeach          
                  </ul>
              </div>
            </div>
          </section>
          <section class="col-lg-5 connectedSortable">
             some content in behind
          </section>
        </div>
      </div>
    </section>
  </div>

  @endsection