@extends('user.layouts.app')

@section('title', 'Dashboard')

@section('page', 'become_teachers')

@section('main')

<!-- Teachers Area section -->
<section class="become-teachers-01">
	<div class="container">
		<div class="row">
			<div class="row">
				<div class="col-sm-12 text-center become-title">
					<h2>User Dashboard</h2>
					<p>You are welcome to your dashboard</p>
					<span class="line"></span>
				</div>
			</div>
			<div class="row">
				@if (session('success'))
					<div class="col-sm-12 text-center become-title">
						<div class="alert alert-success" role="alert">
								{{ session('success') }}
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
						</div>
					</div>
				@elseif(session('fail'))
					<div class="col-sm-12 text-center become-title">
						<div class="alert alert-danger" role="alert">
								{{ session('fail') }}
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
						</div>
					</div>
				@endif
			</div>
			
			<div class="col-sm-12">
				<div class="row">
					
					<div class="col-sm-12">
						
						<div class="tab-wapper">
							
							<ul class="nav nav-tabs">
								<li  class="active"><a href="#roles" data-toggle="tab"><i class="fa fa-list-ol"></i>Sign Up Info</a></li>
							  	<li><a href="#become_a_teacher"  data-toggle="tab"><i class="fa fa-user-plus"></i>Personal Info</a></li>
							  	
							  	<li ><a href="#courses"  data-toggle="tab"><i class="fa fa-book"></i>Projects </a></li>
							</ul>

							<div class="tab-content">
								<div class="tab-pane fade" id="roles">
									<h3>Personal Information</h3>
									<form>
									   <div class="row">
										   <div class="col-sm-4">
											   <div class="form-group">
												   <label for="">Full Name</label>
												   <input type="text" class="form-control" disabled="disabled" value="{{ $user[0]->name }}">
											   </div>
										   </div>
										   <div class="col-sm-4">
											   <div class="form-group">
												   <label for="">E-mail</label>
												   <input type="text" class="form-control" disabled="disabled" value="{{ $user[0]->email }}">
											   </div>
										   </div>
										   <div class="col-sm-4">
											   <div class="form-group">
												   <label for="">Phone</label>
												   <input type="text" class="form-control" disabled="disabled" value="{{ $user[0]->phone }}">
											   </div>
										   </div>
									   </div>
								   </form>	
							  	</div>
							  	<div class="tab-pane fade in active" id="become_a_teacher">
									  
									@if (isset($students[0]) && $students[0]->firstname)
									<h3>Personal Information</h3>
									 <form>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<label for="">First Name</label>
													<input type="text" class="form-control" disabled="disabled" value="{{ isset($students[0]) ? $students[0]->firstname : '' }}">
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label for="">Sur Name</label>
													<input type="text" class="form-control" disabled="disabled" value="{{ isset($students[0]) ? $students[0]->surname : '' }}">
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label for="">Other Name</label>
													<input type="text" class="form-control" disabled="disabled" value="{{ isset($students[0]) ? $students[0]->othername : '' }}">
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label for="">E-mail</label>
													<input type="text" class="form-control" disabled="disabled" value="{{ isset($students[0]) ? $students[0]->email : '' }}">
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label for="">Phone</label>
													<input type="text" class="form-control" disabled="disabled" value="{{ isset($students[0]) ? $students[0]->phone : '' }}">
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label for="">Age</label>
													<input type="text" class="form-control" disabled="disabled" value="{{ isset($students[0]) ? $students[0]->age : '' }}">
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label for="">Gender</label>
													<input type="text" class="form-control" disabled="disabled" value="{{ isset($students[0]) ? $students[0]->gender : '' }}">
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label for="">Religion</label>
													<input type="text" class="form-control" disabled="disabled" value="{{ isset($students[0]) ? $students[0]->religion : '' }}">
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label for="">Region</label>
													<input type="text" class="form-control" disabled="disabled" value="{{ isset($students[0]) ? $students[0]->region : '' }}">
												</div>
											</div>

											
											<div class="col-sm-4">
												<div class="form-group">
													<label for="">Zongo</label>
													<input type="text" class="form-control" disabled="disabled" value="{{ isset($students[0]) ? $students[0]->zongo : '' }}">
												</div>
											</div>

											<div class="col-sm-4">
												<div class="form-group">
													<label for="">Educational Level</label>
													<input type="email" class="form-control" disabled="disabled" value="{{ isset($students[0]) ? $students[0]->education : '' }}">
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label for="">Employment Status</label>
													<input type="text" class="form-control"  disabled="disabled" value="{{ isset($students[0]) ? $students[0]->employment : '' }}">
												</div>
											</div>

											<div class="col-sm-4">
												<div class="form-group">
													<label for="">Excel</label>
													<input type="text" class="form-control" disabled="disabled" value="{{ isset($students[0]) ? $students[0]->excel : '' }}">
												</div>
											</div>

											<div class="col-sm-4">
												<div class="form-group">
													<label for="">Word</label>
													<input type="email" class="form-control" disabled="disabled" value="{{ isset($students[0]) ? $students[0]->word : '' }}">
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label for="">Trade Interest</label>
													<input type="text" class="form-control"  disabled="disabled" value="{{ isset($students[0]) ? $students[0]->interest : '' }}">
												</div>
											</div>
											<div class="col-sm-8">
												<div class="form-group">
													<label for="">Address</label>
													<input type="text" class="form-control"  disabled="disabled" value="{{ isset($students[0]) ? $students[0]->address : '' }}">
												</div>
											</div>	
											<div class="col-sm-4">
												<div class="form-group">
													<label for="">Country</label>
													<input type="text" class="form-control"  disabled="disabled" value="{{ isset($students[0]) ? $students[0]->country : '' }}">
												</div>
											</div>
										</div>
									</form>	
									@else
										<h4>You have not registered for any project yet.  <a href="{{ route('projects') }}">View And Register For A Project</a></h4>
									@endif
								  </div>
							  	
							  	<div class="tab-pane fade" id="courses">
									<div class="col-12">
										<div class="card">
											@if (isset($students[0]) && $students[0]->firstname)
											<div class="card-header">
												<h3 class="card-title">All Role</h3>
											</div>
											
											<table id="example1" class="table table-bordered table-striped">
												<thead>
													<tr>
														<th>#</th>
														<th>Name</th>
														<th>Price</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
													
														
														@foreach ($students as $stu)
														@php
															# code...
															// dd($stu->project_id);
															$p_id = $stu->project_id;
															
															$pro = \App\Model\Admin\Project::where('id',$p_id)->orderBy('created_at','DESC')->get();
															// dd($pro);
														@endphp
															@foreach ($pro as $item)
															<tr>
																<td>{{$item->id}}</td>
																<td>{{$item->name}}</td>
																<td>{{$item->price}}</td>
																<td>{{$stu->status}}</td>
															</tr>
															@endforeach
															
														@endforeach
					
												</tbody>
												<tfoot>
													<tr>
														<th>#</th>
														<th>Name</th>
														<th>Price</th>
														<th>Status</th>
													</tr>
												</tfoot>
											</table>
												
											@else
											<h4>You have not registered for any project yet. <a href="{{ route('projects') }}">View And Register For A Project</a></h4>
											@endif
												

										</div>
						
									</div>
							  	</div>
							</div>
  						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- ./ End Teachers Area section -->

@endsection
