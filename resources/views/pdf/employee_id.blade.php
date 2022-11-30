<?php
ini_set('pcre.backtrack_limit', '5000000');
error_reporting(0);
?>

<div class="studentId"style="display: flex;justify-content: center; align-items: center;height: 100vh;
    width: 100%;">
    <div class="idBox" style="padding: 20px;border-radius: 10px;width: 100%;
        height: 500px;display:inline-flex; justify-content: space-between;background-color: #fff;">

        <div class="leftBox" style="background-color: white; border: 1px solid black; width: 40%;
                padding: 15px;border-radius: 10px;margin-right: 4px; float: left;">
                <h4 class="text-center" style="text-align: center"><span style="font-size: 22px;font-weight: 600;border-bottom: 1px solid black;">Identy Card</span> </h4>
            <div class="leftBoxTop" style="display: flex;justify-content:space-between;">
                <img src="{{ public_path('images/Logo_Icon/logo.png') }}" alt=""
                    style="height: 120px;width: 150px;transform: scale(1.1);">
                <img src="{{ public_path('images/img/student.png') }}" alt=""
                    style="height: 120px; width: 150px;transform: scale(1.1);margin-left: 80px;">
            </div>
            <div class="text-center">
                <h3 style="font-size: 28px;font-weight: 700;text-align: center">Tamim Iqbal</h3>
                <p style="font-size: 20px;font-weight: 600;margin: 1px 0; text-align: center">Bangla Lecturer</p>
                <p style="font-size: 20px;font-weight: 600;margin: 1px 0; text-align: center">Id : 012456789 </p>
                <p style="font-size: 20px;font-weight: 600;margin: 1px 0;text-align: center">Blood Group:	AB+ </p>
                <h5 style="background-color: #130041; color: white;padding: 5px;font-size: 20px;text-align: center"> Learning Campus Main Branch</h5>
            </div>
            <h6 class="text-end" style="margin-left:220px;font-size: 18px;font-weight: 700; float:right;border-style: dotted; border-top: 2px solid black">
                <span>Signature of Principal</span>
            </h6>
        </div>

        <div class="rightBox" style="text-align: center; background-color: white;
            border: 1px solid black;width: 40%;padding: 15px; border-radius: 10px;float: right;">
            <h6 style="font-size: 22px;font-weight: 500; margin: 10px 0; font-weight: bold">Personal Information</h6>
            <h4 style="font-size: 20px;margin: 4px 0;color: red;">Contact : 0000000000</h4>
            <h4 style="font-size: 17px;font-weight: 500; margin: 10px 0;">Permanant Address : Dhaka</h4>
            <br><br>
            <div class="leftBoxTop" style="display: flex; justify-content:space-between;">
                <img src="{{ public_path('images/Logo_Icon/logo.png') }}" alt="" style="width: 50%;height: 200px; transform: scale(1.7);">
            </div>
            <h5 style="font-size: 15px;  font-weight: 500;">In case of lost please return it to</h5>
            <h3 style="font-size: 20px; font-weight: 700;">Learning Campus Main Branch</h3>
            <p style="font-size: 16px;margin: 4px 0;font-weight: 600;line-height: 20px;">Mirpur, Dhaka</p>
            <p style="font-size: 16px;margin: 4px 0;font-weight: 600;line-height: 20px;">Phone : 0123456789</p>
            <p style="font-size: 16px;margin: 4px 0;font-weight: 600;line-height: 20px;">Web : learningcampus.com</p>
        </div>

    </div>
</div>
