@extends('layouts.master')
@section('scripts')
@section('content')

<section id="main-content">
   <section class="wrapper">
      <div class="row mt">
         <div class="col-lg-12">
            <div class="form-panel">
               <h4><span><b>Add Informations contents</b></span>
                  <span class="pull-right"><a class="btn bg-warning-yellow btn-sm" href=""><i class="fa fa-step-backward"></i> <b>Back</b></a></span>
               </h4>
               <form class="form-horizontal style-form" method="get">
                  <div class="form-group col-md-12">
                     <div class="col-sm-6">
                        <label><b>Default</b></label>
                        <input type="text" class="form-control">                           
                     </div>
                     <div class="col-sm-6">
                        <label><b>Default2</b></label>
                        <input type="text" class="form-control">                           
                     </div>
                  </div>
                  <div class="form-group col-md-12">
                     <div class="col-sm-12">
                        <label><b>Default</b></label>
                        <input type="text" class="form-control">                           
                     </div>
                  </div>
                  <div class="form-group col-md-12">
                     <div class="col-sm-12">
                        <div class="checkbox">
                           <label>
                           <input type="checkbox" value="">
                           Option one is this and that&mdash;be sure to include why it's great
                           </label>
                        </div>
                        <div class="radio">
                           <label>
                           <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                           Option one is this and that&mdash;be sure to include why it's great
                           </label>
                        </div>
                        <div class="radio">
                           <label>
                           <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                           Option two can be something else and selecting it will deselect option one
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="form-group ">
                     <h4><span>&nbsp;</span>
                        <span class="pull-right"><a class="btn bg-warning-yellow btn-sm" href=""><i class="fa fa-save"></i> <b>Save</b></a></span>
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