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

               <h4><span><b>Update Information contents</b></span>
                  <span class="pull-right"><a class="btn bg-warning-yellow btn-sm" href="{{ route('page.index') }}"><i class="fa fa-step-backward"></i> <b>Back</b></a></span>
               </h4>
               <form class="form-horizontal style-form" method="post" action="{{ route('page.update', $PageRecord->id) }}">
			   <input type="hidden" name="_method" value="PUT">
			    {{ csrf_field() }}
                  <div class="form-group col-md-12">
                     <div class="col-sm-6">
                        <label><b>Page Title</b></label>
                        <input type="text" class="form-control" name="page_title"  value="{{ $PageRecord->page_name }}">                           
                     </div>
                     <div class="col-sm-6">
                        <label><b>Page Slug </b></label>
                        <input type="text" class="form-control" Placeholder="optional..." name="page_slug"  value="{{ $PageRecord->page_slug }}">                           
                     </div>
                  </div>
                  <div class="form-group col-md-12">
                     <div class="col-sm-12">
                        <label><b>Page Description</b></label>
                        <textarea type="text" class="form-control" name="page_description">{{ $PageRecord->page_description }}</textarea>   <script>CKEDITOR.replace( 'page_description' );</script>                     
                     </div>
                  </div>

				   <div class="form-group col-md-12">
                     <div class="col-sm-6">
                        <label><b>Meta Title</b></label>
                        <input type="text" class="form-control" name="page_meta_title"  value="{{ $PageRecord->	meta_title }}">                           
                     </div>
                     <div class="col-sm-6">
                        <label><b>Meta Keyword </b></label>
                        <input type="text" class="form-control" name="page_meta_keyword"  value="{{ $PageRecord->meta_keyword }}">                           
                     </div>
                  </div>

				  <div class="form-group col-md-12">
                     <div class="col-sm-12">
                        <label><b>Meta Description</b></label>
                        <input type="text" class="form-control" name="page_meta_description"  value="{{ $PageRecord->meta_description }}">                           
                     </div>
                  </div>

				  <div class="form-group col-md-12">
                     <div class="col-sm-6">
                        <label><b>Page Order</b></label>
                        <input type="text" class="form-control" name="page_order"  value="{{ $PageRecord->page_order }}">                           
                     </div>
                     <div class="col-sm-6">
                        <label><b>Page Status </b></label>
                        <div class="radio">
                           <label>
                           <input type="radio"name="page_status" id="optionsRadios1" value="1" <?php if($PageRecord->display_status==1){ echo 'checked'; } ?>>
                            Show
                           </label>
                        </div>
                        <div class="radio">
                           <label>
                           <input type="radio" name="page_status" id="optionsRadios0" value="0" <?php if($PageRecord->display_status==0){ echo 'checked'; } ?>>
                          Hide
                           </label>
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