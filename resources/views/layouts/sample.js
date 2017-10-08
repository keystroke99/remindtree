$('#example').DataTable();          // Dashboard Table
$('#contactsTable').DataTable();    // Contacts Page Table
$('#groupsTable').DataTable();      // Groups Page Table

// Contacts Edit and Delete
                
                $('.editcontact').on('change', function() {
                    // alert( $(this).find(":selected").text() );
                     var id =  $(this).find(":selected").val();

                    if($(this).find(":selected").text() == 'Send SMS'){
                        alert('Send SMS Option Selected');
                    }

                    if($(this).find(":selected").text() == 'Edit'){
                        showModal(id);
                    }

                    if($(this).find(":selected").text() == 'Delete'){
                        deleteContact(id);
                    }
                });

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


        // Multiple Contacts Delete

            function checkboxclicked(){
              console.log('delete button cliked');
              if (confirm("Are you sure?")) {

                 var searchIDs = $("#contactsTable input:checkbox:checked").map(function(){
                       return $(this).val();
                     }).get(); // <----
                     console.log(searchIDs);

                    var url = "multipledelete";
                    $.ajax({
                               url: url,
                               type: 'post',
                               dataType: 'application/json',
                               data: {ids: searchIDs, _token:'{{ csrf_token() }}'},
                               success: function(data) {
                                  console.log(data);
                                 
                               }
                       });
                    location.reload();
                  }
               }

               // Add Contacts
        var i = 1;
        $("#addButton").click(function () {
            $("#participantTable tr:first").clone().find("input").each(function () {
                $(this).val('').attr({
                    'id': function (_, id) {
                        return id + i
                    },
                        'name': function (_, name) {
                        return name + i
                    },
                        'value': ''
                });
            }).end().appendTo("#participantTable");
            i++;
        });

        $(document).on('click', 'span.removebutton', function () {
            alert("Are you sure to remove this contact?");
            $(this).closest('tr').remove();
            return false;
        });

        // Enter only number in the mobile number area in Add Contacts Section
        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }