<?php include("header.php") ?>



<body>

  <div class="pageHeader fullwidth">
    <div class="min-width">
      <h1>New Registration</h1>
      <ul class="breadcrumb">
        <li><a href="index">Home</a></li>
        <li>/</li>
        <li>New Registration</li>
      </ul>
    </div>
  </div>
  <div class="fullwidth padding">
    <div class="min-width">
      <div class="signupContainer">
        <div class="flashdata">
          <span id="msgsts"></span>
        </div>
        <!-- <form method="post" action="https://www.kiet.edu/sign-up" id="userform"> -->
        <form method="post" id="userform" autocomplete="off">
          <div class="fields selectFields">
            <input type="text" name="fname" id="fname" placeholder="First Name" onBlur="this.placeholder='First Name'" onFocus="this.placeholder=''" value="">
            <p class='text-danger' id="fname_error"></p>
          </div>
          <div class="fields selectFields">
            <input type="text" name="mname" id="mname" placeholder="Middle Name" onBlur="this.placeholder='Middle Name'" onFocus="this.placeholder=''" value="">
          </div>
          <div class="fields selectFields">
            <input type="text" name="lname" id="lname" placeholder="Last Name" onBlur="this.placeholder='Last Name'" onFocus="this.placeholder=''" value="">
            <p class='text-danger' id="lname_error"></p>
          </div>
          <div class="fields">
            <input type="text" name="mobile" id="mobile" placeholder="Mobile Number" onBlur="this.placeholder='Mobile Number'" onFocus="this.placeholder=''" value="">
            <p class='text-danger' id="mobile_error"></p>
          </div>
          <div class="fields">
            <input type="text" name="email" id="email" placeholder="Email (Username)" onBlur="this.placeholder='Email(Username)'" onFocus="this.placeholder=''" value="">
            <p class='text-danger' id="email_error"></p>
          </div>
          <!-- <div class="fields">
             <label for="dob">Date Of Birth</label> 
            <input type="text" name="dob" id="dob" value="" autocomplete="off">
             <p class='text-danger' id="dob_error" onBlur="this.placeholder='Enter Date of Birth'" placeholder="Enter Date of Birth"></p>
         </div>-->
          <div class="fields">
            <input type="text" name="dob" id="dob" placeholder="Enter Date of Birth" onBlur="this.placeholder='Enter Date of Birth'" onFocus="this.placeholder='Enter Date of Birth'" value="" autocomplete="off" readonly>
            <p class='text-danger' id="dob_error"></p>
          </div>

          <div class="fields">
            <input type="text" name="enrollment" id="enrollment" placeholder="Enter Enrollment Number" onBlur="this.placeholder='Enter Enrollment Number'" onFocus="this.placeholder=''" value="">
            <p class='text-danger' id="enrollment_error"></p>
          </div>

          <div class="fields selectFields">
            <select name="sel_year" id="sel_year">
              <option value="">Year of Passing</option>
              <option value="2011">2011</option>
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
              <option value="2021">2021</option>
              <option value="2022">2022</option>
              <option value="2023">2023</option>
            </select>
            <p class='text-danger' id="sel_year_error"></p>
          </div>

          <div class="fields selectFields">
            <select name="school" id="school">
              <option value="">Select School</option>
              <option value="21">School of Fashion & Design</option>
              <option value="20">School of Agriculture</option>
              <option value="19">School of Education</option>
              <option value="18">School of Law</option>
              <option value="17">School of Basic & Applied Sciences</option>
              <option value="16">School of Nursing</option>
              <option value="15">School of Medical and Allied Sciences</option>
              <option value="14">School of Media & Communication Studies</option>
              <option value="13">School of Library & Information Science</option>
              <option value="12">School of Liberal Arts</option>
              <option value="11">School of Hospitality</option>
              <option value="10">School of Finance & Commerce</option>
              <option value="8">School of Business</option>
              <option value="7">UNIVERSITY POLYTECHNIC
                (Diploma in Engineering)
              </option>
              <option value="6">School of Architecture</option>
              <option value="5">School of Chemical Engineering</option>
              <option value="4">School of Electrical, Electronics & Communication Engineering</option>
              <option value="3">School of Civil Engineering</option>
              <option value="2">School of Mechanical Engineering</option>
              <option value="1">School of Computing Science & Engineering</option>
            </select>
            <p class='text-danger' id="school_error"></p>
          </div>

          <div class="fields selectFields">
            <select name="program" id="program">
              <option value="">Select Program</option>
            </select>
            <p class='text-danger' id="program_error"></p>
          </div>
          <!-- Start Current Address -->
          <div class="fields dobFields">
            <textarea name="address1" id="address1" placeholder="Enter Current Address" onBlur="this.placeholder='Enter Current Address'" onFocus="this.placeholder=''" value=""></textarea>
            <p class='text-danger' id="address1_error"></p>
          </div>
          <div class="fields quarterFields">
            <input type="text" name="country1" id="country1" placeholder="Country" onBlur="this.placeholder='Country'" onFocus="this.placeholder=''">
            <p class='text-danger' id="country1_error"></p>
          </div>
          <div class="fields quarterFields">
            <input type="text" name="state1" id="state1" placeholder="State" onBlur="this.placeholder='State'" onFocus="this.placeholder=''">
            <p class='text-danger' id="state1_error"></p>
          </div>
          <div class="fields quarterFields">
            <input type="text" name="city1" id="city1" placeholder="City" onBlur="this.placeholder='City'" onFocus="this.placeholder=''">
            <p class='text-danger' id="city1_error"></p>
          </div>
          <div class="fields quarterFields">
            <input type="text" name="pincode1" id="pincode1" placeholder="Pincode" onBlur="this.placeholder='Pincode'" onFocus="this.placeholder=''">
            <p class='text-danger' id="pincode1_error"></p>
          </div>
          <!-- End Current Address -->
          <div class="fields dobFields">
            <input type="text" name="fathername" id="fathername" value="" placeholder="Father Name" onBlur="this.placeholder='Father Name'" onFocus="this.placeholder=''">
            <p class='text-danger' id="fathername_error"></p>
          </div>
          <!-- Start Permanent Address -->
          <div class="fields dobFields">
            <textarea name="param_address" id="param_address" placeholder="Enter Permanent Address" onBlur="this.placeholder='Enter Permanent Address'" onFocus="this.placeholder=''" value=""></textarea>
            <p class='text-danger' id="param_address_error"></p>
          </div>
          <div class="fields quarterFields">
            <input type="text" name="param_country" id="param_country" placeholder="Country" onBlur="this.placeholder='Country'" onFocus="this.placeholder=''">
            <p class='text-danger' id="param_country_error"></p>
          </div>
          <div class="fields quarterFields">
            <input type="text" name="param_state" id="param_state" placeholder="State" onBlur="this.placeholder='State'" onFocus="this.placeholder=''">
            <p class='text-danger' id="param_state_error"></p>
          </div>
          <div class="fields quarterFields">
            <input type="text" name="param_city" id="param_city" placeholder="City" onBlur="this.placeholder='City'" onFocus="this.placeholder=''">
            <p class='text-danger' id="param_city_error"></p>
          </div>
          <div class="fields quarterFields">
            <input type="text" name="param_pincode" id="param_pincode" placeholder="Pincode" onBlur="this.placeholder='Pincode'" onFocus="this.placeholder=''">
            <p class='text-danger' id="param_pincode_error"></p>
          </div>
          <!-- End Permanent Address -->

          <div class="dobFields radioFields">
            <div class="fields quarterFields"><input type="radio" name="types" id="self-employee" value="Self Employee" data-id="selfemp"><label for="self-employee">Self Employed</label></div>
            <div class="fields quarterFields"><input type="radio" name="types" id="employee" value="Employee" data-id="selfemp"><label for="employee">Employed</label></div>
            <div class="fields quarterFields"><input type="radio" name="types" id="higher-education" value="Persuing Higher Education" data-id="phedu"><label for="higher-education">Persuing Higher Education</label>
              <p class='text-danger' id="types_error"></p>
            </div>
            <div class="fields quarterFields"><input type="radio" name="types" id="others" value="Others" data-id="othr"><label for="others">Others</label>
              <p class='text-danger' id="types_error"></p>
            </div>
          </div>
          <!--self employee-->
          <div class="fullwidth sOrg sOrg-reg" id="selfemp">
            <div class="fields">
              <input type="text" name="nameof_org" id="nameof_org" placeholder="Name of Organization" onBlur="this.placeholder='Name of Organization'" onFocus="this.placeholder=''" value="">
              <p class='text-danger' id="nameof_org_error"></p>
            </div>
            <div class="fields">
              <input type="text" name="natureof_work" id="natureof_work" placeholder="Nature of Work" onBlur="this.placeholder='Nature of Work'" onFocus="this.placeholder=''" value="">
              <p class='text-danger' id="natureof_work_error"></p>
            </div>
            <div class="fields">
              <input type="text" name="locationof_org" id="locationof_org" placeholder="Location of Organization" onBlur="this.placeholder='Location of Organization'" onFocus="this.placeholder=''" value="">
              <p class='text-danger' id="locationof_org_error"></p>
            </div>
            <div class="fields">
              <input type="text" name="org_website" id="org_website" placeholder="Organization Website (optional)" onBlur="this.placeholder='Organization Website (optional)'" onFocus="this.placeholder=''" value="">
            </div>
            <div class="fields selectFields selfempField">
              <input type="text" name="numberof_emp" id="numberof_emp" placeholder="No. of Employee" onBlur="this.placeholder='No. of Employee'" onFocus="this.placeholder=''" value="">
              <p class='text-danger' id="numberof_emp_error"></p>
            </div>
            <div class="fields selectFields selfempField">
              <input type="text" name="annual_turnover" id="annual_turnover" placeholder="Annual Turnover" onBlur="this.placeholder='Annual Turnover'" onFocus="this.placeholder=''" value="">
              <p class='text-danger' id="annual_turnover_error"></p>
            </div>
            <div class="fields selectFields">
              <input type="text" name="aadhar_number" id="aadhar_number" placeholder="Aadhar No. (optional)" onBlur="this.placeholder='Aadhar No. (optional)'" onFocus="this.placeholder=''" value="">
            </div>
          </div>

          <!--PH education-->
          <div class="fullwidth sOrg sOrg-reg" id="phedu">

            <div class="fields selectFields">
              <select name="pursue_yearofadmsn" id="pursue_yearofadmsn">
                <option value="">Year of Admission</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
              </select>
              <p class='text-danger' id="pursue_yearofadmsn_error"></p>
            </div>
            <div class="fields selectFields">
              <select name="pursue_nameinstitute" id="pursue_nameinstitute">
                <option value="">Select School</option>
                <option value="21">School of Fashion & Design</option>
                <option value="20">School of Agriculture</option>
                <option value="19">School of Education</option>
                <option value="18">School of Law</option>
                <option value="17">School of Basic & Applied Sciences</option>
                <option value="16">School of Nursing</option>
                <option value="15">School of Medical and Allied Sciences</option>
                <option value="14">School of Media & Communication Studies</option>
                <option value="13">School of Library & Information Science</option>
                <option value="12">School of Liberal Arts</option>
                <option value="11">School of Hospitality</option>
                <option value="10">School of Finance & Commerce</option>
                <option value="8">School of Business</option>
                <option value="7">UNIVERSITY POLYTECHNIC
                  (Diploma in Engineering)
                </option>
                <option value="6">School of Architecture</option>
                <option value="5">School of Chemical Engineering</option>
                <option value="4">School of Electrical, Electronics & Communication Engineering</option>
                <option value="3">School of Civil Engineering</option>
                <option value="2">School of Mechanical Engineering</option>
                <option value="1">School of Computing Science & Engineering</option>
              </select>
              <p class='text-danger' id="pursue_nameinstitute_error"></p>
            </div>

            <div class="fields selectFields">
              <select name="pursue_program" id="pursue_program">
                <option value="">Select Program</option>
              </select>
              <p class='text-danger' id="pursue_program_error"></p>
            </div>
            <div class="fields dobFields">
              <textarea name="pursue_address" id="pursue_address" placeholder="Address of Institution" onBlur="this.placeholder='Address of Institution'" onFocus="this.placeholder=''" value=""></textarea>
              <p class='text-danger' id="pursue_address_error"></p>
            </div>
          </div>

          <div class="fullwidth sOrg sOrg-reg" id="othr">
            <div class="fields dobFields">
              <input type="text" name="specify_other" id="specify_other" placeholder="Other: Please specify" onBlur="this.placeholder='Other: Please specify'" onFocus="this.placeholder=''">
              <p class='text-danger' id="specify_other_error"></p>
            </div>
          </div>

          <div class="fullwidth">
            <div class="fields btnFields">
              <input type="submit" name="signup" value="Signup" class="btn" id="searchBtn">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php include("footer.php") ?>