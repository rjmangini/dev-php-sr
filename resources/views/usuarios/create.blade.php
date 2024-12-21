@extends('usuarios.layout')
    
@section('content')
  
<div class="card mt-5">
  <h2 class="card-header">Adicionar Novo Usuário</h2>
  <div class="card-body">
  
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('usuarios.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>
  
    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
  
        <div class="mb-4">
            <label for="inputName" class="form-label"><strong>Nome:</strong></label>
            <input 
                type="text" 
                name="name" 
                class="form-control @error('name') is-invalid @enderror" 
                id="inputName" 
                placeholder="Nome do Usuário"
                value="{{ old('name') }}" />
            @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
  
        <div class="mb-4">
            <label for="inputEmail" class="form-label"><strong>email:</strong></label>
            <input
                type="email"
                name="email"
                class="form-control @error('detail') is-invalid @enderror" 
                id="inputEmail" 
                placeholder="e-mail"
                value="{{ old('email') }}" />
            @error('email')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-2">
            <label for="inputPassword" class="form-label"><strong>Senha:</strong></label>
            <input
                type="password"
                name="password"
                class="form-control @error('detail') is-invalid @enderror" 
                id="inputPassword" 
                placeholder="informe a senha" />
            @error('password')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-2">
            <label for="inputPassword1" class="form-label"><strong>Confirme Senha:</strong></label>
            <input
                type="password"
                name="password1"
                class="form-control @error('detail') is-invalid @enderror" 
                id="inputPassword1" 
                placeholder="informe a senha" />
            @error('password1')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Enviar</button>
    </form>
  
  </div>
</div>
@endsection