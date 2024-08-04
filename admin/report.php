<?php 
include_once('../data/admin_session.php');//check if naay session otherwise e return sa login
include_once('../include/header.php'); ?>
<?php include_once('../include/banner.php'); ?>

  <nav class="navbar navbar-inverse" style="margin-top:-18px;">
  	<div class="container-fluid">
   	 
  	  <ul class="nav navbar-nav">

     
  	    <li>
          <a href="item.php"><span class="glyphicon glyphicon-object-align-vertical"></span> Parts
          </a>
        </li>

        <li>
          <a href="work_order.php"><span class="glyphicon glyphicon-object-align-vertical"></span> Work Order
          </a>
        </li>
  	    
  	    <li>
          <a href="employee.php"><span class="glyphicon glyphicon-user"></span> Employee</a>
        </li>

        <li>
          <a href="position.php"><span class="glyphicon glyphicon-tasks"></span> Position</a>
        </li>

        <li>
          <a href="office.php"><span class="glyphicon glyphicon-home"></span> Office</a>
        </li>



  	    <li class="active">
          <a href="report.php"><span class="glyphicon glyphicon-list-alt"></span> Report</a>
        </li>
  	  </ul>
  	 <ul class="nav navbar-nav navbar-right">
         <li class="dropdown">
            <a class="dropdown-toggle" id="admin-account" data-toggle="dropdown" href="#">
            </a>
            <ul class="dropdown-menu">
              <li><a href="#modal-changepass" data-toggle="modal">Change Password</a></li>
              <li><a href="../data/admin_logout.php">Logout</a></li>
            </ul>
          </li>
      </ul>
 	 </div>
	</nav>

	<div id="right_content" >
		<div class="panel-group">
 			 <div class="panel panel-primary">

 			 	<div class="panel-heading">
        <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
        Analysis Reports</div>
  	  			<div class="panel-body">
              <!-- main content -->
              <b>Filter:</b>
                <select class="btn btn-default" id="report-choice">
                  <option value="running">Running Hours</option>
                </select>
                
                <button id="print-btn" type="button" class="btn btn-success">
                PRINT
                <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                </button>
                <div id="show-report"></div>

              <!-- /main content -->
              <br />

  	  			
            </div>
 			 </div>
  
		</div>
	</div>

<!-- navigation menu -->
<?php require_once('side-menu.php'); ?>
<!-- navigation menu -->

<!-- load all modals here -->
<?php require_once('load_modals.php'); ?>
<!-- /load all modals here -->
  

</div>


<?php require_once('../include/footer.php'); ?>

</body>
</html>	
