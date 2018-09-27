@extends('adminlte::default')

@section('content')
	<div class="container-fluid">
	    <h3>Hábitos</h3>

	    <table class="table table-striped table-bordered table-hover">
	    	<thead>
	    		<tr>
	    			<th>ID</th>
	    			<th>Nome</th>
	    			<th>Descrição</th>
	    			<th>Tipo</th>
	    			<th>Ação</th>
	    		</tr>
	    	</thead>

	    	<tbody>
		    	@foreach($habitos as $hab)
		    		<tr>
		    			<td>{{$hab->id}}</td>
				        <td>{{$hab->nome}}</td>
				        <td>{{$hab->descricao}}</td>
				        
				        @if($hab->tp_habito == 'B')
				        	<td>Bom</td>
				        @elseif($hab->tp_habito == 'R')
				        	<td>Ruim</td>
				        @endif


				        <td>
				        	<a href="{{ route('habitos.edit', ['id'=>$hab->id]) }}"
				        	   class="btn-sm btn-success">Editar</a>
				        	<a href="{{ route('habitos.destroy', ['id'=>$hab->id]) }}"
				        	   class="btn-sm btn-danger">Excluir</a>
				        </td>
				    </tr>
			    @endforeach
			</tbody>
		</table>
	</div>
@endsection