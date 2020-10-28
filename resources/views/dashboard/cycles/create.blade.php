@extends('layouts.dashboard.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Project Add</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Project Add</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">

      <div class="col-md-6">
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">Cycle</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
          </div>
          <div class="card-body">
            <form method="POST" action="{{route('dashboard.cycles.store')}}">
              @csrf
              <div class="form-group">
                <label for="inputMonth">Year</label>
                <select   class="form-control custom-select" name="year" required>
                  <option>- Year -</option>
                  @for($i=2020; $i < 2050; $i++) 
                  <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
               </div>

          <div class="form-group">
            <label for="inputMonth">Month</label>
            <select class="form-control custom-select" name="month" required>
              <option selected="" disabled="">- Month -</option>
              <option value="1">January </option>
              <option value="2">Febuary </option>
              <option value="3">March</option>
              <option value="4">April</option>
              <option value="5">May</option>
              <option value="6">June</option>
              <option value="7">July</option>
              <option value="8">August</option>
              <option value="9">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
            </select> </div>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
</div>
<div class="row">
  <div class="col-12">
    <a href="#" class="btn btn-secondary">Cancel</a>
    <input type="submit" value="Create new Porject" class="btn btn-success float-right">
  </div>
</div>
</form>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection