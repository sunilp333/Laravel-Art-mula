@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add New Page</div>

                    <div class="panel-body">

					 @if ($errors->count() > 0)
                     <ul>
                      @foreach($errors->all() as $error)
                       <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                   @endif


                        <form action="{{ route('pages.store') }}" method="post">
                            {{ csrf_field() }}
                            Page name:
                            <br />
                            <input type="text" name="page_name" value="{{ old('page_name') }}" />
                            <br /><br />
                            Page Description:
                            <br />
                            <input type="text" name="page_description" value="{{ old('page_description') }}" />
                            <br /><br />
                            <input type="submit" value="Submit" class="btn btn-default" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection