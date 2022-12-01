<?php
ini_set('pcre.backtrack_limit', '5000000');
error_reporting(0);
?>

<div class="transciptForm">
    <div class="transciptDIv" id="transciptDiv">
       <table border="0px" width="98%" align="center" style="border-collapse:collapse; margin:2px auto; padding-top: 50px">
    <tr>
        <td style="width:1.5in; text-align:center;">
            <img src="{{ public_path('images/Logo_Icon/logo.png') }} " height="140px" width="140px" />
            {{-- {{  public_path('images/Logo_Icon/preload2.png') }} --}}
        </td>

        <td style="text-align:center; line-height: 30px">
            <div class="adFormTxt">
                <h4 style="font-size: 26px;font-weight: 900; margin: 20px 0 2px; color: darkblue;">Learning Campus (Main
                    Branch)</h4>
                <a style="color: blue;text-decoration: none;" href="#">www.LearningCampus.com</a>
                <p style="font-size: 18px;margin: 2px 0;line-height: 25px; color:#5a6a7e">Mirpur-1100, Dhaka</p>
                <p style="font-size: 18px;margin: 2px 0;line-height: 25px; color:#5a6a7e">Mobile : 01234567890</p>
                <br>
                <h2 style="font-size: 22px; font-weight: 700; border: 2px solid gray;margin-top: 25px;   margin: 15px 0px;"> Mark sheet </h2>
            </div>
        </td>

        <td style="width:1.2in; text-align:left;">

            <img src="{{ public_path('images/img/student.png') }}" height="120px" width="120px" />

        </td>

    </tr>
</table>

<table width="95%" cellpadding="0" cellspacing="0" border="0"
    style="border-collapse:collapse; margin-top: 20px; ">

    <tr style="line-height: 20px">
        <td style="font-size: 16px;width: 120px;text-align: start;">Name of Student</td>
        <td colspan="">
            <p>............................................................................................</p>
        </td>
        <td style="font-size: 16px;width: 120px;text-align: start;"></td>
        <td colspan="">
            <p style="margin-top: 10px"></p>
        </td>
    </tr>
    <br>
    <tr>
        <td style="font-size: 16px;width: 120px;text-align: start;">Father's Name</td>
        <td colspan="">
            <p>............................................................................................</p>
        </td>
        <td style="font-size: 16px;width: 120px;text-align: start;"></td>
        <td colspan="">
            <p></p>
        </td>
    </tr>
    <br>
    <tr>
        <td style="font-size: 16px;width: 120px;text-align: start;">Mother's Name</td>
        <td colspan="">
            <p>............................................................................................</p>
        </td>
        <td style="font-size: 16px;width: 120px;text-align: start;"></td>
        <td colspan="">
            <p></p>
        </td>
    </tr>
    <br>
    <tr>
        <td style="font-size: 16px;width: 120px;text-align: start;">Date Of Birth</td>
        <td colspan="">
            <p>............................................................................................</p>
        </td>
        <td style="font-size: 16px;width: 120px;text-align: start;"></td>
        <td colspan="">
            <p></p>
        </td>
    </tr>
    <tr>
        <td style="font-size: 16px;width: 120px;text-align: start;">Institue</td>
        <td colspan="">
            <p>............................................................................................</p>
        </td>
        <td style="font-size: 16px;width: 120px;text-align: start;"></td>
        <td colspan="">
            <p></p>
        </td>
    </tr>
    <br>
</table>

        <div class="transMark">
            <div class="table-responsive attendenceTable">
                <table class="table text-center transTable">
                    <thead>
                      <tr>
                        <th scope="col">SL.NO.</th>
                        <th scope="col">Name of Subjects</th>
                        <th scope="col">Letter Grade</th>
                        <th scope="col">Grade Point(GP)</th>
                        <th scope="col">GPA <br> <small>(Without Additional Subject)</small> </th>
                        <th scope="col">Grade Point Avarage (GPA) </th>
                      </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">1</th>
                            <td>Bangla 1st Paper</td>
                            <td>A+</td>
                            <td>5</td>
                            <td rowspan="6">4.68</td>
                            <td rowspan="9">4.96</td>
                        </tr>

                      <tr>
                        <th scope="row">2</th>
                        <td>Bangla 2nd Paper</td>
                        <td>A+</td>
                        <td>5</td>
                      </tr>

                      <tr>
                        <th scope="row">3</th>
                        <td>English 2nd Paper</td>
                        <td>A-</td>
                        <td>4</td>
                      </tr>

                      <tr>
                        <th scope="row">4</th>
                        <td>Matchmatics</td>
                        <td>A+</td>
                        <td>5</td>
                      </tr>

                      <tr>
                        <th scope="row">5</th>
                        <td>Science</td>
                        <td>A+</td>
                        <td>5</td>
                      </tr>

                      <tr>
                        <th scope="row">6</th>
                        <td>Religion</td>
                        <td>A+</td>
                        <td>5</td>
                      </tr>

                      <tr>
                          <td colspan="5">Additional Subject</td>
                      </tr>

                      <tr>
                        <th scope="row" rowspan="2">7</th>
                        <td rowspan="2">Agriculture</td>
                        <td rowspan="2">A+</td>
                        <td rowspan="2">5</td>
                        <td>GPA Above 2 </td>
                     </tr>

                     <tr>
                        <td>2.00</td>
                    </tr>

                    </tbody>
                  </table>
            </div>
        </div>



        <div class="trancriptBottom">
           <p>Result Published Date : Uttara, December 31,2016</p>
           <p>Controller of Examinations</p>
        </div>
    </div>
</div>
