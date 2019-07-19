@extends('layouts.template')

@section('main')
<nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-minimize">
              <button id="minimizeSidebar" class="btn btn-just-icon btn-warning btn-fab btn-round">
                <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
              </button>
            </div>
            <span class="navbar-brand">Create Campaign</span>
            <div class="d-block d-lg-none dropdown">
              <a class="nav-link" href="#" id="navbarDropdownMenuLink-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">notifications</i>
                <span class="notification"><span>5</span></span>
              </a>
              <div class="dropdown-menu drop-xs" aria-labelledby="navbarDropdownMenuLink-1">
                <a class="dropdown-item" href="#">Mike John responded to your email</a>
                <a class="dropdown-item" href="#">You have 5 new tasks</a>
                <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                <a class="dropdown-item" href="#">Another Notification</a>
                <a class="dropdown-item" href="#">Another One</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="see-all">
                  <span>Show More..</span>
                </a>
              </div>
            </div>
          </div>
		  
		  @include('_partial.flash_message')
		  
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
              <!-- <form class="navbar-form">
                <div class="input-group no-border">
                  <input type="text" value="" class="form-control" placeholder="Search...">
                  <button type="submit" class="btn btn-white btn-round btn-just-icon">
                    <i class="material-icons">search</i>
                    <div class="ripple-container"></div>
                  </button>
                </div>
              </form> -->
			  {{--
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification"><span>5</span></span>
                  <p class="d-lg-none d-md-block">
                    Notification
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="see-all">
                    <span>Show More..</span>
                  </a>
                </div>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li> -->
            </ul>
			--}}
          </div>
        </div>
      </nav>
        <!-- End Navbar -->

        <div class="content mt-0">
          <div class="content">
            <div class="container-fluid">
              {!! Form::open(['url'=>'campaign', 'files'=>true]) !!}
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header card-header-text card-header-warning">
                        <div class="card-text">
                          <h5 class="card-title">Data Campaign</h5>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="input-group form-control-lg">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">flag</i>
                            </span>
                          </div>
						  
						  
							@if($errors->any())
								<div class="form-group {{ $errors->has('title') ? 'has-error' : 'has-success' }}">
							@else
								<div class="form-group">
							@endif
								{!! Form::label('campaignName', 'Campaign Name * ', ['class'=>'bmd-label-floating']) !!}
								{!! Form::text('title', null, ['class'=>'form-control']) !!}
								@if($errors->has('title'))
									<span class="help-block">{{ $errors->first('title') }}</span>
								@endif
							</div>
						  

                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="input-group form-control-lg">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">event_available</i>
                                </span>
                              </div>
							  
							  {{--
                              <div class="form-group">
                                <label for="startDate" class="bmd-label-floating">Start Date Campaign *</label>
                                <input type="text" class="form-control datepicker" id="startDate" name="start_date" required value="11/11/11">
                              </div>
							  --}}
							  
								@if($errors->any())
									<div class="form-group {{ $errors->has('start_date') ? 'has-error' : 'has-success' }}">
								@else
									<div class="form-group">
								@endif
									{!! Form::label('startDate', 'Start Date Campaign *', ['class'=>'bmd-label-floating']) !!}
									{!! Form::text('start_date', \Carbon\Carbon::now(), ['class'=>'form-control datepicker', 'id'=>'startDate', 'required'=>'required']) !!}
									@if($errors->has('start_date'))
										<span class="help-block">{{ $errors->first('start_date') }}</span>
									@endif
								</div>
							  
							  
							  
							  
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="input-group form-control-lg">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">event</i>
                                </span>
                              </div>
							  
							  
							  {{--
                              <div class="form-group">
                                <label for="endDate" class="bmd-label-floating">End Date Campaign *</label>
                                <input type="text" class="form-control datepicker" id="endDate" name="end_date" required value="11/11/11">
                              </div>
							  --}}
							  
								@if($errors->any())
									<div class="form-group {{ $errors->has('start_date') ? 'has-error' : 'has-success' }}">
								@else
									<div class="form-group">
								@endif
									{!! Form::label('endDate', 'End Date Campaign *', ['class'=>'bmd-label-floating']) !!}
									{!! Form::text('end_date', \Carbon\Carbon::now(), ['class'=>'form-control datepicker', 'id'=>'endDate', 'required'=>'required']) !!}
									@if($errors->has('end_date'))
										<span class="help-block">{{ $errors->first('end_date') }}</span>
									@endif
								</div>
							  
							  
							  
                            </div>
                          </div>
                        </div>
                        <div class="input-group form-control-lg">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <b class="">Rp</b>
                            </span>
                          </div>
						  
						  
						  {{--
                          <div class="form-group">
                            <label for="campaignBudget" class="bmd-label-floating">Campaign Budget</label>
                            <input type="number" class="form-control" id="campaignBudget" name="price">
                          </div>
						  --}}
						  
						  
								@if($errors->any())
									<div class="form-group {{ $errors->has('price') ? 'has-error' : 'has-success' }}">
								@else
									<div class="form-group">
								@endif
									{!! Form::label('campaignBudget', 'Campaign Budget ', ['class'=>'bmd-label-floating']) !!}
									{!! Form::input('number', 'price', null, ['class'=>'form-control', 'id'=>'campaignBudget']) !!}
									@if($errors->has('price'))
										<span class="help-block">{{ $errors->first('price') }}</span>
									@endif
								</div>
						  
						  
						  
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header card-header-text card-header-warning">
                        <div class="card-text">
                          <h5 class="card-title">Demografi & Detail</h5>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="row mb-5">
                          <div class="col-12">
                            <h5><b>Demografi</b></h5>
                          </div>
						  
							@if(count($list_demografi) > 0)
								@foreach($list_demografi as $key => $value)
									<div class="col-md-3">
										<div class="form-check form-check-inline">
										  <label class="form-check-label">{!! Form::checkbox('demografi_campaign[]', $key, null, ['class' => 'form-check-input']) !!} {{ $value }}
											  <span class="form-check-sign">
											  <span class="check"></span>
											</span>
										  </label>
										</div>
									</div>
								@endforeach
							@else
								<p>Nothing Demografi Data, please create firstly !</p>
							@endif

                        </div>
                        <div class="row">
                          <div class="col-12">
                            <h5 class="mb-1"><b>Detail Campaign</b></h5>
                          </div>
						  
						  
						  {{--
                          <div class="col-12">
                              <label for="detailCampaign" class="bmd-label-floating">Detail Campaign *</label>
                              <textarea class="form-control" id="detailCampaign" rows="3" required="" name="detail"></textarea>
                            </div>
						  --}}
							
							
							
							@if($errors->any())
								<div class="col-12 {{ $errors->has('title') ? 'has-error' : 'has-success' }}">
							@else
								<div class="col-12">
							@endif
								{!! Form::label('detailCampaign', 'Detail Campaign * : ', ['class'=>'bmd-label-floating']) !!}
								{!! Form::textarea('detail', null, ['class'=>'form-control', 'id'=>"detailCampaign", 'required'=>'required', 'rows'=>"3"]) !!}
								@if($errors->has('detail'))
									<span class="help-block">{{ $errors->first('detail') }}</span>
								@endif
							</div>
							
							
							
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header card-header-text card-header-warning">
                        <div class="card-text">
                          <h5 class="card-title">Location & Media</h5>
                        </div>
                      </div>
                      <div class="card-body">
					  
					  
					  <div class="col-12">
						  <!--
                            <button class="btn btn-outline-success btn-round" type="button" data-toggle="modal" data-target="#addProduct">
                              <i class="fa fa-plus-circle mr-1"></i> Add
                            </button>
							-->
					
						@if($errors->any())
							<div class="form-group {{ $errors->has('id_city') ? 'has-error' : 'has-success' }}">
						@else
							<div class="form-group">
						@endif
							{{--{!! Form::label('id_city', 'City : ', ['class'=>'form-group']) !!}--}}
							@if(count($list_city))
								{!! Form::select('id_city', $list_city, null, ['id'=>'id_city', 'class'=>'form-control selectpicker',  'data-style'=>"btn btn-link" , 'placeholder'=>'Choose City', 'title'=>"Choose City", 'required'=>"required"]) !!}
							@else
								<p>Not already city yet</p>
							@endif
							@if($errors->has('id_city'))
								<span class="help-block">{{ $errors->first('id_city') }}</span>
							@endif
						</div>
					</div>
					  
					  
					  
                        <div class="row" id="locationMedia">
                          
                          
						  
                          
                          
						  

                        </div>
						
						
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 text-center">
                  <button class="btn btn-round btn-success btn-lg">
                    <i class="fa fa-paper-plane mr-1"></i>
                     LET'S MAKE CAMPAIGN
                  </button>
                </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
		

      <!-- MODAL ADD PRODUCT -->
      <div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="add_product" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><b>Location & Media</b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <select class="form-control selectpicker" data-style="btn btn-link" title="Choose City" data-size="7" required="true" name="city">
                      <option value="" selected disabled>Choose City </option>
                      <option value="2">Paris </option>
                      <option value="3">Bucharest</option>
                      <option value="4">Rome</option>
                      <option value="5">New York</option>
                      <option value="6">Miami </option>
                    </select>
                  </div>
                </div>
                  <div class="col-6 col-sm-7">
                    <div class="form-group">
                      <select class="form-control selectpicker" data-style="btn btn-link" title="Choose City" data-size="7" required="true" name="media">
                        <option value="" selected disabled>Choose Media </option>
                        <option value="2">Billboard</option>
                        <option value="3">Videotron</option>
                        <option value="4">Wall Branding</option>
                        <option value="5">Baliho</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-4 col-sm-3">
                    <div class="form-group">
                      <label for="mediaAmount"></label>
                      <input type="number" class="form-control" id="mediaAmount" placeholder="Amount" name="amount">
                    </div>
                  </div>
                  <div class="col-2 col-sm-2 text-right pl-0">
                    <button class="btn btn-warning px-2 btn-sm">
                      <i class="material-icons">add</i>
                    </button>
                  </div>
              </div>
              <h5 class="mt-3 mb-1 ml-2"><b>Result</b></h5>
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th><b>Media</b></th>
                    <th><b>Amount</b></th>
                    <th><b>#</b></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Billboard</td>
                    <td>7</td>
                    <td class="td-actions">
                      <button type="button" rel="tooltip" class="btn btn-danger btn-round btn-sm">
                        <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-danger mr-2 btn-sm" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success btn-sm">Submit</button>
            </div>
          </div>
        </div>
      </div>
      <!-- END MODAL -->
