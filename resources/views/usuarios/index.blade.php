@extends('usuarios.layout')
   
@section('content')
  
<div class="card mt-5">
  <h2 class="card-header">Cadastro de Usuários - First Decision</h2>
  <div class="card-body">
          
        @session('success')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
        @endsession
  
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="{{ route('usuarios.create') }}"> <i class="fa fa-plus"></i> Novo Usuário</a>
        </div>
  
        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th width="80px">ID</th>
                    <th>Name</th>
                    <th>e-mail</th>
                    <th width="250px">Action</th>
                </tr>
            </thead>
  
            <tbody>
            @forelse ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>
                        <form action="{{ route('usuarios.destroy',$usuario->id) }}" method="POST">
                            <a class="btn btn-info btn-sm" href="{{ route('usuarios.show',$usuario->id) }}"><i class="fa-solid fa-list"></i> Exibir</a>
                            <a class="btn btn-primary btn-sm" href="{{ route('usuarios.edit',$usuario->id) }}"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Excluir</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Nenhum usuário cadastrado</td>
                </tr>
            @endforelse
            </tbody>
  
        </table>
        
        {!! $usuarios->links() !!}
  
  </div>
</div>  
@endsection