@extends('layouts.master')
@section('scripts')
@section('content')

<section id="main-content">
   <section class="wrapper">
      <div class="row mt">
         <div class="col-lg-12">
            <div class="form-panel">
               <h4><span><b>Update Members Record</b></span>
                  <span class="pull-right"><a class="btn bg-warning-yellow btn-sm" href="{{  route('members.index') }}"><i class="fa fa-step-backward"></i> <b>Back</b></a></span>
               </h4>
               <form class="form-horizontal style-form" method="post" action="{{ route('members.update', $MembersRecord->id) }}">
                 <input type="hidden" name="_method" value="PUT">
			      {{ csrf_field() }}
				  <div class="form-group col-md-12">
                     <div class="col-sm-6">
                        <label><b>Name</b></label>
                        <input type="text" name="member_name" class="form-control" value="{{ $MembersRecord->name }}">                           
                     </div>
                     <div class="col-sm-6">
                        <label><b>Email</b></label>
                        <input type="text" name="member_email" class="form-control" value="{{ $MembersRecord->email }}" readonly>                           
                     </div>
                  </div>

				    <div class="form-group col-md-12">
                     <div class="col-sm-6">
                        <label><b>Phone Number</b></label>
                        <input type="text" name="member_phone_number" class="form-control" value="{{ $MembersRecord->phone_number }}">                           
                     </div>
                     <div class="col-sm-6">
                        <label><b>Contact Address</b></label>
                        <input type="text" name="member_contact_address" class="form-control" value="{{ $MembersRecord->contact_address }}">                           
                     </div>
                  </div>      

                  <div class="form-group ">
                     <h4><span>&nbsp;</span>
                        <span class="pull-right">
						  <button type="submit" class="btn bg-warning-yellow btn-sm"><i class="fa fa-save"></i> <b>Save</b></button>
						</span>
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