<!DOCTYPE html>
<html>
<head>

    <title>PROFILE INFORMATION</title>
    <style>
          body {
            
            background-image: url('logo.png'); /* Replace with the path to your transparent background image */
            background-size: 70% auto;
            background-repeat: no-repeat;
            background-position: center center;
            /* max-height: 850px; */
           
        }
        .content {
            background-color: rgba(255, 255, 255, 0.97); /* Adjust the transparency here */
           
        }
        /* Add your other CSS styles here */
    </style>
    </style>
</head>
<body>
    
    <div class="content" style="border: 2px solid #990000;width:760px;height:1057px;margin-top:-30px;margin-left:-30px;">
    <table>
    <tr>
        <td>
            <img class="brand" src="{{ public_path('logo.png') }}" style="height: 140px;width:130px;margin-top: -120px;" alt="bootstraper logo">
            
        </td>
        
        <img class="brand" src="{{ public_path('logo2.png') }}" style="height: 70px;margin-top: 105px;margin-left:-25px;" alt="bootstraper logo">
        <td style="vertical-align: top;">
            <p style="margin-top: 20px; height: 70px; width: 270px; font-size: 30px;margin-left:55px;">
                <strong>{{ $profile->full_name }}</strong>
            </p>
            <p style="margin-top: -60px;font-size: 20px;width:120px;font-weight: bold;margin-left:55px;">
            Class of {{ $profile->class }}
            </p>
            <p style="margin-top: -10px;font-size: 20px;width:80px;font-weight: bold;margin-left:55px;">
            {{ $profile->position }}
            </p>
            <p style="margin-top: -14px;width:150px;font-size: 20px;font-weight: bold;margin-left:55px;">
            Jersey #{{ $profile->joursey }}
            </p>
        </td>
        <td>
            <div style="border: 2px solid #990000;height: auto;margin-left:10px;margin-top:15px;" >
            <img class="brand" src="{{ public_path('/app/' . $profile->image) }}" style="height: 250px; width:200px;" alt="bootstraper logo">
            </div>
           
        </td>
    </tr>
    </table>
    <table>
        
    </table>
    <h4 style="margin-top: -19px; color: #990000;margin-left:170px;font-size: 26px;">
                <span style="margin-top: -75px;margin-left:90px; border-bottom: 3px solid black; display: inline-block;">Personal</span>
    </h4>
    <table style="margin-top:-140px;">
        <tr>
            <th style="text-align: left;padding-left: 20px;font-size: 15px;width:80px;font-weight: bold;margin: 6;color:#990000;">Full Name:</th>
            <th style="padding-left: 55px;font-size: 16px;font-weight: normal;text-align: justify;">{{ $profile->full_name }}</th>
        </tr>
        <tr>
            <th style="text-align: left;padding-left: 20px;font-size: 15px;width:80px;font-weight: bold;margin: 6;color:#990000;vertical-align: top;">Goals: </th>
            <th style="padding-left: 55px;font-size: 16px;font-weight: normal;width:540px;text-align: justify;">{{ $profile->goals }} </th>
        </tr>
        <tr>
            <th style="text-align: left;padding-left: 20px;font-size: 15px;width:80px;font-weight: bold;margin: 6;color:#990000;">Height:</th>
            <th style="padding-left: 55px;font-size: 16px;font-weight: normal;width:80px;text-align: justify;">{{ $profile->height }}</th>
        </tr>
        <tr>
            <th style="text-align: left;padding-left: 20px;font-size: 15px;width:80px;font-weight: bold;margin: 6;color:#990000;">Weight:</th>
            <th style="padding-left: 55px;font-size: 16px;font-weight: normal;width:80px;text-align: justify;">{{ $profile->weight }}</th>
        </tr>
        <tr>
            <th style="text-align: left;padding-left: 20px;font-size: 15px;width:80px;font-weight: bold;margin: 6;color:#990000;">DOB:</th>
            <th style="padding-left: 55px;font-size: 16px;font-weight: normal;width:80px;text-align: justify;">{{ Carbon\Carbon::parse($profile->dob)->format('j- M-Y') }}</th>
        </tr>
        <tr>
            <th style="text-align: left;padding-left: 20px;font-size: 15px;width:80px;font-weight: bold;margin: 6;color:#990000;">Address:</th>
            <th style="padding-left: 55px;font-size: 16px;font-weight: normal;width:80px;text-align: justify;">{{ $profile->address }}</th>
        </tr>
        <tr>
            <th style="text-align: left;padding-left: 20px;font-size: 15px;width:80px;font-weight: bold;margin: 6;color:#990000;">Email:</th>
            <th style="padding-left: 55px;font-size: 16px;font-weight: normal;width:80px;text-align: justify;text-decoration: underline;">{{ $profile->email }}</th>
            <!-- <p style="border-bottom: 2px solid black;margin-left:-690px;width:55px;margin-top:40px;"></p> -->
        </tr>
        <tr>
            <th style="text-align: left;padding-left: 20px;font-size: 15px;width:80px;font-weight: bold;margin: 6;color:#990000;">Phone:</th>
            <th style="padding-left: 55px;font-size: 16px;font-weight: normal;width:80px;text-align: justify;">{{ $profile->phone_number }}</th>
        </tr>
        <tr>
            <th style="text-align: left;padding-left: 20px;font-size: 16px;width:80px;font-weight: bold;margin: 6;color:#990000;vertical-align: top;">Parents:</th>
            <th style="padding-left: 55px;font-size: 16px;font-weight: normal;width:80px;text-align: justify;">{!! str_replace(',', '<br>', $profile->parents) !!}</th>
        </tr>
        </table>
        <table>
            <tr>
                    <th>
                        <table>
                            <tr>
                            <th style="color: #990000;padding-left: 120px;font-size: 20px;">Academics</th>
                            <h2 style="border-bottom: 2px solid black;margin-left:-100px;width:100px;margin-top:40px;"></h2>
                            </tr>
                        </table>
                   </th>
                <th>
                       <table>
                            <tr>
                            <th style="color: #990000;padding-left: 290px;font-size: 20px;">Athletics</th>
                            <h2 style="border-bottom: 2px solid black;margin-left:-80px;width:80px;margin-top:40px;"></h2>
                            </tr>
                        </table>
                </th>
            </tr>
        </table>   
        <table>
            <tr >
                <th>
                  <div >
                    <table >
                            
                            <tr>
                            <th style="padding-left: 20px; font-size: 15px; width: 100px; margin: 3; color: #990000; vertical-align: top;text-align: left;">High School:</th>
                                <th style="padding-left: 2px; font-size: 16px; width: 160px; text-align: justify; vertical-align: top;font-weight: normal;">{{ $profile->h_school }}</th>
                            </tr>
                            <tr>
                                <th style="padding-left: 20px;font-size: 15px;width:80px;margin: 3;color:#990000;vertical-align: top;text-align: left;">GPA: </th>
                                <th style="padding-left: 2px;font-size: 16px;width:80px;text-align: justify;font-weight: normal;">{{ $profile->gpa }} </th>
                            </tr>
                            <tr>
                                <th style="padding-left: 20px;font-size: 15px;width:80px;margin: 3;color:#990000;vertical-align: top;text-align: left;">ACT:</th>
                                <th style="padding-left: 2px;font-size: 16px;width:80px;text-align: justify;font-weight: normal;">{{ $profile->act }}</th>
                            </tr>
                            <tr>
                                <th style="padding-left: 20px;font-size: 15px;width:130px;margin: 3;color:#990000;vertical-align: top;text-align: left;">Desired Major:</th>
                                <th style="padding-left: 2px;font-size: 16px;width:80px;text-align: justify;font-weight: normal;">{{ $profile->major }}</th>
                            </tr>
                            <tr>
                                <th style="padding-left: 20px;font-size: 15px;width:80px;margin: 3;color:#990000;vertical-align: top;text-align: left;">Achievements:</th>
                                <th style="padding-left: 2px;font-size: 16px;width:80px;text-align: justify;font-weight: normal;">{{ $profile->achievements }}</th>
                            </tr>
                    </table>
                  </div>
                </th>
                <th>
            </tr>
        </table>
        <table style="padding-left:320px;margin-top:-360px;">
            <tr>
                <th>
                </th>
                <th >   
                    <table>
                        <tr>
                            <th style="padding-left: 70px; font-size: 15px; width: 10px;  margin:3; color: #990000; text-align: left; vertical-align: top; white-space: nowrap;">Club:</th>
                            <th style="padding-left:0px;font-size: 16px; width: 150px; text-align: left; vertical-align: top;font-weight: normal;">{{ $profile->club }}</th>
                        </tr>
                        <tr>
                            <th style="padding-left: 70px;font-size: 15px;width:10px;margin: 3;color:#990000;text-align: left;vertical-align: top;">Position: </th>
                            <th style="font-size: 16px;width:10px;text-align: left;font-weight: normal;">{{ $profile->position }} </th>
                           
                        </tr>
                        <tr>
                            <th style="padding-left: 70px;font-size: 15px;width:10px;margin: 3;color:#990000;text-align: left;vertical-align: top;">Achievements:</th>
                            <th style="font-size: 16px;width:70px;text-align: left;vertical-align: top;font-weight: normal;">{{ $profile->c_achievements  }}</th>
                        </tr>
                            <p style="padding-left: 67px;font-size: 15px;font-weight: bold;color:#990000;margin: 3;">Video Footage :  <strong style="color:black;text-align: justify;font-size: 16px;font-weight: normal;text-decoration: underline;"> {{ $profile->footage }} </strong></p>
                            <p style="padding-left: 67px;font-size: 15px;font-weight: bold;color:#990000;width:190px;margin: 3;">Club/High School Contacts: <strong style="line-height: 1.4;font-size: 16px;color:black;text-align: justify;font-weight: normal;"> {{ $profile->h_contact }} </strong> </p>
                            <!-- <p style="padding-left: 67px;font-size: 15px;font-weight: bold;color:#990000;margin: 2;">ADITIONAL INFORMATION:<strong style="font-size: 16px;color:black;text-align: justify;"> {{ $profile->additional_information }} </strong></p>  -->
                    </table>
                </th>
            </tr>
        </table>
        <br>
        <br>
        <div style="height: 30px;"></div>
    </div>
</body>
</html>

