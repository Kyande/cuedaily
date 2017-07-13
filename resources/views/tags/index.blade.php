@extends('layouts.master')

@section('content')
	
	<div>
		<!-- show tags -->
		<div>
			
			<h4>All tags</h4>

			<hr class="style1">
		
				<table class="table table-hover" style="width: 40%;color: black;">
					<tr>
						<th>No.</th>
						<th>Name</th>
						<th></th>
					</tr>
					@forelse($tags as $key => $tag)

						<tr>
							<td>{{ $key+1 }}</td>
							<td>{{ $tag->name }}</td>
							<td>
								<a href="/tag/edit/{{ $tag->id }}" class="glyphicon glyphicon-edit"></a>
							</td>
						</tr>
					@empty
						<div style="width: 30%;" class="alert alert-danger">
							No tags available, add some.
						</div>
					@endforelse
				</table>
				
				<hr class="style2">

				<div>	
					You can add one too <a href="/tags/add">Here..</a>.	
				</div>	

		</div>

	</div>

@endsection