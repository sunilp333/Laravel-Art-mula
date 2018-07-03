@extends('layouts.master')
@section('scripts')
@section('content')

<section id="main-content">
          <section class="wrapper">
          	<!--<h3>Manage Informations</h3>-->
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">

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
                       
						<h4>
						<span><b>Manage Informations contents</b></span>
						<span class="pull-right"><a class="btn bg-warning-yellow btn-sm" href="{{ route('page.create') }}"><i class="fa fa-plus"></i> <b>Add New Page</b></a></span>
						</h4>

                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th class="numeric">Page Title</th>                                 
                                  <th class="numeric text-center">Display Order</th>
                                  <th class="numeric text-center">Display Status</th>                                  
                                  <th class="numeric text-center">Action</th>
                              </tr>
                              </thead>
                              <tbody>

							  @forelse($PagesRecord as $PageRecord)
                              <tr>                                  
                                  <td>{{ $PageRecord->page_name }}</td>
                                  <td class="text-center">{{ $PageRecord->page_order }}</td>
                                  
								  <td class="text-center">
								      @if($PageRecord->display_status==1) 
									    <span><b><i class="btn btn-success btn-xs fa fa-eye"></i></i></b></span>
									  @else 
									    <span><b><i class="btn btn-danger btn-xs fa fa-eye-slash"></i></b></span>
									@endif
								  </td>

                                  <td>
								    <div class="text-center">                                         
                                         <a href="{{ route('page.edit', $PageRecord->id) }}"><button class="btn btn-primary btn-xs fa fa-pencil"></button></a>
                                         
										 <!-- Delete : Start -->
										 <form action="{{ route('page.destroy', $PageRecord->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display: inline">
										 <input type="hidden" name="_method" value="DELETE">
                                          {{ csrf_field() }}
										 <button class="btn btn-danger btn-xs fa fa-trash-o"></button>

										  </form>
										 <!-- Delete : End -->

                                    </div>
								  </td>
                              </tr>
							   @empty

							    @endforelse
                             
                              </tbody>
                          </table>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row --> 
		</section>
</section>
@endsection	