<!DOCTYPE html>
<html>
<head>
    <title>PROFILE INFORMATION</title>
</head>
<body>
    <div style="border: 2px solid red;height: 1020px;margin-top:auto;">
    <table>
    <tr>
        <td>
            <img class="brand" src="{{ public_path('logo.png') }}" style="height: 70px;margin-top: -95px;" alt="bootstraper logo">
        </td>
        <td style="vertical-align: top; padding-left: 30px;">
            <p style="margin-top: 20px; height: 70px; width: 167px; font-size: 50px;">
                <strong>{{ Auth::user()->name }}</strong>
            </p>
            <p style="margin-top: -60px;font-size: 18px;width:80px;font-weight: bold;">
            class of 23
            </p>
            <p style="margin-top: -10px;font-size: 18px;width:80px;font-weight: bold;">
            farward
            </p>
            <p style="margin-top: -14px;width:150px;font-size: 18px;font-weight: bold;">
            Jersey #9 & #27
            </p>
        </td>
        <td>
            <div style="border: 2px solid red;height: auto;margin-left:80px;margin-top:20px;" >
            <img class="brand" src="{{ public_path('/app/' . $profile->image) }}" style="height: 200px; width:150px;" alt="bootstraper logo">
            </div>
           
        </td>
    </tr>
    </table>
    <h4 style="margin-top: -29px; color: red;margin-left:200px;">
                <span style="margin-top: -35px;margin-left:90px; border-bottom: 3px solid black; display: inline-block;">Personal</span>
    </h4>
    <table style="margin-top:-40px;">
        <tr>
            <td>
                    <p style="padding-left: 20px;font-size: 12px;width:80px;font-weight: bold;margin-top:-50px;color:red;">FULL NAME: </p>
                    <p style="padding-left: 20px;font-size: 12px;font-weight: bold; position: relative; top: -15px;color:red;">GOALS: </p>
                    <p style="padding-left: 20px;font-size: 12px;font-weight: bold;position: relative; top: 15px;color:red;">HEIGHT:</p>
                    <p style="padding-left: 20px;font-size: 12px;font-weight: bold;position: relative; top: 25px;color:red;">WEIGHT:</p>
                    <p style="padding-left: 20px;font-size: 12px;font-weight: bold;position: relative; top: 33px;color:red;">DOB:</p>
                    <p style="padding-left: 20px;font-size: 12px;font-weight: bold;position: relative; top: 40px;color:red;">ADDRESS:</p>
                    <p style="padding-left: 20px;font-size: 12px;font-weight: bold;position: relative; top: 48px;color:red;">EMAIL:</p>
                    <p style="padding-left: 20px;font-size: 12px;font-weight: bold;position: relative; top: 57px;color:red;">PHONE :</p>
                    <p style="padding-left: 20px;font-size: 12px;font-weight: bold;position: relative; top: 65px;color:red;">PARENTS:</p>
            </td>
            <td>
                    <p style="padding-left: 80px;">{{ $profile->full_name }} </p>
                    <p style="padding-left: 80px;">{{ $profile->goals }} </p>
                    <p style="padding-left: 80px;">{{ $profile->height }}</p>
                    <p style="padding-left: 80px;">{{ $profile->weight }}</strong></p>
                    <p style="padding-left: 80px;">{{ Carbon\Carbon::parse($profile->dob)->format('j- M-Y') }}</p>
                    <p style="padding-left: 80px;">{{ $profile->address }}</p>
                    <p style="padding-left: 80px;text-decoration: underline;">{{ $profile->email }}</p>
                    <p style="padding-left: 80px;">{{ $profile->phone_number }}</p>
                    <p style="padding-left: 80px;">{{ $profile->parents }}</p>
            </td>
            <td>
            
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
            <div class="col-md-6">
            <h2 style="margin-top: -19px; color: red;">
                <span style="margin-left:90px; border-bottom: 3px solid black; display: inline-block;">ACADEMICS</span>
            </h2>
            <p style="padding-left: 20px;"><strong style="font-size: 12px;font-weight: bold;color:red;">  HIGH SCHOOL:</strong>&nbsp; &nbsp;{{ $profile->h_school }}</p>
            <p style="padding-left: 20px;"><strong style="font-size: 12px;font-weight: bold;color:red; ">GPA: </strong>&nbsp; &nbsp;{{ $profile->gpa }}</p>
            <p style="padding-left: 20px;"><strong style="font-size: 12px;font-weight: bold;color:red; ">ACT:</strong>&nbsp; &nbsp;{{ $profile->act }}</p>
            <p style="padding-left: 20px;"><strong style="font-size: 12px;font-weight: bold;color:red; ">MAJOR:</strong>&nbsp; &nbsp;{{ $profile->major }}</p>
            <p style="padding-left: 20px;"><strong style="font-size: 12px;font-weight: bold;color:red; ">ACHIEVEMENTS: </strong>&nbsp; &nbsp;{{ $profile->achievements }}</p>
            </td>
            <td style="padding-left: 20px;">
                
            <h2 style="margin-top: 5px; color: red;">
                <span style="margin-left:90px;border-bottom: 3px solid black; display: inline-block;">ATHLETICS</span>
            </h2>
               
                <p><strong style="font-size: 12px;font-weight: bold;color:red;">CLUB: </strong>&nbsp; &nbsp;{{ $profile->club }}</p>
                <p><strong style="font-size: 12px;font-weight: bold;color:red;">POSITION: </strong>&nbsp; &nbsp;{{ $profile->position }}</p>
                <p><strong style="font-size: 12px;font-weight: bold;color:red;">CLUB ACHIEVEMENTS:</strong>&nbsp; &nbsp;{{ $profile->c_achievements }}</p>
                <p><strong style="font-size: 12px;font-weight: bold;color:red;">FOOTAGE :</strong>&nbsp; &nbsp;{{ $profile->footage }}</p>
                <p><strong style="font-size: 12px;font-weight: bold;color:red;">HIGHR SCHOOL CONTACTS:</strong>&nbsp; &nbsp;{{ $profile->h_contact }}</p>
                <p><strong style="font-size: 12px;font-weight: bold;color:red;">ADITIONAL INFORMATION:</strong>&nbsp; &nbsp;{{ $profile->additional_information }}</p>
            </td>
        </tr>
    </table>
    </div>
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
  </div>

   <td style="padding-left: 20px;">
                
            <h2 style="margin-left:90px;">ATHLETICS</h2>
           
            <p><strong>CLUB: </strong>&nbsp; &nbsp;{{ $profile->club }}</p>
            <p><strong>POSITION: </strong>&nbsp; &nbsp;{{ $profile->position }}</p>
            <p><strong>CLUB ACHIEVEMENTS:</strong>&nbsp; &nbsp;{{ $profile->c_achievements }}</p>
            <p><strong>FOOTAGE :</strong>&nbsp; &nbsp;{{ $profile->footage }}</p>
            <p><strong>HIGHR SCHOOL CONTACTS:</strong>&nbsp; &nbsp;{{ $profile->h_contact }}</p>
            <p><strong>ADITIONAL INFORMATION:</strong>&nbsp; &nbsp;{{ $profile->additional_information }}</p>
            </td>
-->
       
   

</body>
</html>

