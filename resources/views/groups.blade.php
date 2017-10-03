@extends('layouts.master')

@section('content')
	<div class="container-fluid">
                <div class="row bg-title lastmargin">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Group</h4> 
					</div>
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="businessdashboard.html">RemindTree</a></li>
                            <li class="active">Group</li>
                        </ol>
                    </div>
                    
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <div class="row lastmargin" style="margin-bottom: 40px;">
                    <!-- Left sidebar -->
                    <div class="col-md-12"> 
                        <div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="white-box" >
									<div class="table-responsive">
										<div class="row-fluid">
											<div class="span12">
												<div class="row">
													<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
													
													</div>
													<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
														
													</div>
													<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
														<a class="btn btn-info pull-right" data-toggle="modal" data-target="#addGroup" ><i class="fa fa-plus"></i> &nbsp; Add Group</a>
													</div>
												</div>
												<!-- <div class="row">
													<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
														<input type="search" class="col-lg-3 pull-left form-control" name="search" placeholder="search" style="margin: 20px 0;">
													</div>
													<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
														
													</div>
													<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
														<nav aria-label="Page navigation example">
														  <ul class="pagination pull-right">
															<li class="page-item"><a class="page-link" href="#">Previous</a></li>
															<li class="page-item"><a class="page-link" href="#">1</a></li>
															<li class="page-item"><a class="page-link" href="#">2</a></li>
															<li class="page-item"><a class="page-link" href="#">3</a></li>
															<li class="page-item"><a class="page-link" href="#">Next</a></li>
														  </ul>
														</nav>
													</div>
												</div> -->
											
													<table id="groupsTable" class="table table-striped table-bordered" width="100%" cellspacing="0">
														<thead>
															<tr>
																<th>Name</th>
																<th>Number of Contacts</th>
																<th>Date</th>
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
															@foreach($groups as $group)
															<tr>
																<td><b>{{ $group->groupname }}</b></td>
																<td>{{ $group->contactscount }}</td>
																<td>{{ date('Y-m-d', strtotime($group->created_at)) }}</td>
																<td>
																	<select class="groupSelect">
																		<option>Select</option>
																		<option value="{{ $group->id }}">View Contacts</option>
																		<option value="{{ $group->id }}">Send SMS</option>
																		<option value="{{ $group->id }}">Edit</option>
																		<option value="{{ $group->id }}">Delete</option>
																	</select>
																</td>
															</tr>
															@endforeach
														</tbody>
													</table>
													<br>
													<!-- <nav aria-label="Page navigation example">
													  <ul class="pagination pull-right">
														<li class="page-item"><a class="page-link" href="#">Previous</a></li>
														<li class="page-item"><a class="page-link" href="#">1</a></li>
														<li class="page-item"><a class="page-link" href="#">2</a></li>
														<li class="page-item"><a class="page-link" href="#">3</a></li>
														<li class="page-item"><a class="page-link" href="#">Next</a></li>
													  </ul>
													</nav> -->
											
											</div><!-- span12 -->
										</div><!-- row-fluid -->
									</div>
								</div>
							</div>
						</div>
                    </div>
                </div>
                <!-- /.row -->
				<!-- .row -->
                
                <!-- /.row -->
                <!-- .right-sidebar -->
                
                <!-- /.right-sidebar -->
				
            </div>
            <!-- /.container-fluid -->
			<!-- Modal -->
			<div class="modal fade" id="createTeam" role="dialog">
				<div class="modal-dialog">
				  <!-- Modal content for Create Team-->
					<div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title" style="text-align:center;">Create Team</h4>
						</div>
						<div class="modal-body">
							<form class="omb_loginForm" action="" autocomplete="off" method="POST">
								<div class="input-group" id="marginbottom">
									<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
									<input type="text" class="form-control" name="yourname" placeholder="Team Name">
								</div>
								<div class="input-group" id="marginbottom">
									<span class="input-group-addon"><i class="fa fa-user-secret"></i></span>
									<select id="privacylevel">
										<option value="">Privacy Level</option>
										<option value="private">Private</option>
										<option value="public">Public</option>
										<option value="personal">Personal</option>
									</select>
								</div>
								<BR>
								<div class="row" style="float: right; margin-right: 1px;">
									<button class="btn btn-sm btn-primary" id="tcancel" type="submit">Cancel</button>
									<button class="btn btn-sm btn-primary pull-right" id="tcreate" type="submit">Create Team</button>
								</div>
							</form>
						</div>
						<div class="modal-footer">
						  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal -->
			<!-- Modal -->
			<div class="modal fade" id="addMember" role="dialog">
				<div class="modal-dialog">
				
				  <!-- Modal content for Create Team-->
					<div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title" style="text-align:center;">Add Member</h4>
						</div>
						<div class="modal-body">
							<form class="omb_loginForm" action="" autocomplete="off" method="POST">
								<div class="input-group" id="marginbottom">
									<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
									<input type="text" class="form-control" name="yourname" placeholder="Member Name">
								</div>
								<div class="input-group" id="marginbottom">
									<span class="input-group-addon"><i class="fa fa-user-secret"></i></span>
									<select id="privacylevel">
										<option value="">Privacy Level</option>
										<option value="private">Private</option>
										<option value="public">Public</option>
										<option value="personal">Personal</option>
									</select>
								</div>
								<BR>
								<div class="row" style="float: right; margin-right: 1px;">
									<button class="btn btn-sm btn-primary" id="mcancel" type="submit">Cancel</button>
									<button class="btn btn-sm btn-primary pull-right" id="mcreate" type="submit">Add Member</button>
								</div>
							</form>
						</div>
						<div class="modal-footer">
						  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		<!-- Modal -->
		<!-- Modal -->
			<div class="modal fade" id="contactUs" role="dialog">
				<div class="modal-dialog">
				
				  <!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title" style="text-align:center;">Contact Us</h4>
						</div>
						<div class="modal-body">
							<form class="omb_loginForm" action="" autocomplete="off" method="POST">
								<div class="input-group" id="marginbottom">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" class="form-control" name="yourname" placeholder="Your Name">
								</div>
								<div class="input-group" id="marginbottom">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="email" class="form-control" name="email" placeholder="Email">
								</div>
								<div class="input-group" id="marginbottom">
									<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
									<input type="text" class="form-control" name="username" placeholder="Subject">
								</div>
								<div class="input-group" id="marginbottom">
									<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
									<input type="text" class="form-control" name="message" placeholder="Message">
								</div>
								<BR>

								<button class="btn btn-lg btn-primary btn-block" id="lfs" type="submit">LOG IN</button>
							</form>
						</div>
						<div class="modal-footer">
						  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		<!-- Modal -->
		<!-- Modal -->
			<div class="modal fade" id="buyCredits" role="dialog">
				<div class="modal-dialog">
				
				  <!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title" style="text-align:center;">Buy Credits</h4>
						</div>
						<div class="modal-body">
								<div data-role="main" class="ui-content">
									<form method="post" action="/action_page_post.php">
										<div class="range-slider">
										  <input class="range-slider__range" type="range" value="100" min="0" max="500">
										  <span class="range-slider__value">0</span>
										</div>

										<div class="range-slider">
										  <input class="range-slider__range" type="range" value="250" min="0" max="500" step="50">
										  <span class="range-slider__value">0</span>
										</div>

										<div class="range-slider">
										  <input class="range-slider__range" type="range" value="400" min="0" max="500">
										  <span class="range-slider__value">0</span>
										</div> 
									</form>
								</div>
						</div>
						<div class="modal-footer">
						  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		<!-- Modal -->
		<!-- Modal -->
			<div class="modal fade" id="importContacts" role="dialog">
				<div class="modal-dialog">
				
				  <!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title" style="text-align:center;">Import Contacts</h4>
						</div>
						<div class="modal-body">
							<form class="omb_loginForm" action="" autocomplete="off" method="POST">
								
								<h4>Import Contacts</h4>
								<p>You Can Import Contact from .CSV file with comma separated</p>
								<p><a href="#">Click Here</a> to get sample CSV file</p>
									<input type="file" class="form-control" name="file" placeholder="Sample File">
								
								<BR>
								<button class="btn  btn-info"  type="submit">Import</button>
								<button class="btn  btn-danger"  type="submit">Cancel</button>
							</form>
						</div>
						<div class="modal-footer">
						  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		<!-- Modal -->
		<!-- Modal -->
			<div class="modal fade" id="addGroup" role="dialog" > 
				<div class="modal-dialog">
				
				  <!-- Modal content for Create Team-->
					<div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title" style="text-align:center;">Create A NewGroup</h4>
						</div>
						<div class="modal-body">
							<form class="omb_loginForm" id="addGroupForm" method="POST">
								{{csrf_field()}}
								<div class="input-group" id="marginbottom">
									<input type="text" class="form-control" id="groupnameModal"  name="groupname" placeholder="Group Name" required="">
								</div>
								<br>
								<div class="row" style="float: right; margin-right: 1px;">
									<button class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button> &nbsp; &nbsp;
									<button class="btn btn-sm btn-primary pull-right" type="submit">Create</button>
								</div>
							</form>
						</div>
						<!-- <div class="modal-footer">
						  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div> -->
					</div>
				</div>
			</div>


			<!-- Group Edit Modal -->
		<div class="modal fade" id="GroupEditModal" role="dialog">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true" class="">×   </span><span class="sr-only">Close</span>

		                </button>
		                 <h4 class="modal-title" id="myModalLabel">Edit Group</h4>

		            </div>
		            <form id="editgroupform" method="POST">
		            		{{csrf_field()}}
		            <div class="modal-body">
		            	
		            		<div class="form-group">
			            	    <label for="modalname">Group Name</label>
			            	    <input type="text" name="groupname" class="form-control" id="modalname" placeholder="Group Name" required>
		            	  	</div>          	 
		            </div>
		            <div class="modal-footer">
		                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                <button type="submit" class="btn btn-primary">Save changes</button>
		            </div>
		            </form>
		        </div>
		    </div>
		</div>
	

@stop