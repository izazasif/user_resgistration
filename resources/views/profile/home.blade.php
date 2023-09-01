
@extends('layout.master')
<style>
    .required::after {
      content: "*";
      color: red;
      margin-left: 2px;
    }
  </style>
@section('content')
    <div class="content-wrapper">
       
        <section class="content">
            @if (session('message'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Success!</h4>
                    {{ session('message') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                    @foreach ($errors->all() as $error)
                        <li><span class="glyphicon glyphicon-alert" aria-hidden="true"></span> &nbsp;{{ $error }}
                        </li>
                    @endforeach
                </div>
            @endif
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Create Profile information</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                       
                        <div class="box-body">
                            <div class="row"> 
                                <form role="form" method="POST" action="{{route('info.save')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-6">

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required"> Upload Image </label>
                                    <input type="file" name="image" class="form-control" id="image">
                                    @if ($errors->has('image'))
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>

                                <div id="selectedFileName"></div>
                                
                                <br>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required">  Full Name </label>
                                    <input type="text" name="full_name" class="form-control" id="exampleInputEmail1"
                                        placeholder="Name" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required"> Goals </label>
                                    <input type="text" name="goals" class="form-control" id="exampleInputEmail1"
                                        placeholder="goals" value="{{ old('goals') }}">
                                    @if ($errors->has('goals'))
                                        <span class="text-danger">{{ $errors->first('goals') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required"> Height </label>
                                    <input type="text" name="height" class="form-control" id="exampleInputEmail1"
                                        placeholder="height" value="{{ old('height') }}">
                                    @if ($errors->has('height'))
                                        <span class="text-danger">{{ $errors->first('height') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required"> Weight </label>
                                    <input type="number" name="weight" class="form-control" id="exampleInputEmail1"
                                        placeholder="weight" value="{{ old('weight') }}">
                                    @if ($errors->has('weight'))
                                        <span class="text-danger">{{ $errors->first('weight') }}</span>
                                    @endif
                                </div>
                                 
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Date Of Birth</label>
                                    <input type="date" class="form-control" name="dob" id="exampleInputEmail1"
                                        placeholder="timeline">
                                </div> 

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required"> Address </label>
                                    <input type="text" name="address" class="form-control" id="exampleInputEmail1"
                                        placeholder="address" value="{{ old('address') }}">
                                    @if ($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Phone Number</label>
                                    <input type="text" name="phone_number" class="form-control" id="exampleInputEmail1"
                                        placeholder="Phone Number" value="{{ old('phone_number') }}" required>
                                    @if ($errors->has('phone_number'))
                                        <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required"> Email</label>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Email" required>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required"> Parents </label>
                                    <input type="text" name="parents" class="form-control" id="exampleInputEmail1"
                                        placeholder="parents" value="{{ old('parents') }}">
                                    @if ($errors->has('parents'))
                                        <span class="text-danger">{{ $errors->first('parents') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required"> High School </label>
                                    <input type="text" name="h_school" class="form-control" id="exampleInputEmail1"
                                        placeholder="h_school" value="{{ old('h_school') }}">
                                    @if ($errors->has('h_school'))
                                        <span class="text-danger">{{ $errors->first('h_school') }}</span>
                                    @endif
                                </div>

                                <!-- <div class="form-group">
                                    <label class="required">User Type</label>
                                    <select name="type" class="form-control" id="user-type" required>
                                        <option value=""> Select User Type</option>
                                            <option value="developer"  >Developer</option>
                                            <option value="leader"  >Leader</option>
                                    </select>
                                    @if ($errors->has('type'))
                                        <span class="text-danger">{{ $errors->first('type') }}</span>
                                    @endif
                                </div> -->
                             
                            </div>
                            <div class="col-md-6">
                              
                            <div class="form-group">
                                    <label for="exampleInputEmail1" class="required"> GPA</label>
                                    <input type="number" name="gpa" class="form-control"
                                        placeholder="gpa" required>
                                    @if ($errors->has('gpa'))
                                        <span class="text-danger">{{ $errors->first('gpa') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Act</label>
                                    <input type="text" name="act" class="form-control" id="exampleInputEmail1"
                                        placeholder="Act" value="{{ old('act') }}" required>
                                    @if ($errors->has('act'))
                                        <span class="text-danger">{{ $errors->first('act') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required"> Desired Major </label>
                                    <input type="text" name="major" class="form-control" id="exampleInputEmail1"
                                        placeholder="Desired Major" value="{{ old('major') }}">
                                    @if ($errors->has('major'))
                                        <span class="text-danger">{{ $errors->first('major') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required"> Achievements </label>
                                    <input type="text" name="achievements" class="form-control" id="exampleInputEmail1"
                                        placeholder="Achievements" value="{{ old('achievements') }}">
                                    @if ($errors->has('achievements'))
                                        <span class="text-danger">{{ $errors->first('achievements') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Club</label>
                                    <input type="text" name="club" class="form-control" id="exampleInputEmail1"
                                        placeholder="Club" value="{{ old('club') }}" required>
                                    @if ($errors->has('club'))
                                        <span class="text-danger">{{ $errors->first('club') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required"> Position </label>
                                    <input type="text" name="position" class="form-control" id="exampleInputEmail1"
                                        placeholder="Position" value="{{ old('position') }}">
                                    @if ($errors->has('position'))
                                        <span class="text-danger">{{ $errors->first('position') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required"> Club Achievements </label>
                                    <input type="text" name="c_achievements" class="form-control" id="exampleInputEmail1"
                                        placeholder="Club Achievements" value="{{ old('c_achievements') }}">
                                    @if ($errors->has('c_achievements'))
                                        <span class="text-danger">{{ $errors->first('c_achievements') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required"> Video footage </label>
                                    <input type="text" name="footage" class="form-control">
                                    @if ($errors->has('footage'))
                                        <span class="text-danger">{{ $errors->first('footage') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required"> Club / High School Contacts </label>
                                    <input type="text" name="h_contact" class="form-control" id="exampleInputEmail1"
                                        placeholder="Club / High School Contacts" value="{{ old('h_contact') }}">
                                    @if ($errors->has('h_contact'))
                                        <span class="text-danger">{{ $errors->first('h_contact') }}</span>
                                    @endif
                                </div>
                               
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Additional Information </label>
                                    <textarea class="form-control" rows="3" placeholder="Enter Description" name="additional_information"></textarea>
                                </div>
                              
                                <div class="form-group">
                                    <div class="box-footer" style="text-align: right;">
                                    <button type="submit" class="btn btn-primary" onclick="submitForm(this);"><i class="fa fa-save"></i> Save</button>
                                    
                                    </div>
                                </div>  
                            </div>
                              </form>
                            </div>
                        </div>
                            <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function submitForm(btn) {
        // disable the button
        btn.disabled = true;
        // submit the form    
        btn.form.submit();
    }
    $(document).ready(function () {
            $('#image').change(function () {
                var input = this;

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#selectedFileName').html('<img src="' + e.target.result + '" alt="Selected Image" width="200">');
                    };

                    reader.readAsDataURL(input.files[0]);
                } else {
                    $('#selectedFileName').html('');
                }
            });
        });

    // When user selects a user type
   
   
// When user selects a user type
// $('#user-type').on('change', function() {
//     var userType = $(this).val();
    
//     // Show table if user type is "developer"
//     if (userType === 'developer') {
//         $('#user_table').show();
        
//         // AJAX call to populate dynamic dropdown with data from database
//         $.ajax({
//             url: '/get-users',
//             method: 'GET',
//             dataType: 'json',
//             success: function(data) {
//                 var options = '';
//                 $.each(data, function(index, value) {
//                     options += '<option value="' + value.id + '">' + value.name + '</option>';
//                 });
//                 $('#user_table .dynamic_dropdown').html(options);
//             },
//             error: function(xhr, textStatus, errorThrown) {
//                 console.log('Error: ' + errorThrown);
//             }
//         });
//     }
//     // Hide table if user type is "leader"
//     else if (userType === 'leader') {
//         $('#user_table').hide();
//     }
// });

// // When user clicks add button
// $('#user-table').on('click', '.add_button', function() {
//     var html = '<tr><td><select class="user_type_dropdown"><option value="">--Select--</option><option value="backend">Backend</option><option value="frontend">Frontend</option></select></td><td><select class="dynamic_dropdown"><option value="">--Select--</option></select></td><td><button class="remove_button" type="button">Remove</button></td></tr>';
//     $('#user_table tbody').append(html);
    
//     // AJAX call to populate dynamic dropdown with data from database
//     $.ajax({
//         url: '/project',
//         method: 'GET',
//         dataType: 'json',
//         success: function(data) {
//             var options = '';
//             $.each(data, function(index, value) {
//                 options += '<option value="' + value.id + '">' + value.name + '</option>';
//             });
//             $('#user_table .dynamic_dropdown:last').html(options);
//         },
//         error: function(xhr, textStatus, errorThrown) {
//             console.log('Error: ' + errorThrown);
//         }
//     });
// });

// // When user clicks remove button
// $('#user_table').on('click', '.remove_button', function() {
//     $(this).closest('tr').remove();
// });
       
    </script>
@endsection

