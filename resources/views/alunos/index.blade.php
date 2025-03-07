@extends('layouts.main')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Alunos</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('start') }}">Início</a></li>
            <li class="breadcrumb-item active">Alunos</li>
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
                	@foreach($alunos as $aluno)
		                <tr>
		                  <td>{{ $aluno->name }}</td>
		                  <td>{{ $aluno->id }}</td>
		                  <td>{{ $aluno->email }}</td>
		                  <td>{{ $aluno->created_at->diffForHumans() }}</td>
		                  <td>{{ $aluno->updated_at->diffForHumans() }}</td>
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
