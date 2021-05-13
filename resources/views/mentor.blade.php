
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets\vendor\bootstrap\css\bootstrap.min.css" rel="stylesheet">
    <title>Mentor Form</title>
    <!-- Favicons -->
  <link href="indexLogo.jpg" rel="icon">
  <link href="indexLogo.jpg" rel="indexLogo">
</head>
<body>
    <body class="bg-light">
        <div class="container">
         <div class="py-5 text-center">
           <img class="d-block mx-auto mb-4" src="public/tools/mscbduLogo.png" alt="" width="72" height="72">
           <h2>Mentoring Format</h2>
           <p>(To be filled in by the student and handover to the mentor)</p>
         </div>
        </div>
       <div class="container">
         <div class="row">
           <div class="col-md-12">
                                                   <!--FORM-->
            <form method="post" action="sendMail">
                    {{csrf_field()}}
              <div class="form-group">
                <label for="mentor">Mentor</label>
                <select class="custom-select d-block w-100" name="selMentor" id="selMentor" required>
                </select>
            </div>
              <div class="form-group">
                <label for="department">Admission Batch</label>
                <select class="custom-select d-block w-100" name="admsnBatch" id="admsnBatch" required>
                </select>
            </div>
            <div class="form-group">
              <label for="department">Studied P.G./M.Phil in</label>
              <select class="custom-select d-block w-100" name="department" id="department" required>
              </select>
          </div>
            <div class="form-group">
           <label for="email">Class Roll No</label>
           <input type="text" class="form-control" id="rollNo" name="rollNo" placeholder="Roll No" required>
           </div>
           
           <div class="form-group">
             <ol>
               <li> 
                <label for="name">Name:-</label>
                <input type="text" class="form-control" id="name" name="fullname" placeholder="Enter Name"> 
               </li>
               <li> 
                <label for="name">Name of Guardian:-</label>
                <input type="text" class="form-control" id="nameofGuardian" name="gname" placeholder="Enter Guardian Name"> 
              </li>
               <li>  
                <label for="gender">Gender </label>:-  
                <input type="radio" checked="checked" name="gender" value="male">
                  <label class="radio-container">Male
                  <span class="checkmark"></span>
                  </label>                
                <input type="radio" name="gender" value="female">
                  <label class="radio-container">Female
                <span class="checkmark"></span>
                  </label>                
                <input type="radio" name="gender" value="transgender">
                <label class="radio-container">Transgender          
                  <span class="checkmark"></span>
                </label>
               </li>               
               <li>
                <label for="name">Caste:-</label>
               <!-- <i nput type="text" class="form-control" id="caste" name="caste" placeholder="Enter Caste"> -->
                <select class="custom-select d-block w-100" name="caste" required>
                      <option value="">--Select--</option>
                      <option value="SC">SC</option>
                      <option value="ST">ST</option>
                      <option value="OBC">OBC</option>
                      <option value="GENERAL">GENERAL</option>
              </select>
               </li>
               <li>
                <label for="name">Date Of Birth:-</label>
                <input type="date" class="form-control" id="dob" name="dob">
               </li>
               <li>
                <label for="name">Permanent Address:-</label>
                <input type="textarea" class="form-control" id="address" name="address" placeholder="Enter Address">
               </li>
               <li>
                <label for="name">Enter Mobile number:-</label>
                <ol  type="a">
                  <li>
                    <label for="name">Self:-</label>
                    <input type="tel" class="form-control" id="noOfSelf" name="noOfSelf" placeholder="Enter your number" pattern="[789][0-9]{9}">
                  </li>
                  <li>
                    <label for="name">Guardian:-</label>
                    <input type="tel" class="form-control" id="noOfGuardian" name="noOfGuardian" placeholder="Enter your guardian number" pattern="[789][0-9]{9}">
                  </li>
                </ol>
               </li>
               <li>
                <label for="name">Email:-</label>
                <input type="email" class="form-control" id="mail" name="mail" placeholder="Enter email Id">
               </li>
               <li>
                <label for="qualificationDtl">Educational Qualification:-</label>
                <table name="qualificationTable">
                  <tr class="my-2">
                    <th>Qualification</th>
                    <th>Year Of Passing</th>
                    <th>Board/University</th>
                    <th>% of Marks</th>
                  </tr>
                  <tr>
                    <td><input type="text" name="grad1"  value="Graduation"  readonly></td>
                    <td><input type="text" name="grad2"></td>
                    <td><input type="text" name="grad3"></td>
                    <td><input type="text" name="grad4"></td>
                  </tr>
                  <tr>
                    <td><input type="text" name="int1" value="Intermediate"  readonly></td>
                    <td><input type="text" name="int2"></td>
                    <td><input type="text" name="int3"></td>
                    <td><input type="text" name="int4"></td>
                  </tr>
                  <tr>
                    <td><input type="text" name="ten1" value="10th"  readonly></td>
                    <td><input type="text" name="ten2"></td>
                    <td><input type="text" name="ten3"></td>
                    <td><input type="text" name="ten4"></td>
                  </tr>
                  <tr>
                    <td><input type="text" name="ot1" value="Others" id=""></td>
                    <td><input type="text" name="ot2"></td>
                    <td><input type="text" name="ot3"></td>
                    <td><input type="text" name="ot4"></td>
                  </tr>
                </table>
                
               </li>
               <li>
                <label for="name">Scholarship Awarded:-</label>
                <textarea class="form-control" name="scholarship"></textarea> 
               </li>
               <li> 
                <label for="name">Reasearch Activity:-</label>
                <textarea class="form-control" name="research">  </textarea>              
               </li>
               <li>
                <label for="name">Interest In Field Of:-</label>
                <textarea class="form-control" name="interest"></textarea> 
               </li>
               <li>
                 <label for="strength">Strength:-</label>
                 <ol type="a">
                   <li><input type="text" class="form-control" name="strength1"></li>
                   <li><input type="text" class="form-control" name="strength2"></li>
                   <li><input type="text" class="form-control" name="strength3"></li>
                 </ol>
               </li>
               <li>
                <label for="weakness">Weakness:-</label>
                <ol type="a">
                  <li><input type="text" class="form-control" name="weakness1"></li>
                  <li><input type="text" class="form-control" name="weakness2"></li>
                  <li><input type="text" class="form-control" name="weakness3"></li>
                </ol>
               </li>
               <li>
                <label for="name">Any other information:-</label>
                <textarea class="form-control" name="aoi">  </textarea>     
               </li>
             </ol>
             <p>
               <label for="date">Date:- </label><input type="date" class="text-sm-left" name="date"> <br>
               <label for="sign"class="float-right">(signature of student)</label><input type="text" class="float-right"  name="sign" ><br>
             </p>
             <br>
           <br>
          <hr class="mb-4">
         <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
         </form>
           </div>
         </div>
         <script src="public/plugins/jquery-3.4.1.min.js"> </script>		
    <script src="resources\views\js\mentor.js"></script>
</body>
</html>