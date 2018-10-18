@extends('adminlte::default')

@section('content')
	<div class="container-fluid">
	    <h3>Historicos</h3>

	    <table class="table table-striped table-bordered table-hover">
	    	<thead>
	    		<tr>
	    			<th>Hábito</th>
	    			<th>Data</th>
	    			<th>Ação</th>
	    		</tr>
	    	</thead>

	    	<tbody>
		    	@foreach($historicos as $hist)
		    		<tr>
		    			<td>{{$hist->habito->nome}}</td>
				        <td>{{$hist->data}}</td>
				        <td>
				        	<a href="{{ route('historicos.edit', ['id'=>$hist->id]) }}"
				        	   class="btn-sm btn-success">Editar</a>
				        	<a href="{{ route('historicos.destroy', ['id'=>$hist->id]) }}"
				        	   class="btn-sm btn-danger">Excluir</a>
				        </td>
				    </tr>
			    @endforeach
			</tbody>
		</table>
	</div>
@endsection