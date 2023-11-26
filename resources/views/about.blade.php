@extends('common.master')
@section('content')

          <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Language" content="English">
        <meta name="Country" content="Bangladesh">
        <meta name="Course code" content="CSE102-1">
        <meta name="Student ID" content="2019-2-10-214">
        <meta name="Name" content="Fardin Faiaz Khan">
  <link type="text/css" rel="stylesheet" href="./style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Curriculum Vitae of Fardin Faiaz Khan</title>
</head>
<body>
  <div id="header">
    <h1 id="name">Curriculum Vitae of</h1>
    <p id="name">Fardin Faiaz Khan</p>
    <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">
      <p id="email">Fardinfaiaz5@gmail.com</p>
    </a>
  </div>
<!-- ------------------------------------------------- -->
<div class="d-flex justify-content-between">
  <div class="right">
    <h3>CV Highlights</h3>
    <p>
    <ul>
      <li>Currently studying at East- West University in department of Business Administration</li>
      <li>Learnt about the basic of HTML and CSS</li>
      <li>Good Communication Skills, Presentation Skills, attitude towards leadership, a very good team worker.</li>
    </ul>
    </p>
    <div>  
    <h3>Professional Experience</h3>
    <h4>Gentle Park</h4>
    <p id="job-title"><strong>Cash- counter operator (Technical Support)</strong></p>
  </div>
  <div class="mt-5">
    <h3>Educational Qualifications</h3>
    <table>
      <tr id="heading">
        <td>Qualification</td>
        <td>Board</td>
        <td>Grades</td>
        <td>Year</td>
      </tr>
      <tr>
        <td>S.S.C (Science Background)</td>
        <td>Dhaka</td>
        <td>A+</td>
        <td>2016</td>
      </tr>
      <tr>
        <td>H.S.C (Science Background)</td>
        <td>Dhaka</td>
        <td>A-</td>
        <td>2018</td>
      </tr>
      <tr>
        <td>B.Sc.(Hons)- department of Business Administration</td>
        <td>East- West University</td>
        <td>CGPA: 3.00</td>
        <td>2019- till now</td>
      </tr>
    </table>
    </div>
    <h3 class="mt-3">Technical Skills</h3>
    <p>
    <ul>
      <li>
        <span id="course-name">Application Software:</span>Microsoft Office; Office XP, Office 2007, Excel 2003/2007 spreadsheets.
      </li>
      <li>
        <span id="course-name">Programming Skills:</span>HTML, CSS</li>
    </ul>
    </p>
    <h3>Personal Information:</h3>
    <p>
    <ul>
      <li>
        A young, determined hard and smart working person. I believe in task based roles and complete ownership of work.
      <li>
        <span id="course-name">Known Languages:</span> English, Bangla, french
      </li>
      <li>
        <span id="course-name">Hobbies:</span> I love reading books / magazines, playing Chess, swimming, listening music, surfing Internet, self-learning through e-courses.
      </li>
    </ul>
    </p>
    <h3>Other Information</h3>
    <p>
    <ul>
    <li>
        <span id="course-name">Parmanent Address:</span> Mirpur 13, Dhaka, Bangladesh
    </li>
    <li>
        <span id="course-name">Area of Interest:</span> Start-ups, Coding, Technical Support, Customer Happiness, Client service, Investment Banking, Corporate Finance, data Analyst, Business Analysis
    </li>
    </ul>
    </p>
    <h3>Declaration</h3>
    <p>
      I hereby declare that the details furnished above are true and correct to the best of my knowledge and belief.</p>
</div>
<!-- ----------------right card---------------- -->
<div class="card mt-4">
 <div class="card-body">
<div class="d-flex flex-column align-items-center text-center">
<img
src="./img.jpg"
class="rounded-circle"
width="150"
/>
<div class="mt-3">
<h4>Fardin Faiaz Khan</h4>
<p class="text-secondary mb-1">  
01741469635
<br>
Student
</p>
<p class="text-muted font-size-sm">
  Dhaka, Bangladesh
</p>
 </div>
</div>
</div>
</div>
  </div>
<!-- ------------------------------------------------- -->
<div id="footer">
<p class="text-center text-white">Developed By Fardin Faiaz Khan</p>
</div>
</body>
</html>  

@endsection
