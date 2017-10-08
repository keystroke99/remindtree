@extends('layouts.master')
@section('content')

<div class="container-fluid">
                <div class="row bg-title lastmargin">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Business Dashboard</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="{{url('dashboard')}}">RemindTree</a></li>
                            <li class="active">BusinessDashboard</li>
                        </ol>
                    </div>
                    
                    <!-- /.col-lg-12 -->
                </div>
				
                <!-- row -->
                <div class="row lastmargin">
                    <!-- Left sidebar -->
                    <div class="col-md-12"> 
                        <div class="row">
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
								<div class="white-box" style="background-color: #01c0c8 !important;">
									<button class="btn btn-lg btn-primary" id="ctbtn" data-toggle="modal" data-target="#createTeam">CREATE TEAM</button>
									<BR>
									
									<button class="btn btn-lg btn-success" id="orgbtn"><img src="../../img/people.png">ORGANIZATION<br><span>9 members</span></button>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
								<div class="white-box">
								<button class="btn btn-md btn-success pull-right" style="background-color:#4cae4c; border-radius: 5px;margin-bottom: 20px;" data-toggle="modal" data-target="#addMember">ADD MEMBER</button>
									<div class="table-responsive">
										<div class="row-fluid">
											<div class="span12">
												<form name="thisForm">
													<table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
														<thead>
															<tr>
																<th></th>
																<th>Name &amp; Personal Email</th>
																<th>Phone</th>
																<th>Team</th>
																<th>Status</th>
																<th></th>
															</tr>
														</thead>
														<tbody>
																													<tr>
																<td width="5%" align="center"><input type="checkbox" name="name1" value="28"></td>
																<td><style="color: skyblue;"=""><b>NitinTaraka</b><br>tarakanitin1@gmail.com</style="color:></td>
																<td></td>
																<td>
																	<select id="team_list" name="team_list[]"></select>
																</td>
																<td>Active</td>
																<td>
																	<a href="" title="Click to delete" onclick="return confirm('Do you want to delete Nitin?');"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>	&nbsp; &nbsp;
																</td>
															</tr>
																													<tr>
																<td width="5%" align="center"><input type="checkbox" name="name1" value="29"></td>
																<td><style="color: skyblue;"=""><b>ShashiReddy</b><br>shashivardhan.seguru@gmail.com</style="color:></td>
																<td></td>
																<td>
																	<select id="team_list" name="team_list[]"></select>
																</td>
																<td>Active</td>
																<td>
																	<a href="" title="Click to delete" onclick="return confirm('Do you want to delete Shashi?');"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>	&nbsp; &nbsp;
																</td>
															</tr>
																													<tr>
																<td width="5%" align="center"><input type="checkbox" name="name1" value="30"></td>
																<td><style="color: skyblue;"=""><b>shashireddy</b><br>shashivardhan.seguru1@gmail.com</style="color:></td>
																<td>9059789218</td>
																<td>
																	<select id="team_list" name="team_list[]"></select>
																</td>
																<td>Active</td>
																<td>
																	<a href="" title="Click to delete" onclick="return confirm('Do you want to delete shashi?');"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>	&nbsp; &nbsp;
																</td>
															</tr>
																													<tr>
																<td width="5%" align="center"><input type="checkbox" name="name1" value="31"></td>
																<td><style="color: skyblue;"=""><b>shashireddy</b><br>shashivardhan.seguru12@gmail.com</style="color:></td>
																<td>9059789218</td>
																<td>
																	<select id="team_list" name="team_list[]"></select>
																</td>
																<td>Active</td>
																<td>
																	<a href="" title="Click to delete" onclick="return confirm('Do you want to delete shashi?');"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>	&nbsp; &nbsp;
																</td>
															</tr>
																													<tr>
																<td width="5%" align="center"><input type="checkbox" name="name1" value="33"></td>
																<td><style="color: skyblue;"=""><b>ShivaRama</b><br>linganna225@gmail.com</style="color:></td>
																<td></td>
																<td>
																	<select id="team_list" name="team_list[]"></select>
																</td>
																<td>Active</td>
																<td>
																	<a href="" title="Click to delete" onclick="return confirm('Do you want to delete Shiva?');"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>	&nbsp; &nbsp;
																</td>
															</tr>
																													<tr>
																<td width="5%" align="center"><input type="checkbox" name="name1" value="34"></td>
																<td><style="color: skyblue;"=""><b>KatkuriVikas</b><br>vikas8449@gmail.com</style="color:></td>
																<td></td>
																<td>
																	<select id="team_list" name="team_list[]"></select>
																</td>
																<td>Active</td>
																<td>
																	<a href="" title="Click to delete" onclick="return confirm('Do you want to delete Katkuri?');"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>	&nbsp; &nbsp;
																</td>
															</tr>
																													<tr>
																<td width="5%" align="center"><input type="checkbox" name="name1" value="35"></td>
																<td><style="color: skyblue;"=""><b>JyothiSiva</b><br>sdit536@gmail.com</style="color:></td>
																<td></td>
																<td>
																	<select id="team_list" name="team_list[]"></select>
																</td>
																<td>Active</td>
																<td>
																	<a href="" title="Click to delete" onclick="return confirm('Do you want to delete Jyothi?');"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>	&nbsp; &nbsp;
																</td>
															</tr>
																													<tr>
																<td width="5%" align="center"><input type="checkbox" name="name1" value="36"></td>
																<td><style="color: skyblue;"=""><b>kolliparamounika</b><br>mounika.kollipara93@gmail.com</style="color:></td>
																<td></td>
																<td>
																	<select id="team_list" name="team_list[]"></select>
																</td>
																<td>Active</td>
																<td>
																	<a href="" title="Click to delete" onclick="return confirm('Do you want to delete kollipara?');"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>	&nbsp; &nbsp;
																</td>
															</tr>
															<tr>
																<td width="5%" align="center"><input type="checkbox" name="name1" value="37"></td>
																<td><style="color: skyblue;"=""><b>NagasivajyothiM</b><br>sivajyothi536@gmail.com</style="color:></td>
																<td></td>
																<td>
																	<select id="team_list" name="team_list[]"></select>
																</td>
																<td>Active</td>
																<td>
																	<a href="" title="Click to delete" onclick="return confirm('Do you want to delete Nagasivajyothi?');"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>	&nbsp; &nbsp;
																</td>
															</tr>
															<tr>
																<td width="5%" align="center"><input type="checkbox" name="name1" value="37"></td>
																<td><style="color: skyblue;"=""><b>NagasivajyothiM</b><br>sivajyothi536@gmail.com</style="color:></td>
																<td></td>
																<td>
																	<select id="team_list" name="team_list[]"></select>
																</td>
																<td>Active</td>
																<td>
																	<a href="" title="Click to delete" onclick="return confirm('Do you want to delete Nagasivajyothi?');"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>	&nbsp; &nbsp;
																</td>
															</tr>
															<tr>
																<td width="5%" align="center"><input type="checkbox" name="name1" value="37"></td>
																<td><style="color: skyblue;"=""><b>NagasivajyothiM</b><br>sivajyothi536@gmail.com</style="color:></td>
																<td></td>
																<td>
																	<select id="team_list" name="team_list[]"></select>
																</td>
																<td>Active</td>
																<td>
																	<a href="" title="Click to delete" onclick="return confirm('Do you want to delete Nagasivajyothi?');"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>	&nbsp; &nbsp;
																</td>
															</tr>
															<tr>
																<td width="5%" align="center"><input type="checkbox" name="name1" value="37"></td>
																<td><style="color: skyblue;"=""><b>NagasivajyothiM</b><br>sivajyothi536@gmail.com</style="color:></td>
																<td></td>
																<td>
																	<select id="team_list" name="team_list[]"></select>
																</td>
																<td>Active</td>
																<td>
																	<a href="" title="Click to delete" onclick="return confirm('Do you want to delete Nagasivajyothi?');"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>	&nbsp; &nbsp;
																</td>
															</tr>
															
														</tbody>
													</table>
												</form>
											</div><!-- span12 -->
										</div><!-- row-fluid -->
									</div>
								</div>
							</div>
						</div>
                    </div>
                </div>
                <!-- /.row -->
				
                <!-- .right-sidebar -->
                
                <!-- /.right-sidebar -->
				
            </div>

@stop