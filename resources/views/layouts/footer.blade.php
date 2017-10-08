<!-- Modal -->
            <footer class="footer text-center"> 2017 &copy; RemindTree </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    
    <!-- Menu Plugin JavaScript -->
    <script src="{{asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('js/waves.js')}}"></script>
    <!-- Moment JS -->
    <script src="{{asset('js/monent.js')}}"></script>
    

    

    <!--Style Switcher -->
    <script src="{{asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>


<!-- Custom Theme JavaScript -->
    <script src="{{asset('js/custom.min.js')}}"></script>



    <script>

          $(document).ready(function () {
                               $('#contactsTable').DataTable({
                                        processing: true,
                                        responsive: true,                                        
                                        "lengthChange": false,
                                        "ajax":{"url":"rendercontacts","dataSrc":""},
                                        "initComplete": function(settings, json) {
                                               $("button").click(function() {
                                                 console.log('button fired');
                                                   var id = $(this).val();
                                                   if (confirm("Are you sure?")) {
                                                     var table = $('#contactsTable').DataTable();
                                                      var $button = $(this);
                                                     $.ajax({
                                                             url:'/deletecontact/'+id,
                                                             dataType:'json',
                                                             type:'get',
                                                             cache:true,
                                                             success:  function (response) {
                                                                 console.log(response);
                                                                table.row( $button.parents('tr') ).remove().draw();
                                                             },              
                                                     });
                                                       
                                                   }
                                                   return false;
                                               });
                                               
                                             },
                                        
                                        "columns": [
                                          { 
                                              "mData": "id",
                                                              "mRender": function (data, type, row) {
                                                                  return "<input type='checkbox' name='sno' value='"+ data +"'>";
                                                              }
                                         },
                                          { data: 'contact_name', name: 'contact_name' },
                                          { data: 'contact_email', name: 'contact_email' },
                                          { data: 'contact_mobile', name: 'contact_mobile' },
                                          { data: 'groupname', name: 'groupname' },
                                          {"title": "my date",
                                                       "data": "create_at",
                                                       "type": "date",
                                                       "render":function (value) {
                                                            if (value === null) return "";
                                                            return moment(value).format('DD/MM/YYYY');
                                                           }
                                                      },
                                          { data: 'status', name: 'status' },
                                          { 
                                              "mData": "id",
                                                              "mRender": function (data, type, row) {
                                                                  return "<button class='btn btn-primary' title='Send SMS to this Contact'><i class='fa fa-envelope-o' aria-hidden='true'></i></button><button class='btn btn-info' onclick='showModal("+ data +")' title='Edit this Contact'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button><button type='button' class='btn btn-danger my_button' data-value='"+ data +"' value='"+ data +"' title='Delete this Contact'><i class='fa fa-trash' aria-hidden='true'></i></button>";
                                                              }
                                           }

                                        ]
                                    });    // Contacts Page Table
                    


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



                    $('#example').DataTable();          // Dashboard Table
                    
                    // $('#contactsTable').DataTable();    // Contacts Page Table
                    $('#groupsTable').DataTable({
                                        processing: true,
                                        responsive: true,
                                        
                                          "lengthChange": false,
                                         
                                        "ajax":{"url":"rendergroups","dataSrc":""},
                                        // "ajax": "/rendercontacts",
                                        "columns": [
                                          
                                          { data: 'groupname', name: 'groupname' },
                                          { data: 'contactscount', name: 'contactscount' },
                                          {"title": "my date",
                                                       "data": "create_at",
                                                       "type": "date",
                                                       "render":function (value) {
                                                            if (value === null) return "";
                                                            return moment(value).format('DD/MM/YYYY');
                                                           }
                                                      },
                                          { 
                                              "mData": "id",
                                                              "mRender": function (data, type, row) {
                                                                  return "<button class='btn btn-default' title='View Contacts'><i class='fa fa-eye' aria-hidden='true'></i></button><button class='btn btn-primary' title='Send SMS to this Contact'><i class='fa fa-envelope-o' aria-hidden='true'></i></button><button class='btn btn-info' onclick='editGroup("+ data +")' title='Edit this Group'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button><button class='btn btn-danger' value='deleteGroup("+ data +")' title='Delete this Group'><i class='fa fa-trash' aria-hidden='true'></i></button>";
                                                              }
                                           }
                                        ]
                                    });      // Groups Page Table


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

        });
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


    </script>

</body>

</html>