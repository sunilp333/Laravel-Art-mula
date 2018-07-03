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
               
               <form class="form-horizontal style-form" method="post" action="{{ route('paymentoptions.update', 1) }}">
			      <input type="hidden" name="_method" value="PUT">
                   {{ csrf_field() }}
				  <h4><span><b>Manage Payment Options</b></span>
                     <span class="pull-right"><button type="submit" class="btn bg-warning-yellow btn-sm"><i class="fa fa-save"></i> <b>Save</b></button></span></h4>
                 
				  <div class="form-group col-md-12">
                     <div class="col-sm-6">
                        <label><b>Currency</b></label>
                        <input type="text" name="currency" class="form-control"  value="{{ $PaymentSettingRecord->currency }}">                           
                     </div>
                     <div class="col-sm-6">
                        <label><b>Currency Code</b></label>
                        <input type="text" name="currency_code" class="form-control" value="{{ $PaymentSettingRecord->	currency_code }}">                           
                     </div>
                  </div>

				  <div class="form-group col-md-12">
                     <div class="col-sm-6">
                        <label><b>Stripe Publish Key - Live environment</b></label>
                        <input type="text" name="stripe_client_id" class="form-control" value="{{ $PaymentSettingRecord->stripe_client_id }}">                           
                     </div>
                     <div class="col-sm-6">
                        <label><b>Stripe Secret Key - Live environment</b></label>
                        <input type="text" name="stripe_secret_key" class="form-control" value="{{ $PaymentSettingRecord->stripe_secret_key }}">                           
                     </div>
                  </div>
               
				   
				   <div class="form-group col-md-12">
                     <div class="col-sm-6">
                        <label><b>Test Stripe Publish Key - Test environment</b></label>
                        <input type="text" name="test_stripe_secret_key" class="form-control" value="{{ $PaymentSettingRecord->test_stripe_secret_key }}">                           
                     </div>
                     <div class="col-sm-6">
                        <label><b>Test Stripe Secret Key - Test environment</b></label>
                        <input type="text" name="test_stripe_client_id" class="form-control" value="{{ $PaymentSettingRecord->test_stripe_client_id }}">                           
                     </div>
                  </div>

				  <div class="form-group col-md-12">
                     <div class="col-sm-12">  <label><b>Stripe Gateway Environment</b></label>
                        <div class="radio">
                           <label>
                           <input type="radio" name="stripe_gateway_environment" id="stripe_gateway_environment0" value="0" <?php if($PaymentSettingRecord->stripe_gateway_environment==0){ echo 'checked'; } ?>>SendBox 
                           </label>
                        </div>
                        <div class="radio">
                           <label>
                           <input type="radio" name="stripe_gateway_environment" id="stripe_gateway_environment1" value="1" <?php if($PaymentSettingRecord->stripe_gateway_environment==1){ echo 'checked'; } ?>>Live

                           </label>
                        </div>
                     </div>
                  </div>


                
                  <div class="form-group">
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