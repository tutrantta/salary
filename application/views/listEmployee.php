<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/style.css">
  
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>List of Employee to Web App</h1>
      <form method="post" action="index.html">
	       <table >
	       			
		       <tr>
		       		<td style="font-weight:bold">Id </td>
		       		<td style="font-weight:bold">Last name</td>
		       		<td style="font-weight:bold">First name</td>
		       		<td style="font-weight:bold">Salary Calculation</td>			       				       				       		
		       	</tr>	
		       	<?php 
		       		foreach ($arrEmployees as $key => $value) {
		       			echo '<tr>';
		       			echo '<td>' . htmlspecialchars($value['id']) . '</td>';
		       			echo '<td>' . htmlspecialchars($value['lastname']) . '</td>'; 
		       			echo '<td>' . htmlspecialchars($value['firstname']) . '</td>';
		       			echo "<td><a href='../salary/calculate/" . htmlspecialchars($value['id']) ."'>Salary Calculation </a></td>"; //!FIXME
		       		}
   				?>	       			       			       	
	       </table>
      </form>
    </div>

  </section>
</body>
</html>