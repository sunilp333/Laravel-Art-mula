@extends('layouts.master')
@section('scripts')
@section('content')

<section id="main-content">
          <section class="wrapper">
          	<!--<h3>Manage Informations</h3>-->
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                       
						<h4>
						<span><b>Manage Informations contents</b></span>
						<span class="pull-right"><a class="btn bg-warning-yellow btn-sm" href=""><i class="fa fa-plus"></i> <b>Add New Page</b></a></span>
						</h4>

                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>Code</th>
                                  <th>Company</th>
                                  <th class="numeric">Price</th>
                                  <th class="numeric">Change</th>
                                  <th class="numeric">Change %</th>
                                  <th class="numeric">Open</th>
                                  <th class="numeric">High</th>
                                  <th class="numeric">Low</th>
                                  <th class="numeric text-center">Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>AAC</td>
                                  <td>AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
                                  <td class="numeric">$1.38</td>
                                  <td class="numeric">-0.01</td>
                                  <td class="numeric">-0.36%</td>
                                  <td class="numeric">$1.39</td>
                                  <td class="numeric">$1.39</td>
                                  <td class="numeric">$1.38</td>
                                  <td class="numeric">
								    <div class="text-center hidden-phone">
                                         <button class="btn btn-success btn-xs fa fa-check"></button>
                                         <button class="btn btn-primary btn-xs fa fa-pencil"></button>
                                         <button class="btn btn-danger btn-xs fa fa-trash-o"></button>
                                    </div>
								  
								  </td>
                              </tr>
                             
                              </tbody>
                          </table>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row --> 
		</section>
</section>
@endsection	