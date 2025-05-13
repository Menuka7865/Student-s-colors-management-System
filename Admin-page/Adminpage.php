
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCMS-SUSL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="Adminpage.css">
</head>
<body>
   <div class="maincontainer">
    <div class="sidebar">
       <div class="sidebar-header">
       <div class="title">Colors of Excellence</div>
       <div class="subtitle">SUSL <span class="admin">Admin</span></div>
       <div class="dropdown">
         <div class="sec1">
          <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
             Add Student
          </button>
          <ul class="dropdown-menu">
             <li><a class="dropdown-item" href="#">Add</a></l>
             <li><a class="dropdown-item" href="#">Manage</a></li>
          </ul>
        </div>
          <div class="sec2">
          <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
             Add Students' color
          </button>
          <ul class="dropdown-menu">
             <li><a class="dropdown-item" href="#">Add</a></l>
             <li><a class="dropdown-item" href="#">Manage</a></li>
          </ul>
          <div class="btn"><a href="#"><button type="button" class="btn btn-light btn-outline-dark">Logout</button></a></div>
        </div>
      </div>
    </div>
    </div>
    <div class="container">
        <div class="heading"><a href="#"><button type="button" class="btn btn-light btn-outline-dark">Home</button></a></div>
        <div class="bars">
            <div class="bar1"><a href="#">Number of Students</a></div>
            <div class="bar2"><a href="#">Number of Sports</a></div>
        </div>
       <div class="chart-container">
        <div class="pie-chart"></div>
        <div class="legend">
          <div class="legend-item">
          <div class="legend-color blue"></div>
          <span>Boys</span>
        </div>
        <div class="legend-item">
          <div class="legend-color yellow"></div>
          <span>Girls</span>
        </div>
       </div>
      </div>
    </div>
   </div>
</body>
</html>
