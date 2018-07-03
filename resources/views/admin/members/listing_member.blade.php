@extends('layouts.master')
@section('scripts')
@section('content')

<section id="main-content">
          <section class="wrapper">
          	<!--<h3>Manage Informations</h3>-->
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">

					  @if (session('message'))
                       <div class="alert alert-success">
					     <button type="button" class="close" data-dismiss="alert">x</button><b>{{ session('message') }}</b>
					   </div>
                     @endif 
                       
						<h4>
						<span><b>Manage Members</b></span>
						<span class="pull-right">&nbsp;</span>
						</h4>

                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              
							  
							  <tr>
							      <th>User ID</th>
                                  <th class="numeric">Name</th>                               
                                  <th class="numeric">Email</th> 
								  <th class="numeric">Role</th>  
                                  <th class="numeric text-center">Action</th>
                              </tr>

                              </thead>
                              <tbody>

                              @forelse($MembersRecord as $MemberRecord)
							  <tr>
                                  <td>{{ $MemberRecord->id }}</td>  
								  <td>{{ $MemberRecord->name }}</td>                                
                                  <td>{{ $MemberRecord->email }}</td>
								    <td>{{ $MemberRecord->user_type }}</td>
                                  <td class="numeric">

								    <div class="text-center hidden-phone">
                                         <a href="{{  route('members.edit', $MemberRecord->main_id) }}"><button class="btn btn-primary btn-xs fa fa-pencil"></button></a>
                                         <!--<button class="btn btn-danger btn-xs fa fa-trash-o"></button>-->
                                    </div>
								  
								  </td>
                              </tr>
							   @empty

							   @endforelse
                             
                              </tbody>
                          </table>

                           {{ $MembersRecord->links() }}

                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row --> 
		</section>
</section>
@endsection	