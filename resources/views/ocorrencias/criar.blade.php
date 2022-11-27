@extends('templates/layout')

@section('titulo', 'Registrar Ocorrência')

@section('corpo')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>Registrar Nova Ocorrência</h1>
		<form action="{{ route('ocorrencia/inserir') }}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label for="title">Título <span class="require">*</span></label>
				<input type="text" class="form-control" name="titulo" placeholder="Título da ocorrência">
			</div>
			<div class="form-group">
				<label for="title">Endereço <span class="require">*</span></label>
				<input type="text" class="form-control" name="endereco" placeholder="Ex: Rua São Paulo...">
			</div>
			<div class="form-group">
				<label for="title">Bairro <span class="require">*</span></label>
				<input type="text" class="form-control" name="bairro" placeholder="Ex: Centro">
			</div>
			<div class="form-group">
				<label for="title">Cidade <span class="require">*</span></label>
				<input type="text" class="form-control" name="cidade" placeholder="Cidade">
			</div>
			<div class="form-group">
				<label for="title">Categoria <span class="require">*</span></label>
				<select class="form-select form-select-sm" aria-label=".form-select-sm example">
					<option selected>Selecione uma categoria</option>
					<option value="1">Animal nas Ruas</option>
					<option value="2">Denúncia</option>
					<option value="3">Animal Desaparecido</option>
					<option value="4">Resgate</option>
				</select>
			</div>
			<div class="form-group">
				<label for="description">Descrição <span class="require">*</span></label>
				<textarea rows="5" name="descricao" class="form-control" name="description" placeholder="Descreva brevemente informações sobre a ocorrência"></textarea>
			</div>
			<br>
			<div class="form-group">
				<p>Foto: <input type="file" name="img"></p>
			</div>

			<div class="form-group">
				<button type="submit" value="Gravar" class="btn btn-primary">
					Criar
				</button>
				<button class="btn btn-default">
					Cancelar
				</button>
			</div>
		</form>
	</div>

</div>

@endsection