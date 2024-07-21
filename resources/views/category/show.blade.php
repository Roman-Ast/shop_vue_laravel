@extends('layouts.main')

@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Категория</h1>
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
              <div class="class-header d-flex p-3">
                <div class="mr-2">
                  <a href="{{ route('category.edit', $category->id  ) }}" class="btn btn-primary"> Редактировать</a>
                </div> 
                <form action="{{ route('category.destroy', $category->id) }}" method="post">
                  @csrf
                  @method('delete')
                  <input type="submit" class="btn btn-danger" value="Удалить">
                </form>  
              </div>
            </div>

            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">

                <tbody>
                  <tr>
                    <td>ID</td>
                    <td>{{ $category->id }}</a></td>
                  </tr>
                  <tr>
                    <td>Имя</td>
                    <td>{{ $category->title }}</a></td>
                  </tr>
                </tbody>  
              </table>
            </div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection