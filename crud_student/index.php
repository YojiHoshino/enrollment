<html>
    <head>
        <title>ASIATECH SHS Records</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-light.css">

    <link rel="stylesheet" href="style.css">

        <style>
            
        </style>

    </head>
    <body class="bg-light">
        <div class="container mt-5 pt-3">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-11">
                            <h1>Senior High Student Informations</h1>
                        </div>
                        <div class="col-md-1 text-end" >
                            <button type="button" id="add_button" data-bs-toggle="modal" data-bs-target="#userModal" class="btn btn-success btn-lg m-1"><i class="fa-regular fa-user-plus fa-fade"></i></button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                        <table id="user_data" class="table table-bordered table-striped" class="display nowrap">
                            <thead>
                                <tr>
                                    <th width="10%">Image</th>
                                    <th width="13%">Student No.</th>
                                    <th width="13%">First Name</th>
                                    <th width="13%">Last Name</th>
                                    <th width="12%">Middle Name</th>
                                    <th width="10%">Email</th>
                                    <th width="12%">Gender</th>
                                    <th width="10%">Section</th>
                                    <th width="10%">LRN</th>
                                    <th width="35%">Birthday</th>
                                    <th width="35%">Address</th>
                                    <th width="35%">Parents No.</th>
                                    <th width="10%">Edit</th>
                                    <th width="10%">Delete</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<div id="userModal" class="modal fade">
    <div class="modal-dialog">
        <form method="post" id="user_form" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Student</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div>
                        <div class="col">
                        <label>Student No.</label>
                        <input type="text" name="studentnum" id="studentnum" class="form-control" placeholder="1-220370"/>
                        </div>                    
                    </div>

                    <div class="row mb-3 mt-2">
                      <div class="col">
                        <label class="form-label">First Name:</label>
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Juan"/>
                      </div>

                      <div class="col">
                        <label class="form-label">Last Name:</label>
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Dela Cruz"/>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <div class="col">
                        <label class="form-label">Middle Name:</label>
                        <input type="text" class="form-control" name="middle_name" id="middle_name" placeholder="Juan"/>
                      </div>

                      <div class="col">
                        <label class="form-label">Email:</label>
                        <input type="email" name="email" id="email" class="form-control"/>
                      </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                        <label>Gender:</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                    <div class="col">
                        <label>Section:</label>
                        <select name="section" id="section" class="form-control">
                            <option value="HE">HE - Home Economics</option>
                                <option value="GAS">GAS - General Academic Strand</option>
                                <option value="HUMSS">HUMSS - Humanities & Social Sciences</option>   
                                <option value="ABM">ABM - Accountancy, Business & Management</option>
                                <option value="STEM">STEM - Science, Tecnology, Engineering & Math</option>
                                <option value="ICT">ICT - Information & Communication Technology</option>        
                            </select>
                    </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label>Enter LRN</label>
                            <input type="number" name="lrn" id="lrn" class="form-control"/>
                        </div>

                        <div class="col">
                            <label>Birthday</label>
                            <input type="date"  name="birthdate" id="birthdate" class="form-control"/>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label>Address</label>
                            <input type="text"  name="address" id="address" class="form-control"/>
                        </div>

                        <div class="col">
                            <label>Parents Contact</label>
                            <input type="tel"  name="parent_contact" id="parent_contact" class="form-control"/>
                        </div>
                    </div>
                    
                    <div class="col">
                        <label>Upload Image</label>
                        <input type="file" name="user_image" id="user_image" class="form-control">
                        <span id="user_uploaded_image"></span>  
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="user_id" id="user_id" />
                    <input type="hidden" name="operation" id="operation" />
                    <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript" language="javascript" >

$(document).ready(function(){
    $('#example').DataTable({
        "scrollX": true
    });

    $('#add_button').click(function(){
        $('#user_form')[0].reset();
        $('.modal-title').text("Add User");
        $('#action').val("Add");
        $('#operation').val("Add");
        $('#user_uploaded_image').html('');
    });
    
    var dataTable = $('#user_data').DataTable({
        "processing":true,
        "serverSide":true,
        "order":[],
        "ajax":{
            url:"fetch.php",
            type:"POST"
        },
        "columnDefs":[
            {
                "targets":[0, 3, 4],
                "orderable":false,
            },
        ],
    });
    $(document).on('submit', '#user_form', function(event){
        event.preventDefault();
        var Studentnum = $('#studentnum').val();
        var firstName = $('#first_name').val();
        var lastName = $('#last_name').val();
        var middleName = $('#middle_name').val();
        var Email = $('#email').val();
        var Gender = $('#gender').val();
        var Section = $('#section').val();
        var Lrn = $('#lrn').val();
        var Birthdate = $('#birthdate').val();
        var Address = $('#address').val();
        var parentContact = $('#parent_contact').val();
        var extension = $('#user_image').val().split('.').pop().toLowerCase();
        if(extension != '')
        {
            if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
            {
                alert("Invalid Image File");
                $('#user_image').val('');
                return false;
            }
        }   
        if(Studentnum != '' && firstName != '' && lastName != '' && middleName != '' && Email != '' && Gender != '' && Section != '' && Lrn != '' && Birthdate != '' && Address != '' && parentContact != '')
        {
            $.ajax({
                url:"insert.php",
                method:'POST',
                data:new FormData(this),
                contentType:false,
                processData:false,
                success:function(data)
                {
                    alert(data);
                    $('#user_form')[0].reset();
                    $('#userModal').modal('hide');
                    dataTable.ajax.reload();
                }
            });
        }
        else
        {
            alert("Please Fill The Form Completely you idiot!");
        }
    });
    
    $(document).on('click', '.update', function(){
        var user_id = $(this).attr("id");
        $.ajax({
            url:"fetch_single.php",
            method:"POST",
            data:{user_id:user_id},
            dataType:"json",
            success:function(data)
            {
                $('#userModal').modal('show');
                $('#studentnum').val(data.studentnum);
                $('#first_name').val(data.first_name);
                $('#last_name').val(data.last_name);
                $('.modal-title').text("Edit User");
                $('#user_id').val(user_id);
                $('#user_uploaded_image').html(data.user_image);
                $('#middle_name').val(data.middle_name);
                $('#email').val(data.email);
                $('#gender').val(data.gender);
                $('#section').val(data.section);
                $('#lrn').val(data.lrn);
                $('#birthdate').val(data.birthdate);
                $('#address').val(data.address);
                $('#parent_contact').val(data.parent_contact);
                $('#action').val("Edit");
                $('#operation').val("Edit");
            }
        })
    });
    
    $(document).on('click', '.delete', function(){
        var user_id = $(this).attr("id");
        if(confirm("Are you sure you want to delete this?"))
        {
            $.ajax({
                url:"delete.php",
                method:"POST",
                data:{user_id:user_id},
                success:function(data)
                {
                    alert(data);
                    dataTable.ajax.reload();
                }
            });
        }
        else
        {
            return false;   
        }
    });
});
</script>
