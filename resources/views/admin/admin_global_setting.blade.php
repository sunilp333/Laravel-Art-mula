@extends('layouts.master')
@section('scripts')
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

					 @if (session('message'))
                    <div class="alert alert-success">
					 <button type="button" class="close" data-dismiss="alert">x</button><b>{{ session('message') }}</b></div>
                    @endif 
               
               <form class="form-horizontal style-form" method="post" action="{{ route('siteoptions.update', 1) }}"  enctype="multipart/form-data">
			      <input type="hidden" name="_method" value="PUT">
                   {{ csrf_field() }}
				  <h4><span><b>Manage Site Options</b></span>
                     <span class="pull-right"><button type="submit" class="btn bg-warning-yellow btn-sm"><i class="fa fa-save"></i> <b>Save</b></button></span></h4>
                 
				  <div class="form-group col-md-12">
                     <div class="col-sm-6">
                        <label><b>Email</b></label>
                        <input type="text" name="siteoptions_email" class="form-control"  value="{{ $GlobalSettingRecord->email }}">                           
                     </div>
                     <div class="col-sm-6">
                        <label><b>No Reply Email</b></label>
                        <input type="text" name="siteoptions_noreply_email" class="form-control" value="{{ $GlobalSettingRecord->no_reply_email }}">                           
                     </div>
                  </div>

				  <div class="form-group col-md-12">
                     <div class="col-sm-6">
                        <label><b>Phone Number</b></label>
                        <input type="text" name="siteoptions_phone_number" class="form-control" value="{{ $GlobalSettingRecord->phone_number }}">                           
                     </div>
                     <div class="col-sm-6">
                        <label><b>Contact Address</b></label>
                        <input type="text" name="siteoptions_contact_address" class="form-control" value="{{ $GlobalSettingRecord->contact_address }}">                           
                     </div>
                  </div>
                   <input type="hidden" name="old_logo_image" value="{{ $GlobalSettingRecord->logo_image }}">
				   
				   <div class="form-group col-md-12">
                     <div class="col-sm-6">
                        <label><b>Meta title</b></label>
                        <input type="text" name="siteoptions_meta_title" class="form-control" value="{{ $GlobalSettingRecord->meta_title }}">                           
                     </div>
                     <div class="col-sm-6">
                        <label><b>Meta Keywords</b></label>
                        <input type="text" name="siteoptions_meta_keywords" class="form-control" value="{{ $GlobalSettingRecord->meta_keywords }}">                           
                     </div>
                  </div>

                  <div class="form-group col-md-12">
                     <div class="col-sm-12">
                        <label><b>Meta Description</b></label>
                        <input type="text" name="siteoptions_meta_descriptions" class="form-control" value="{{ $GlobalSettingRecord->meta_description }}">                           
                     </div>
                  </div>

				   <div class="form-group col-md-12">
                     <div class="col-sm-6">
                         <img src="<?php echo asset("uploads/web_images/$GlobalSettingRecord->logo_image"); ?>" height="80px" width="250px">                       
                     </div>
                     <div class="col-sm-6">
                        <label><b>Upload Logo</b></label>
                        <input type="file" name="siteoptions_logo" class="form-control">                           
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