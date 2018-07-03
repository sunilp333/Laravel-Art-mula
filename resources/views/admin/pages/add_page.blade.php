@extends('layouts.master')
@section('scripts')
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
@endsection
@section('content')

<section id="main-content">
   <section class="wrapper">
      <div class="row mt">
         <div class="col-lg-12">
            <div class="form-panel">

			   @if ($errors->count() > 0)
			           <div class="alert alert-danger">
					     <button type="button" class="close" data-dismiss="alert">x</button>
					    @foreach($errors->all() as $error)
					      <p><b>{{ $error }}</b></p>
					    @endforeach
					  </div>
					 @endif

               <h4><span><b>Add Information contents</b></span>
                  <span class="pull-right"><a class="btn bg-warning-yellow btn-sm" href="{{ route('page.index') }}"><i class="fa fa-step-backward"></i> <b>Back</b></a></span>
               </h4>
               <form class="form-horizontal style-form" method="post" action="{{ route('page.store') }}">
			    {{ csrf_field() }}
                  <div class="form-group col-md-12">
                     <div class="col-sm-6">
                        <label><b>Page Title</b></label>
                        <input type="text" name="page_title" class="form-control" value="{{ old('page_title') }}">                           
                     </div>
                     <div class="col-sm-6">
                        <label><b>Page Slug </b></label>
                        <input type="text" name="page_slug" class="form-control" Placeholder="optional..." value="{{ old('page_slug') }}">                           
                     </div>
                  </div>
                  <div class="form-group col-md-12">
                     <div class="col-sm-12">
                        <label><b>Page Description</b></label>
                        <textarea type="text" name="page_description" id="page_description" class="form-control">{{ old('page_description') }}</textarea>
						<script>CKEDITOR.replace( 'page_description' );</script>
                     </div>
                  </div>

				   <div class="form-group col-md-12">
                     <div class="col-sm-6">
                        <label><b>Meta Title</b></label>
                        <input type="text" name="page_meta_title" class="form-control" value="{{ old('page_meta_title') }}" Placeholder="optional...">                           
                     </div>
                     <div class="col-sm-6">
                        <label><b>Meta Keyword </b></label>
                        <input type="text" name="page_meta_keyword" class="form-control" value="{{ old('page_meta_keyword') }}" Placeholder="optional...">                           
                     </div>
                  </div>

				  <div class="form-group col-md-12">
                     <div class="col-sm-12">
                        <label><b>Meta Description</b></label>
                        <input type="text" name="page_meta_description" class="form-control" value="{{ old('page_meta_description') }}" Placeholder="optional...">                           
                     </div>
                  </div>

				  <div class="form-group col-md-12">
                     <div class="col-sm-6">
                        <label><b>Page Order</b></label>
                        <input type="text" name="page_order" class="form-control" value="{{ old('page_order') }}" >                           
                     </div>
                     <div class="col-sm-6">
                        <label><b>Page Status </b></label>
                        <div class="radio">
                           <label><input type="radio" name="page_status" id="optionsRadios1" value="1" checked>Show</label>
                        </div>
                        <div class="radio">
                           <label><input type="radio" name="page_status" id="optionsRadios0" value="0">Hide</label>
                        </div>                        
                     </div>
                  </div>
                  <div class="form-group ">
                     <h4><span>&nbsp;</span>
                        <span class="pull-right"><button type="submit" class="btn bg-warning-yellow btn-sm"><i class="fa fa-save"></i> <b>Save</b></button></span>
                     </h4>
                  </div>
               </form>
            </div>
         </div>
         <!-- col-lg-12-->      	
      </div>
      <!-- /row -->
   </section>
   <!--/wrapper -->
</section>
@endsection	