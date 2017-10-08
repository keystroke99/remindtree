<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table id="contactsTable" class="table table-striped table-bordered" width="100%" cellspacing="0">
		<form name="thisForm">
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
																		
		</tbody>	
	</table>
	    <script src="{{asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript">
		
		
		$( document ).ready(function() {
		    console.log( "page is ready!" );



                            // Edit Contact
                    
                    function showModal(data)
                            {
                               var id = data;

                                       $.ajax({
                                               url:'/viewcontact/'+id,
                                               dataType:'json',
                                               type:'get',
                                               cache:true,
                                               success:  function (response) {
                                                   console.log(response);
                                                   $('#modalname').val(response.contact_name);
                                                   $('#modalemail').val(response.contact_email);
                                                   $('#modalphone').val(response.contact_mobile);
                                               },              
                                       });
                              
                               $("#myModal").modal();

                               // Form Submission
                                   $("#editcontactform").submit(function(e) {
                                      console.log("Form Submission" + id);
                                   //prevent Default functionality
                                   e.preventDefault();

                                   //get the action-url of the form
                                   var actionurl = "/updatecontact/"+id;

                                   //do your own request an handle the results
                                   $.ajax({
                                           url: actionurl,
                                           type: 'post',
                                           dataType: 'application/json',
                                           data: {contact_name: $('#modalname').val(), contact_email: $('#modalemail').val(), contact_mobile: $('#modalphone').val(), _token:'{{ csrf_token() }}'},
                                           success: function(data) {
                                              console.log(data);
                                              $('#myModal').modal('hide');
                                           }
                                   });
                                   $('#myModal').modal('hide');

                                   var table = $('#contactsTable').DataTable();

                                   location.reload();

                               });

                            }

                    // Delete Contact

                    function deleteContact(contactid) {
                      var id = contactid;
                        if (confirm("Are you sure?")) {

                          $.ajax({
                                  url:'/deletecontact/'+id,
                                  dataType:'json',
                                  type:'get',
                                  cache:true,
                                  success:  function (response) {
                                      console.log(response);
                                     location.reload();
                                  },              
                          });
                            
                        }
                        return false;
                    }
		});
	</script>
</body>
</html>