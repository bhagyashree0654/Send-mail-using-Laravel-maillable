<h2>Mentoring Form</h2>
<hr>
<p>(Filled by the student)</p>
<hr>
<strong>Mentor: </strong> <p>{{$data['mentor'] }}</p> <br>
<strong>Admission Batch: </strong> <p>{{$data['batch'] }}</p> <br>
<strong>Studied P.G./M.Phil in: </strong> <p>{{$data['dept'] }}</p> <br>
<strong>Roll No: </strong> <p>{{$data['roll'] }}</p> <br>
<strong>Name: </strong> <p>{{$data['name'] }}</p> <br>
<strong>Name of Guardian:</strong> <p>{{$data['guardian'] }}</p> <br>
<strong>Gender: </strong> <p>{{$data['gender'] }}</p> <br>
<strong>Caste: </strong> <p>{{$data['caste'] }}</p> <br>
<strong>Date of Birth: </strong> <p>{{$data['dob'] }}</p> <br>
<strong>Address: </strong> <textarea readonly>{{$data['address'] }}</textarea> <br>
<strong>Mobile No: </strong> <p>{{$data['no'] }}</p> <br>
<strong>Guardian Contact No: </strong> <p>{{$data['gNo'] }}</p> <br>
<strong>Email: </strong> <p>{{$data['mail'] }}</p> <br>
<strong>Education Details: </strong> <br>
<table border='1'>
              <tr>
                <th>Qualification</th>
                <th>Year Of Passing</th>
                <th>Board/University</th>
                <th>% of Marks</th>              
              </tr>  

              <tr>
              <td>{{$data['g1']}}</td>
              <td>{{$data['g2']}}</td>
              <td>{{$data['g3']}}</td>
              <td>{{$data['g4']}}</td>
              </tr>

              <tr>
              <td>{{$data['i1']}}</td>
              <td>{{$data['i2']}}</td>
              <td>{{$data['i3']}}</td>
              <td>{{$data['i4']}}</td>
              </tr> 

              <tr>
              <td>{{$data['t1']}}</td>
              <td>{{$data['t2']}}</td>
              <td>{{$data['t3']}}</td>
              <td>{{$data['t4']}}</td>
              </tr>  

              <tr>
              <td>{{$data['o1']}}</td>
              <td>{{$data['o2']}}</td>
              <td>{{$data['o3']}}</td>
              <td>{{$data['o4']}}</td>
              </tr>  
             
 </table>                 

 <br>
<strong>Scholarship Awarded: </strong> <br> 
<textarea readonly>{{$data['schlorship'] }}</textarea> <br>

<strong>Reasearch Activity: </strong> <br>
 <textarea readonly>{{$data['research'] }}</textarea> <br>

<strong>Interest In Field Of:</strong> <br> 
<textarea readonly>{{$data['interest'] }}</textarea> <br>

<strong>Strength: </strong> 
<ol>
<li>{{$data['s1']}}</li>
<li>{{$data['s2']}}</li>
<li>{{$data['s2']}}</li>
</ol>
<br>
<strong>Weakness: </strong>
<ol>
<li>{{$data['w1']}}</li>
<li>{{$data['w2']}}</li>
<li>{{$data['w3']}}</li>
</ol>
<br>
<strong>Any other information: </strong> <br>
<textarea readonly>{{$data['aoi']}}</textarea> <br>

<strong>Date: </strong> <p>{{$data['date']}}</p> <br>
<strong>Signature: </strong> <p>{{$data['sign']}}</p> <br>

<ol type="A">
      <li><label>Suggestion given for improvement:-</label>
        <ol>
          <li></li>
          <li></li>
          <li></li>
        </ol>
    </li> <br>
    <li>
      <label>Achievement Data of the student:-</label>
      <ol>
      <li></li>
      <li></li>
      <li></li>
      </ol>
    </li>              
    </ol>
  <br>

    <p>(Signature of Mentor)</p> <br>

   <p>Remarks:- <br><textarea></textarea></p> 
   <br>
   
   <p>(Signature of HOD)</p>
         