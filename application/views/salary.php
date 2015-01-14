<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Salary Calculation</title>
    <script src="http://code.jquery.com/jquery-latest.js"></script>   
</head>
<body>
<h1>Salary Calucation</h1>

<fieldset>
<legend>Salary Calucation</legend>
<form id='calculation' action='' method='post' accept-charset='UTF-8' >

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='short_explanation'>* required fields</div><br/>
<div id="success" style="color:blue"> Employee A has been save to DB successfully</div>
<div id="require" style="color:red"> You have to input salalry.</div>
<div class='container'>
    <label for='lastname' >Last Name: </label> <label for='lastname' ><?php echo $employeeInfo['lastname'] ?></label>
   <br/>
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='firstname' >First Name:</label> <label for='firstname' ><?php echo $employeeInfo['firstname'] ?></label><br/>
    <span id='register_email_errorloc' class='error'></span>
</div><br/>
<div class='container'>
    <label for='slemployeeType' >Employee Type*:</label><br/>
	<select id="slemployeeType" name="myDropDown1" disabled="true">
  <?php 
      switch ($employeeInfo['employeeType']) {
        case 'Normal Employee':
          $option = "<option value='1' selected='selected'>Normal Employee</option>
                      <option value='2'>Hourly Employee</option>
                      <option value='3'>Sale Employee</option>";
          break;
        case 'Hourly Employee':
          $option = "<option value='1'>Normal Employee</option>
                      <option value='2' selected='selected'>Hourly Employee</option>
                      <option value='3'>Sale Employee</option>";
          break;
        case 'Sale Employee':
          $option = "<option value='1'>Normal Employee</option>
                      <option value='2'>Hourly Employee</option>
                      <option value='3' selected='selected'>Sale Employee</option>"; 
          break;       

        default:
          $option = "";
          break;
      }
      echo $option;
   ?>

   	<!-- <option selected="selected" value="0">All</option>
    <option value="1">Normal Employee</option>
    <option value="2">Hourly Employee</option>
        <option value="3">Sale Employee</option> -->
</select>
</div><br/>
<div id="normalemployee" class='container'>
	<label for='email' >Salary*:</label><br/>
        <input type='text' name='week_salary' id='week_salary' value=''  />
</div>

<div id="hourlyemployee" class='container' style='height:80px;'>
	<label for='email' >Hourly Work*:</label><br/>
        <input type='text' name='hourlyworked' id='hourlyworked' value=''  />    <br/>
	<label for='email' >Wage Per Hour*:</label><br/>
        <input type='text' name='wageperhour' id='wageperhour' value=''  />
        
</div>

<div id="saleemployee" class='container' style='height:80px;'>
	<label for='email' >Basic Salary*:</label><br/>
        <input type='text' name='basic_salary' id='basic_salary' value='' /><br/>
        <label for='email' >Gross Saled*:</label><br/>
        <input type='text' name='gross_saled' id='gross_saled' value=''/>    <br/>
        <label for='email' >Commission Rate*:</label><br/>
        <input type='text' name='commission_rate' id='commission_rate' value=''  />    
        
</div><br/><br/>
<div id="comment" >
	<label for='email' >Comment*:</label></br>
    <textarea name='comment' id='comment'  col='200' rows='3' ></textarea>
	        
</div>
<br/><br/><br/>
<div class='container'>
    <input type='button' name='Save' value='Save' onclick="save()" />
    <input type='button' name='Back' value='Back' onclick="back()" />
</div>


</form>
</fieldset>
<script>
</script>


</body>
    <script type="text/javascript">
    $(function() {
     $("#success").hide();
     $("#require").hide();     

      $("#slemployeeType").change(function(){
      var value = $(this).val();
       
        if(value == '1'){
           $('#hourlyemployee').hide();
           $('#saleemployee').hide();
           $('#normalemployee').show();   
        }
        else if(value == '2'){
           $('#saleemployee').hide();
           $('#normalemployee').hide();
           $('#hourlyemployee').show();

        }
        else if(value == '3'){
           $('#hourlyemployee').hide();
           $('#normalemployee').hide();
           $('#saleemployee').show();
        }
    }).change();
    });  
    
    function save(){
       $("#success").hide();
     $("#require").hide(); 
       if($("#week_salary").val() == ""){
          $("#require").show();
       }else{
        $("#success").show();
      }
    }
    function back(){
      var form = document.forms[0];
      form.action="listemployee.html";
      form.submit();  
    }

    </script>   
</html>