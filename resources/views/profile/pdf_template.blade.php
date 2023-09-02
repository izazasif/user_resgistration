<!DOCTYPE html>
<html>
<head>
    <title>Profile Information</title>
</head>
<body>
    <table>
        <tr>
            <td>
                <img class="brand" src="{{ public_path('logo.png') }}" style="height: 70px;margin-top:-110px;" alt="bootstraper logo">
            </td>
            <td>
                <p style="margin-top:-20px;height: 176px; width: 167px;margin-left:30px;font-size:50px;">
                    <strong> {{Auth::user()->name }}</strong>&nbsp; &nbsp;
                </p>
            </td>
            <td>
                <img class="brand" src="{{ public_path('/app/' . $profile->image) }}" style="margin-left:80px;margin-top:-20px;height: 176px; width: 167px;" alt="bootstraper logo">
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
            
            <div class="row">
            <div class="col-md-4" style="margin-top:-110px;">
            <h1>Profile Information</h1>
                    <!-- Add your image here -->
                    <p><strong>Full Name: </strong>&nbsp; &nbsp;{{ $profile->full_name }}</p>
                    <p><strong>Goals: </strong>&nbsp; &nbsp;{{ $profile->goals }}</p>
                    <p><strong>Height:</strong>&nbsp; &nbsp;{{ $profile->height }}</p>
                    <p><strong>Weight:</strong>&nbsp; &nbsp;{{ $profile->weight }}</p>
                    <p><strong>DOB:</strong> &nbsp;&nbsp; {{ Carbon\Carbon::parse($profile->dob)->format('j- M-Y') }} </p>
                    <p><strong>Address:</strong>&nbsp; &nbsp;{{ $profile->address }}</p>
                    <p><strong>Email:</strong>&nbsp; &nbsp;{{ $profile->email }}</p>
                    <p><strong>phone :</strong>&nbsp; &nbsp;{{ $profile->phone_number }}</p>
                    <p><strong>Parents:</strong>&nbsp; &nbsp;{{ $profile->parents }}</p>
                </div>
            </div>    
            </td>
            <td>
                
            </td>
            <td>
            
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <td>
            <div class="col-md-6">
            <h2>Academics</h2>
            <p><strong>High School: </strong>&nbsp; &nbsp;{{ $profile->h_school }}</p>
            <p><strong>GPA: </strong>&nbsp; &nbsp;{{ $profile->gpa }}</p>
            <p><strong>Act:</strong>&nbsp; &nbsp;{{ $profile->act }}</p>
            <p><strong>Major:</strong>&nbsp; &nbsp;{{ $profile->major }}</p>
            <p><strong>Achievements: </strong>&nbsp; &nbsp;{{ $profile->achievements }}</p>
            </td>
            <td>
            <h2>Athletics</h2>
            <p><strong>Club: </strong>&nbsp; &nbsp;{{ $profile->club }}</p>
            <p><strong>Position: </strong>&nbsp; &nbsp;{{ $profile->position }}</p>
            <p><strong>club achievements:</strong>&nbsp; &nbsp;{{ $profile->c_achievements }}</p>
            <p><strong>Footage :</strong>&nbsp; &nbsp;{{ $profile->footage }}</p>
            <p><strong>High School Contact:</strong>&nbsp; &nbsp;{{ $profile->h_contact }}</p>
            <p><strong>Aditional Information:</strong>&nbsp; &nbsp;{{ $profile->additional_information }}</p>
            </td>
        </tr>
    </table>
    
    <!-- <div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Academics</h2>
            <p><strong>High School: </strong>&nbsp; &nbsp;{{ $profile->h_school }}</p>
            <p><strong>GPA: </strong>&nbsp; &nbsp;{{ $profile->gpa }}</p>
            <p><strong>Act:</strong>&nbsp; &nbsp;{{ $profile->act }}</p>
            <p><strong>Major:</strong>&nbsp; &nbsp;{{ $profile->major }}</p>
            <p><strong>Achievements: </strong>&nbsp; &nbsp;{{ $profile->achievements }}</p>
        </div>
        <div class="col-md-6">
            <h2>Athletics</h2>
            <p><strong>Club: </strong>&nbsp; &nbsp;{{ $profile->club }}</p>
            <p><strong>Position: </strong>&nbsp; &nbsp;{{ $profile->position }}</p>
            <p><strong>club achievements:</strong>&nbsp; &nbsp;{{ $profile->c_achievements }}</p>
            <p><strong>Footage :</strong>&nbsp; &nbsp;{{ $profile->footage }}</p>
            <p><strong>High School Contact:</strong>&nbsp; &nbsp;{{ $profile->h_contact }}</p>
            <p><strong>Aditional Information:</strong>&nbsp; &nbsp;{{ $profile->additional_information }}</p>
        </div>
    </div>
  </div> -->
       
   

</body>
</html>

