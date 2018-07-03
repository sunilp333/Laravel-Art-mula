@extends('layouts.app')
@section('scripts')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pages</div>

                    <div class="panel-body">
					 @if (session('message'))
                    <div class="alert alert-info">{{ session('message') }}</div>
                    @endif 
                       
					    @can('create', Author::class)
						<a href="{{ route('pages.create') }}" class="btn btn-default">Add New Author</a>
                        @endcan

                        <table class="table table-bordered">
                            <thead>
                                <tr>
								    @can('delete', Author::class)
									<th><input type="checkbox" class="checkbox_all"></th>
                                    @endcan

                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Actions</th>
									 
                                    </tr>

	   
                            </thead>
                            <tbody>
                                @forelse($authors as $author)
                                <tr>
								  
								   @can('delete', Author::class)
								   <td><input type="checkbox" class="checkbox_delete" name="entries_to_delete[]" value="{{ $author->id }}" /></td>
								   @endcan

                                    <td>{{ $author->page_name }}</td>
                                    <td>{{ $author->page_description }}</td>
                                    <td>
                                        <a href="{{ route('pages.edit', $author->id) }}" class="btn btn-default alert-success">Edit Page</a>
                                        
										
										@can('delete', Author::class)
										<form action="{{ route('pages.destroy', $author->id) }}" method="POST" style="display: inline" onsubmit="return confirm('Are you sure?');">
                                            <input type="hidden" name="_method" value="DELETE">
                                            {{ csrf_field() }}
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
										 @endcan

                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No entries found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                      
                        @can('delete', Author::class)  
						<form action="{{ route('pages.mass_destroy') }}" method="post" onsubmit="return confirm('Are you sure?');">
                        {{ csrf_field() }}
                         <input type="hidden" name="_method" value="DELETE">
                         <input type="hidden" name="ids" id="ids" value="" />
                         <input type="submit" value="Delete selected" class="btn btn-danger" />
                          </form>
						   @endcan


						{{ $authors->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>

function getIDs()
{
            var ids = [];
            $('.checkbox_delete').each(function () {
                if($(this).is(":checked")) {
                    ids.push($(this).val());
                }
            });
            $('#ids').val(ids.join());
}

       



$(document).ready(function(){
  $(".checkbox_all").click(function(){
		$('input.checkbox_delete').prop('checked', this.checked);
		 getIDs();
    });

	 $('.checkbox_delete').change(function() {
            getIDs();
        });

});
  
</script>


@endsection	