<!-- Modal -->
            <footer class="footer text-center"> 2017 &copy; RemindTree </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
    <script src="{{asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('bootstrap/dist/js/tether.min.js')}}"></script>
    <script src="{{asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('js/waves.js')}}"></script>
    

     <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>

    <!--Style Switcher -->
    <script src="{{asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>




    <script>
        $(document).ready(function () {

            var rangeSlider = function(){
              var slider = $('.range-slider'),
                range = $('.range-slider__range'),
                value = $('.range-slider__value');
              
              slider.each(function(){

              value.each(function(){
                var value = $(this).prev().attr('value');
                $(this).html(value);
              });

              range.on('input', function(){
                $(this).next(value).html(this.value);
              });
              });
            };

            rangeSlider();
            
            $('#contactsTable').DataTable();
            $('#groupsTable').DataTable();
            
            $(document).ready(function () {

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

              // Groups Edit and Delete

              $('.groupSelect').on('change', function() {
                    // alert( $(this).find(":selected").text() );
                     var id =  $(this).find(":selected").val();

                    if($(this).find(":selected").text() == 'View Contacts'){
                        alert('View Contacts Option Selected');
                    }

                    if($(this).find(":selected").text() == 'Send SMS'){
                        alert('Send SMS Option Selected');
                    }

                    if($(this).find(":selected").text() == 'Edit'){
                        // alert('Edit Option Selected');
                        editGroup(id);
                    }

                    if($(this).find(":selected").text() == 'Delete'){
                        // alert('Delete Option Selected');
                        deleteGroup(id);
                    }
                });

                // Group Edit Modal
                function editGroup(data)
                {
                   var id = data;

                           $.ajax({
                                   url:'/viewgroup/'+id,
                                   dataType:'json',
                                   type:'get',
                                   cache:true,
                                   success:  function (response) {
                                       console.log(response);
                                       $('#modalname').val(response.groupname);
                                   },              
                           });
                  
                   $("#GroupEditModal").modal();

                   // Form Submission
                       $("#editgroupform").submit(function(e) {
                          console.log("Form Submission" + id);
                       //prevent Default functionality
                       e.preventDefault();

                       //get the action-url of the form
                       var actionurl = "/updategroup/"+id;

                       //do your own request an handle the results
                       $.ajax({
                               url: actionurl,
                               type: 'post',
                               dataType: 'application/json',
                               data: {groupname: $('#modalname').val(), _token:'{{ csrf_token() }}'},
                               success: function(data) {
                                  console.log(data);
                                  $('#GroupEditModal').modal('hide');
                               }
                       });
                       $('#GroupEditModal').modal('hide');

                       location.reload();

                   });

                }

              // Add a Group
                $("#addGroupForm").submit(function(e) {

                    var url = "addGroup"; // the script where you handle the form input.

                    $.ajax({
                           type: "POST",
                           url: url,
                           data: {groupname: $('#groupnameModal').val(), _token:'{{ csrf_token() }}'}, // serializes the form's elements.
                           success: function(data)
                           {
                               console.log(data); // show response from the php script.
                               $('#addGroup').modal('hide');
                                location.reload();
                           }
                         });

                    e.preventDefault(); // avoid to execute the actual submit of the form.
                });

              // Delete Group

              function deleteGroup(groupid) {
                var id = groupid;
                  if (confirm("Are you sure to delete the Group?")) {

                    $.ajax({
                            url:'/deletegroup/'+id,
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



                var table = $('#example').DataTable({
                    "columnDefs": [
                        {
                            "visible": false
                            , "targets": 2
                        }
          ]
                    , "order": [[2, 'asc']]
                    , "displayLength": 25
                    , "drawCallback": function (settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function (group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function () {
                    var currentOrder = table.order()[0];
                    
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    }
                    else {
                        table.order([2, 'asc']).draw();
                    }
                });
            });

            $('#nav').children('li').first().children('a').addClass('active')
                .next().addClass('is-open').show();
                
                $('#nav').on('click', 'li > a', function() {
                    
                  if (!$(this).hasClass('active')) {

                    $('#nav .is-open').removeClass('is-open').hide();
                    $(this).next().toggleClass('is-open').toggle();
                      
                    $('#nav').find('.active').removeClass('active');
                    $(this).addClass('active');
                  } else {
                    $('#nav .is-open').removeClass('is-open').hide();
                    $(this).removeClass('active');
                  }
               });



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

    </script>


<!-- Custom Theme JavaScript -->
    <script src="{{asset('js/custom.min.js')}}"></script>

    
    <script type="text/javascript">
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
        
    </script>
      
     
</body>

</html>