<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets\vendor\bootstrap\css\bootstrap.min.css" rel="stylesheet">
    <title>Feedback Form</title>
    <!-- Favicons -->
  <link href="indexLogo.jpg" rel="icon">
  <link href="indexLogo.jpg" rel="indexLogo">
  <link rel="stylesheet" href="public/tools/css/feedback.css">
</head>
<body>
    <body class="bg-light">
        <div class="container">
         <div class="py-5 text-center">
           <img class="d-block mx-auto mb-4" src="public/tools/mscbduLogo.png" alt="" width="72" height="72">
           <h2>Feedback Form</h2>
           <p>(To be filled by the student and handover to the HOD)</p>
         </div>
        </div>
       <div class="container">
         <div class="row">
           <div class="col-md-12">
            <form action="sendFeedbackMail" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="department">Department</label>
                <select class="custom-select d-block w-100" id="department" name="dept" required>
                </select>
            </div>
            <div class="form-group">
                <label for="course">Subject</label>
                <select class="custom-select d-block w-100" id="subject" name="sub" required>
                </select>
            </div>
            <div class="form-group">
                <label for="teacher">Teacher</label>
                <select class="custom-select d-block w-100" id="teacher" name="teacher" required>
                </select>
            </div>

              <label>1. In general how would you rate the contents ?</label><br>
              <span class="star-rating">
                  <input type="radio" name="rating1" value="1"><i></i>
                  <input type="radio" name="rating1" value="2"><i></i>
                  <input type="radio" name="rating1" value="3"><i></i>
                  <input type="radio" name="rating1" value="4"><i></i>
                  <input type="radio" name="rating1" value="5"><i></i>
              </span>
              <br><br>
              
              <label>2. was the course intelectualy stimulating ?</label><br>
              <span class="star-rating">
                  <input type="radio" name="rating2" value="1"><i></i>
                  <input type="radio" name="rating2" value="2"><i></i>
                  <input type="radio" name="rating2" value="3"><i></i>
                  <input type="radio" name="rating2" value="4"><i></i>
                  <input type="radio" name="rating2" value="5"><i></i>
              </span>
              <br><br>
              
              <label>3. Did you learn form the course as per your exceptaion ?</label><br>
              <span class="star-rating">
                  <input type="radio" name="rating3" value="1"><i></i>
                  <input type="radio" name="rating3" value="2"><i></i>
                  <input type="radio" name="rating3" value="3"><i></i>
                  <input type="radio" name="rating3" value="4"><i></i>
                  <input type="radio" name="rating3" value="5"><i></i>
              </span>
              <br><br>
              
              <label>4. Did the instructor wxplain the  subjectmatter clearly and effectively ?</label><br>
              <span class="star-rating">
                  <input type="radio" name="rating4" value="1"><i></i>
                  <input type="radio" name="rating4" value="2"><i></i>
                  <input type="radio" name="rating4" value="3"><i></i>
                  <input type="radio" name="rating4" value="4"><i></i>
                  <input type="radio" name="rating4" value="5"><i></i>
              </span>
              <br><br>
              
              <label>5. Did the instructor answer your questions clerly ?</label><br>
              <span class="star-rating">
                  <input type="radio" name="rating5" value="1"><i></i>
                  <input type="radio" name="rating5" value="2"><i></i>
                  <input type="radio" name="rating5" value="3"><i></i>
                  <input type="radio" name="rating5" value="4"><i></i>
                  <input type="radio" name="rating5" value="5"><i></i>
              </span>
              <br><br>
              <label>6. Was the teaching style mechanical or creative ?</label><br>
              <span class="star-rating">
                  <input type="radio" name="rating6" value="1"><i></i>
                  <input type="radio" name="rating6" value="2"><i></i>
                  <input type="radio" name="rating6" value="3"><i></i>
                  <input type="radio" name="rating6" value="4"><i></i>
                  <input type="radio" name="rating6" value="5"><i></i>
              </span>
              <br><br>
              
              <label>7. Did the instructor provide academic help as and when you needed ?</label><br>
              <span class="star-rating">
                  <input type="radio" name="rating7" value="1"><i></i>
                  <input type="radio" name="rating7" value="2"><i></i>
                  <input type="radio" name="rating7" value="3"><i></i>
                  <input type="radio" name="rating7" value="4"><i></i>
                  <input type="radio" name="rating7" value="5"><i></i>
              </span>
              <br><br>
              
              <label>8. Did the instructor give you assignments to check your undersranding ?</label><br>
              <span class="star-rating">
                  <input type="radio" name="rating8" value="1"><i></i>
                  <input type="radio" name="rating8" value="2"><i></i>
                  <input type="radio" name="rating8" value="3"><i></i>
                  <input type="radio" name="rating8" value="4"><i></i>
                  <input type="radio" name="rating8" value="5"><i></i>
              </span>
              <br><br>
              
              <label>9. Was the instructor enthusiastic in teaching the subject matter ?</label><br>
              <span class="star-rating">
                  <input type="radio" name="rating9" value="1"><i></i>
                  <input type="radio" name="rating9" value="2"><i></i>
                  <input type="radio" name="rating9" value="3"><i></i>
                  <input type="radio" name="rating9" value="4"><i></i>
                  <input type="radio" name="rating9" value="5"><i></i>
              </span>
              <br><br>
              
              <label>10. In general what is your overall rating of the instructor ?</label><br>
              <span class="star-rating">
                  <input type="radio" name="rating10" value="1"><i></i>
                  <input type="radio" name="rating10" value="2"><i></i>
                  <input type="radio" name="rating10" value="3"><i></i>
                  <input type="radio" name="rating10" value="4"><i></i>
                  <input type="radio" name="rating10" value="5"><i></i>
              </span>
              <br><br>
              <hr>
             <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
          </form>
           </div>
         </div>
         <script src="public/plugins/jquery-3.4.1.min.js"> </script>		
    <script src="resources\views\js\feedback.js"></script>
    
</body>
</html>