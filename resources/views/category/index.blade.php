@extends('layouts.main')

@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Категории</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="card">
              <div class="class-header">
                <a href="{{ route('category.create') }}" class="btn btn-primary"> ADD</a>
              </div>
            </div>

            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Имя</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($categories as $category)
                    <tr>
                      <td>{{ $category->id }}</td>
                      <td><a href="{{ route('category.show', $category->id) }}">{{ $category->title }}</a></td>
                    </tr>
                  @endforeach
                </tbody>  
              </table>
            </div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection