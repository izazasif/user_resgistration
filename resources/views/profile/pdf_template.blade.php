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
    <table>
        <tr>
            <th style="padding-left: 20px;font-size: 12px;width:80px;font-weight: bold;margin: 2;color:red;">FULL NAME:</th>
            <th style="padding-left: 20px;font-size: 16px;text-align: justify;">{{ $profile->full_name }}</th>
        </tr>
        <tr>
            <th style="padding-left: 20px;font-size: 12px;width:80px;font-weight: bold;margin: 2;color:red;">GOALS: </th>
            <th style="padding-left: 20px;font-size: 16px;width:540px;text-align: justify;">{{ $profile->goals }} </th>
        </tr>
        <tr>
            <th style="padding-left: 20px;font-size: 12px;width:80px;font-weight: bold;margin: 2;color:red;">HEIGHT:</th>
            <th style="padding-left: 20px;font-size: 16px;width:80px;text-align: justify;">{{ $profile->height }}</th>
        </tr>
        <tr>
            <th style="padding-left: 20px;font-size: 12px;width:80px;font-weight: bold;margin: 2;color:red;">WEIGHT:</th>
            <th style="padding-left: 20px;font-size: 16px;width:80px;text-align: justify;">{{ $profile->weight }}</th>
        </tr>
        <tr>
            <th style="padding-left: 20px;font-size: 12px;width:80px;font-weight: bold;margin: 2;color:red;">DOB:</th>
            <th style="padding-left: 20px;font-size: 16px;width:80px;text-align: justify;">{{ Carbon\Carbon::parse($profile->dob)->format('j- M-Y') }}</th>
        </tr>
        <tr>
            <th style="padding-left: 20px;font-size: 12px;width:80px;font-weight: bold;margin: 2;color:red;">ADDRESS:</th>
            <th style="padding-left: 20px;font-size: 16px;width:80px;text-align: justify;">{{ $profile->address }}</th>
        </tr>
        <tr>
            <th style="padding-left: 20px;font-size: 12px;width:80px;font-weight: bold;margin: 2;color:red;">EMAIL:</th>
            <th style="padding-left: 20px;font-size: 16px;width:80px;text-align: justify;">{{ $profile->email }}</th>
        </tr>
        <tr>
            <th style="padding-left: 20px;font-size: 12px;width:80px;font-weight: bold;margin: 2;color:red;">PHONE:</th>
            <th style="padding-left: 20px;font-size: 16px;width:80px;text-align: justify;">{{ $profile->phone_number }}</th>
        </tr>
        <tr>
            <th style="padding-left: 20px;font-size: 12px;width:80px;font-weight: bold;margin: 2;color:red;vertical-align: top;">PARENTS:</th>
            <th style="padding-left: 20px;font-size: 16px;width:80px;text-align: justify;">{!! str_replace(',', '<br>', $profile->parents) !!}</th>
        </tr>
        </table>
        
    <table style="margin-top:60px;">
        <tr>
            <th>
            <h2 style="color: red;padding-left: 100px;">ACADEMICS</h2>
            <h2 style="border-bottom: 2px solid black;margin-left:130px;width:150px;margin-top:-20px;"></h2>
               <table>
                 
                    <tr>
                        <th style="padding-left: 20px;font-size: 12px;width:80px;font-weight: bold;margin: 2;color:red;vertical-align: top;">HIGH SCHOOL:</th>
                        <th style="padding-left: 20px;font-size: 16px;width:160px;text-align: justify;">{{ $profile->h_school }}</th>
                    </tr>
                    <tr>
                        <th style="padding-left: 20px;font-size: 12px;width:80px;font-weight: bold;margin: 2;color:red;">GPA: </th>
                        <th style="padding-left: 20px;font-size: 16px;width:80px;text-align: justify;">{{ $profile->gpa }} </th>
                    </tr>
                    <tr>
                        <th style="padding-left: 20px;font-size: 12px;width:80px;font-weight: bold;margin: 2;color:red;">ACT:</th>
                        <th style="padding-left: 20px;font-size: 16px;width:80px;text-align: justify;">{{ $profile->act }}</th>
                    </tr>
                    <tr>
                        <th style="padding-left: 20px;font-size: 12px;width:80px;font-weight: bold;margin: 2;color:red;">MAJOR:</th>
                        <th style="padding-left: 20px;font-size: 16px;width:80px;text-align: justify;">{{ $profile->major }}</th>
                    </tr>
                    <tr>
                        <th style="padding-left: 20px;font-size: 12px;width:80px;font-weight: bold;margin: 2;color:red;vertical-align: top;">ACHIEVEMENTS:</th>
                        <th style="padding-left: 20px;font-size: 16px;width:80px;text-align: justify;">{{ $profile->achievements }}</th>
                    </tr>
              </table>
            </th>
            <th>   
            <h2 style="color: red;padding-left: 60px;">ATHLETICS</h2>
            <h2 style="border-bottom: 2px solid black;margin-left:140px;width:150px;margin-top:-20px;"></h2>
                <table>
                    <tr>
                        <th style="padding-left: 40px;font-size: 12px;width:20px;font-weight: bold;margin: 2;color:red;text-align: left;">CLUB:</th>
                        <th style="font-size: 16px;width:130px;text-align: left;">{{ $profile->club }}</th>
                    </tr>
                    <tr>
                        <th style="padding-left: 40px;font-size: 12px;width:20px;font-weight: bold;margin: 2;color:red;text-align: left;">POSITION: </th>
                        <th style="font-size: 16px;width:80px;text-align: justify;">{{ $profile->position }} </th>
                    </tr>
                    <tr>
                        <th style="padding-left: 40px;font-size: 12px;width:20px;font-weight: bold;margin: 2;color:red;text-align: left;vertical-align: top;">ACHIEVEMENTS:</th>
                        <th style="font-size: 16px;width:130px;text-align: justify;vertical-align: top;">{{ $profile->c_achievements  }}</th>
                    </tr>
                     <p style="padding-left: 40px;font-size: 12px;font-weight: bold;color:red;">FOOTAGE :  <strong style="color:black;text-align: justify;"> {{ $profile->footage }} </strong></p>
                        <p style="padding-left: 40px;font-size: 12px;font-weight: bold;color:red;width:190px;">HIGHR SCHOOL CONTACTS: <strong style="color:black;text-align: justify;"> {{ $profile->h_contact }} </strong> </p>
                        <p style="padding-left: 40px;font-size: 12px;font-weight: bold;color:red;">ADITIONAL INFORMATION:<strong style="color:black;text-align: justify;"> {{ $profile->additional_information }} </strong></p>
                </table>
            </th>
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

