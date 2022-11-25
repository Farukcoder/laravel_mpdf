<?php
ini_set('pcre.backtrack_limit', '5000000');
error_reporting(0);
?>

<div class="studentId_new"style="display: flex;justify-content: center;
        align-items: center;">
    <div class="studentId_new_box"
        style="display: inline-flex;justify-content: space-between;">
        <div class="studentId_new_left"  style="background-color: #fff;
            border-radius: 10px;border: 1px solid black;margin-right: 2px;padding: 5px;float: left; width: 47%;">
            <img src="{{ public_path('images/Logo_Icon/logo.png') }}" class="idLogo" alt=""
                style="margin-left: 130px; width: 140px;display: block;transform: scale(1.5);">
            <h2 style="text-align: center;background-color: red;padding: 4px;color: white;font-size: 24px;
                font-weight: 400;margin-top: -15px;">
                Learning Campus </h2>
            <h6 class="text-center" style="font-size: 24px;font-weight: 500;text-align: center">Main Branch</h6>
            <img src="{{ public_path('images/img/student.png') }}" class="idStudent" alt=""
                style="margin-left: 150px ;display: block; width: 65px;border: 1px solid black;transform: scale(1.7);">
            {{-- <img src="{{ public_path('images/Logo_Icon/preload2.png') }}" class="idCopyright" alt="" style="width: 70%;position: absolute;top: 34%; left: 15%; opacity: 0.15; z-index: -1;"> --}}
            <div class="studentId_new_details" style="margin: 5px 0;text-align: center;">
                <h4 style="font-size: 24px;font-weight: 600;color: darkblue;">Md. Kamal Hossain</h4>
                <table width="100%" cellpadding="0" cellspacing="0" border="0"
                    style="border-collapse:collapse;margin-left: 150px; text-align: left">
                    <tr style="text-align: center">
                        <td style="font-size: 17px;width: 120px;text-align: start;">Class</td>
                        <td colspan="" style="">
                            <p>: A</p>
                        </td>
                    </tr>

                    <tr>
                        <td style="font-size: 17px;width: 120px;text-align: start;">Roll</td>
                        <td colspan="">
                            <p>: D</p>
                        </td>
                    </tr>

                    <tr>
                        <td style="font-size: 17px;width: 120px;text-align: start;">Section</td>
                        <td colspan="">
                            <p>: E</p>
                        </td>
                    </tr>

                    <tr>
                        <td style="font-size: 17px;width: 120px;text-align: start;">Session</td>
                        <td colspan="">
                            <p>: F</p>
                        </td>
                    </tr>
                </table>
            </div>
            <h3
                style="text-align: right;font-size: 22px;font-weight: 400;color: white;background-color: darkblue;padding: 10px 15px 10px;margin-top: 15px;">
                <span>Principal</span></h3>
        </div>

        <div class="studentId_new_right"
            style="background-color: #fff;
            border-radius: 10px;border: 1px solid black;margin-left: 4px;padding: 10px;text-align: center;float: right;width: 47%">
            <h5
                style="font-size: 22px;font-weight: 600;margin-top: 36px;border-bottom: 2px solid black;
            padding-bottom: 10px;">
                If Found Please Return to : </h5>
            <img src="{{ public_path('images/Logo_Icon/logo.png') }}" alt=""
                style="width: 250px;transform: scale(1.2);">
            <h2 style="text-align: center;font-size: 30px;font-weight: 500;margin: 9px 0;">Learning Campus</h2>
            <h6 class="text-center" style="font-size: 22px;font-weight: 500;margin: 9px 0 20px;">Main Branch</h6>
            <p style="font-size: 18px;font-weight: 500;margin: 4px 0;">Uttara, Dhaka</p>
            <p style="font-size: 18px;font-weight: 500;margin: 4px 0;">Mobile : 01234567890</p>
            <p style="font-size: 18px;font-weight: 500;margin: 4px 0;">Email : learningcampus@gmail.com</p>
            <p style="font-size: 18px;font-weight: 500;margin: 4px 0;">web : learningcampus.com</p>
            {{-- <br><br><br><br> --}}
        </div>


    </div>
</div>
