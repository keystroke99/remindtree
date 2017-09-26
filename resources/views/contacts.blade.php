@extends('layouts.master')

@section('content')

<div class="container-fluid">
                <div class="row bg-title lastmargin">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Contacts</h4> 
					</div>
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="businessdashboard.html">RemindTree</a></li>
                            <li class="active">Contacts</li>
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
									<div class="tabssection">
										<div class="row">
											<ul id="nav" class="twotabsonly">
												<li><a href="#" style="border-bottom: 1px solid #ddd !important;">View Contacts</a>
														<section>
													<div class="table-responsive">
													<div class="row-fluid">
																	
														<div class="span12">
															<div class="row">
																<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
																	<input type="search" class="col-lg-3 pull-left form-control" name="search" placeholder="search">
																</div>
																<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
																	
																</div>
																<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
																	<select class="pull-right form-control" id="state" >
																		<optgroup label="" style="width: 100%;">
																			<option value="">Select Group</option>
																			<option value="">Group Name1</option>
																			<option value="">Group Name2</option>
																			<option value="">Group Name3</option>
																			<option value="">Group Name4</option>
																			<option value="">Group Name5</option>
																			<option value="">Group Name6</option>
																			<option value="">Group Name7</option>
																		</optgroup>
																	</select>
																</div>
															</div>	
															<br>															
															<form name="thisForm">
																<table id="myTable" class="table table-striped table-bordered" width="100%" cellspacing="0">
																	<thead>
																		<tr>
																			<th></th>
																			<th>Name</th>
																			<th>Email Address</th>
																			<th>Phone Number</th>
																			<th>Group</th>
																			<th>Date</th>
																			<th>Status</th>
																			<th>Action</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td width="5%" align="center"><input type="checkbox" name="name1" value="28"></td>
																			<td><style="color: skyblue;"=""><b>NitinTaraka</b></style="color:></td>
																			<td><style="color: skyblue;"="">tarakanitin1@gmail.com</style="color:></td>
																			<td>1234567890</td>
																			<td>
																				<select id="team_list" name="team_list[]"></select>
																			</td>
																			<td>11-22-33</td>
																			<td>Active
																				
																			</td>
																			<td><select id="team_list" name="team_list[]">
																					<option>Select</option>
																					<option>Send</option>
																					<option>Edit</option>
																					<option>Delete</option>
																				</select></td>
																		</tr>
																		<tr>
																			<td width="5%" align="center"><input type="checkbox" name="name1" value="28"></td>
																			<td><style="color: skyblue;"=""><b>NitinTaraka</b></style="color:></td>
																			<td><style="color: skyblue;"="">tarakanitin1@gmail.com</style="color:></td>
																			<td>1234567890</td>
																			<td>
																				<select id="team_list" name="team_list[]"></select>
																			</td>
																			<td>11-22-33</td>
																			<td>Active
																				
																			</td>
																			<td><select id="team_list" name="team_list[]">
																					<option>Select</option>
																					<option>Send</option>
																					<option>Edit</option>
																					<option>Delete</option>
																				</select></td>
																		</tr>
																		<tr>
																			<td width="5%" align="center"><input type="checkbox" name="name1" value="28"></td>
																			<td><style="color: skyblue;"=""><b>NitinTaraka</b></style="color:></td>
																			<td><style="color: skyblue;"="">tarakanitin1@gmail.com</style="color:></td>
																			<td>1234567890</td>
																			<td>
																				<select id="team_list" name="team_list[]"></select>
																			</td>
																			<td>11-22-33</td>
																			<td>Active
																				
																			</td>
																			<td><select id="team_list" name="team_list[]">
																					<option>Select</option>
																					<option>Send</option>
																					<option>Edit</option>
																					<option>Delete</option>
																				</select></td>
																		</tr>
																		<tr>
																			<td width="5%" align="center"><input type="checkbox" name="name1" value="28"></td>
																			<td><style="color: skyblue;"=""><b>NitinTaraka</b></style="color:></td>
																			<td><style="color: skyblue;"="">tarakanitin1@gmail.com</style="color:></td>
																			<td>1234567890</td>
																			<td>
																				<select id="team_list" name="team_list[]"></select>
																			</td>
																			<td>11-22-33</td>
																			<td>Active
																				
																			</td>
																			<td><select id="team_list" name="team_list[]">
																					<option>Select</option>
																					<option>Send</option>
																					<option>Edit</option>
																					<option>Delete</option>
																				</select></td>
																		</tr>
																		<tr>
																			<td width="5%" align="center"><input type="checkbox" name="name1" value="28"></td>
																			<td><style="color: skyblue;"=""><b>NitinTaraka</b></style="color:></td>
																			<td><style="color: skyblue;"="">tarakanitin1@gmail.com</style="color:></td>
																			<td>1234567890</td>
																			<td>
																				<select id="team_list" name="team_list[]"></select>
																			</td>
																			<td>11-22-33</td>
																			<td>Active
																				
																			</td>
																			<td><select id="team_list" name="team_list[]">
																					<option>Select</option>
																					<option>Send</option>
																					<option>Edit</option>
																					<option>Delete</option>
																				</select></td>
																		</tr>
																
																	</tbody>
																	
																</table>
																<BR>
																<div>
																<button class="btn btn-danger" type="submit">Delete</button>
																<button class="btn btn-success" type="submit">Send SMS</button>
																</div>
															</form>
														</div><!-- span12 -->
													</div><!-- row-fluid -->
									</div>
													 </section>
												</li>
												<li><a href="#" style="border-bottom: 1px solid #ddd !important;">Add Contacts</a>
													 <section>
													  
															<form class="omb_loginForm" action="" autocomplete="off" method="POST">
																<div  class="row">
																	<div class="col-md-2 col-lg-2" id="marginbottom">
																		
																		<select class="form-control" id="state" style="width: 100%;">
																				<option style="width: 100%;" data-countryCode="US" value="1">USA (+1)</option>
																				<optgroup label="Other countries" style="width: 100%;">
																					<option data-countryCode="DZ" value="213">Algeria (+213)</option>
																					<option data-countryCode="AD" value="376">Andorra (+376)</option>
																					<option data-countryCode="AO" value="244">Angola (+244)</option>
																					<option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
																					<option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
																					<option data-countryCode="AR" value="54">Argentina (+54)</option>
																					<option data-countryCode="AM" value="374">Armenia (+374)</option>
																				</optgroup>
																			</select>	
																	</div>
																	<div class="col-md-5 col-lg-5" id="marginbottom">
																		
																		<input type="email" class="form-control" name="email" placeholder="Email Address" style="width: 100%;">
																	</div>
																	<div class="col-md-2 col-lg-2" id="marginbottom">
																		
																		<input type="text" class="form-control" name="firstname" placeholder="First Name" style="width: 100%;">
																	</div>
																	<div class="col-md-2 col-lg-2" id="marginbottom">
																		
																		<input type="text" class="form-control" name="lastname" placeholder="Last Name" style="width: 100%;">
																	</div>
																	<div class="col-md-1 col-lg-1" id="marginbottom">
																		
																		<a href="" title="Click to delete" onclick="return confirm('Do you want to delete?');" style="    padding: 8px 20px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
																	</div>
																	
																</div>
																<div  class="row">
																	<div class="col-md-2 col-lg-2" id="marginbottom">
																		<div class="input-group" id="marginbottom">
																			<select class="form-control" id="state" style="width: 100%;">
																				<option style="width: 100%;" data-countryCode="US" value="1">USA (+1)</option>
																				<optgroup label="Other countries" style="width: 100%;">
																					<option data-countryCode="DZ" value="213">Algeria (+213)</option>
																					<option data-countryCode="AD" value="376">Andorra (+376)</option>
																					<option data-countryCode="AO" value="244">Angola (+244)</option>
																					<option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
																					<option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
																					<option data-countryCode="AR" value="54">Argentina (+54)</option>
																					<option data-countryCode="AM" value="374">Armenia (+374)</option>
																				</optgroup>
																			</select>
																		</div>
																	</div>
																	<div class="col-md-5 col-lg-5" id="marginbottom">
																		
																		<input type="email" class="form-control" name="email" placeholder="Email Address" style="width: 100%;">
																	</div>
																	<div class="col-md-2 col-lg-2" id="marginbottom">
																		
																		<input type="text" class="form-control" name="firstname" placeholder="First Name" style="width: 100%;">
																	</div>
																	<div class="col-md-2 col-lg-2" id="marginbottom">
																		
																		<input type="text" class="form-control" name="lastname" placeholder="Last Name" style="width: 100%;">
																	</div>
																	<div class="col-md-1 col-lg-1" id="marginbottom">
																		
																		<a href="" title="Click to delete" onclick="return confirm('Do you want to delete?');" style="    padding: 8px 20px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
																	</div>
																	
																</div>
																
																<div  class="row">
																	<div class="col-md-2 col-lg-2" id="marginbottom">
																		<div class="input-group" id="marginbottom">
																			<select class="form-control" id="state" style="width: 100%;">
																				<option style="width: 100%;" data-countryCode="US" value="1">USA (+1)</option>
																				<optgroup label="Other countries" style="width: 100%;">
																					<option data-countryCode="DZ" value="213">Algeria (+213)</option>
																					<option data-countryCode="AD" value="376">Andorra (+376)</option>
																					<option data-countryCode="AO" value="244">Angola (+244)</option>
																					<option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
																					<option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
																					<option data-countryCode="AR" value="54">Argentina (+54)</option>
																					<option data-countryCode="AM" value="374">Armenia (+374)</option>
																				</optgroup>
																			</select>
																		</div>
																	</div>
																	<div class="col-md-5 col-lg-5" id="marginbottom">
																		
																		<input type="email" class="form-control" name="email" placeholder="Email Address" style="width: 100%;">
																	</div>
																	<div class="col-md-2 col-lg-2" id="marginbottom">
																		
																		<input type="text" class="form-control" name="firstname" placeholder="First Name" style="width: 100%;">
																	</div>
																	<div class="col-md-2 col-lg-2" id="marginbottom">
																		
																		<input type="text" class="form-control" name="lastname" placeholder="Last Name" style="width: 100%;">
																	</div>
																	<div class="col-md-1 col-lg-1" id="marginbottom">
																		
																		<a href="" title="Click to delete" onclick="return confirm('Do you want to delete?');" style="    padding: 8px 20px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
																	</div>
																	
																</div>
																<div  class="row">
																	<div class="col-md-2 col-lg-2" id="marginbottom">
																		<div class="input-group" id="marginbottom">
																			<select class="form-control" id="state" style="width: 100%;">
																				<option style="width: 100%;" data-countryCode="US" value="1">USA (+1)</option>
																				<optgroup label="Other countries" style="width: 100%;">
																					<option data-countryCode="DZ" value="213">Algeria (+213)</option>
																					<option data-countryCode="AD" value="376">Andorra (+376)</option>
																					<option data-countryCode="AO" value="244">Angola (+244)</option>
																					<option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
																					<option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
																					<option data-countryCode="AR" value="54">Argentina (+54)</option>
																					<option data-countryCode="AM" value="374">Armenia (+374)</option>
																				</optgroup>
																			</select>
																		</div>
																	</div>
																	<div class="col-md-5 col-lg-5" id="marginbottom">
																		
																		<input type="email" class="form-control" name="email" placeholder="Email Address" style="width: 100%;">
																	</div>
																	<div class="col-md-2 col-lg-2" id="marginbottom">
																		
																		<input type="text" class="form-control" name="firstname" placeholder="First Name" style="width: 100%;">
																	</div>
																	<div class="col-md-2 col-lg-2" id="marginbottom">
																		
																		<input type="text" class="form-control" name="lastname" placeholder="Last Name" style="width: 100%;">
																	</div>
																	<div class="col-md-1 col-lg-1" id="marginbottom">
																		
																		<button class="btn btn-info" type="submit">Add</button>	
																	</div>
																	
																</div>
																<BR>
																<div style="float: right;">
																<button class="btn btn-danger" type="submit">Cancel</button>
																<button class="btn btn-success" type="submit">Add People</button>
																</div>
															</form>
															<br><br>
															<p>Select Group Name if Contacts to add that group else none</p>
															<div  class="row">
																	<div class="" id="marginbottom">
																		<div class="input-group" id="marginbottom">
																				<div class="input-group" id="marginbottom">
																			<select class="form-control" id="state" style="width: 100%;">
																				
																				<optgroup label="" style="width: 100%;">
																					<option value="">Select Group</option>
																					<option value="">Group Name1</option>
																					<option value="">Group Name2</option>
																					<option value="">Group Name3</option>
																					<option value="">Group Name4</option>
																					<option value="">Group Name5</option>
																					<option value="">Group Name6</option>
																					<option value="">Group Name7</option>
																				</optgroup>
																			</select>
																			
																		</div>
																		
																		</div>
																	<button class="btn btn-info" type="submit" data-toggle="modal" data-target="#importContacts" >Import Contacts</button>
																	</div>
															</div>
															
													</section>
												</li>
											</ul>	
										</div>
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

@stop