@stop

@section('js')
	<script>
	$('#id_city').on('change', function() {
		media = '<div class="col-12 col-sm-4 col-md-4 locntype" id="media_city'+this.value+'">' +
							'<input type="hidden" name="media_city[]" value="'+this.value+'" />' +
                            '<div class="card" style="height:300px;">' +
                              '<div class="card-body">' +
                                '<span class="card-subtitle">' +
                                  '<span class="btn btn-outline-primary btn-fab btn-fab-mini btn-round btn-sm">' +
                                    '<i class="fa fa-map-marker"></i>' +
                                  '</span>' +
                                  '<span class="card-subtitle cityloc">'+ $("#id_city option:selected").text() +'</span>' +
                                '</span>' +
                                '<div class="card-text mt-2" style="height: 150px; overflow-y: auto; overflow-x: hidden;">' +
                                  '<ul class="list-group list-group-flush">';
							  <?php
							  if($list_medium) {
								  foreach($list_medium as $medium) {
								?>
									media += '<li class="list-group-item">' +
                                      '<div class="row">' +
                                        '<div class="col-9">' +
                                          '<div class="form-check mt-2 pl-1">' +
                                            '<label class="form-check-label">' +
                                              '<input class="form-check-input" type="checkbox" name="medium_type'+ this.value +'[]" value="'+ <?php echo $medium->id ?> +'"> '+
											  '<?php echo $medium->name ?>' +
                                              '<span class="form-check-sign">' +
                                                '<span class="check"></span>' +
                                              '</span>' +
                                            '</label>' +
                                          '</div>' +
                                        '</div>' +
                                        '<div class="col-3">' +
                                          '<div class="form-group mt-0 py-0">' +
                                            '<label for="amountBillboard"></label>' +
                                            '<input type="number" class="form-control py-0" name="total_in_medium_type' + this.value +'['+ <?php echo $medium->id ?> +']" id="amountBillboard" placeholder="1" />' +
                                          '</div>' +
                                        '</div>' +
                                      '</div>' +
                                    '</li>';
								  <?php }
									}
								  ?>
									
                                 media +=  '</ul>' +
                                '</div>' +
                              '</div>' +
                              '<div class="card-footer">' +
                                '<a class="btn btn-round btn-outline-danger btn-sm mx-auto removing"> Remove' +
                                '</a>' +
                              '</div>' +
                            '</div>' +
                          '</div>';
		$( "#locationMedia" ).append( media );
	});

	$('body').on('click', ".removing", function () {
		$(this).parent().parent().parent().remove();
	});
	</script>
@stop