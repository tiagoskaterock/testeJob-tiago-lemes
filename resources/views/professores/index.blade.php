@extends('layouts.main')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Professores</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('start') }}">Início</a></li>
            <li class="breadcrumb-item active">Professores</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
	                <tr>
	                  <th>Nome</th>
	                  <th>Cadastro</th>
	                  <th>Email</th>
	                  <th>Adicionado</th>
	                  <th>Atualizado</th>                  
	                </tr>
                </thead>
                <tbody>
                	@foreach($professores as $professores)
		                <tr>
		                  <td>{{ $professores->name }}</td>
		                  <td>{{ $professores->id }}</td>
		                  <td>{{ $professores->email }}</td>
		                  <td>{{ $professores->created_at->diffForHumans() }}</td>
		                  <td>{{ $professores->updated_at->diffForHumans() }}</td>
		                </tr>
	                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->

</div>
 <!-- /.content-wrapper -->

@endsection
