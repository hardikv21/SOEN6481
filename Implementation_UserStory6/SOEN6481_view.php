<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>User Story</title>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}

function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}

function showInfo(){
  var thisURL = document.URL;      
  var getval =thisURL.split('?')[1];    
  var showval= getval.split("=")[1];
  if (showval=="11111111"){
    document.getElementById("text").innerHTML = "Type: Student<br>Remaining tickets: 7<br>Pass expired: Dec 12th,2019<br>Expired date: Oct 31th, 2020";
  }
  else if (showval=="22222222"){
    document.getElementById("text").innerHTML = "Type: Normal<br>Remaining tickets: 0<br>Pass expired: Dec 31th,2019<br>Expired date: Oct 31th, 2020";
  }
  else if (showval=="33333333"){
    document.getElementById("text").innerHTML = "Type: Senior<br>Remaining tickets: 10<br>Pass expired: N/A<br>Expired date: Oct 31th, 2021";
  }
}
//-->
</script>
</head>
<style type="text/css">
<!--
#container {
    position: relative;
	width: 1200px;
    margin: 0 auto; /*this centers the page */
}
.STYLE1 {font-size: 36px}
body {
	background-image: url(image/background.jpg);
	background-size:cover;
	background-repeat: no-repeat;
}
.style2 {font-size: 24px}
-->
</style>
<body>
<div id="container">
  <table width="1190" border="0" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <tr>
      <td height="100" valign="top"><img src="image/background_1.jpg" width="1200" height="100" /></td>
    </tr>
    <tr>
      <td width="770" height="10"></td>
    </tr>
    <tr>
      <td height="30"></td>
    </tr>
    <tr>
      <td height="46"><div align="center"><span class="style2">Welcome client <?php echo $_GET['id'];?></span></div></td>
    </tr>
    <tr>
      <td height="290" valign="top"><p align="center">&nbsp;</p>
          <form id="form1" name="form1" method="post" action="">
            <p align="center" class="style2" id="text"><script>showInfo()</script></p>
            <p align="center">
              <label></label>
            </p>
            <p align="center">&nbsp;</p>
            <p align="center">
              <label>
              <input name="scan" type="button" id="scan" style="width:180px;height:40px" onclick="MM_goToURL('parent','SOEN6481_main.php?id=<?php echo $_GET['id'];?>');return document.MM_returnValue" value="Back"/>
              </label>
            </p>
          </form>
          <p align="center">&nbsp;</p>
          <p align="center">&nbsp;</p>
          <p align="center">&nbsp;</p>
        <p align="center">&nbsp;</p>
        <p align="center">&nbsp;</p>
        <p align="center">&nbsp;</p>
        <p align="center">&nbsp;</p>
        <p align="center">&nbsp;</p>
        <p align="center">&nbsp;</p></td>
    </tr>
    <tr>
      <td height="20">&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>
