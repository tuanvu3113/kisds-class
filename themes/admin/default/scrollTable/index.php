<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Test</title>
<script type="text/javascript" src="jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="jquery.scrollTo.js"></script>
<script type="text/javascript" src="scrollTable.js"></script>
<link href="scrollTable.css" type="text/css" rel="stylesheet">
<style title="" type="text/css">
	table col.c1 { width: 45px; }
	table col.c2 { width: 60px; }
	table col.c3 { width: 180px; }
	table col.c4 { width: 100px; }
	table col.c5 { width: 100px; }
	table col.c6 { width: 100px; }
	table col.c7 { width: 100px; }
	table col.c8 { width: 1000px; }
	table col.c9 {}
</style>
</head>
	
<body>
	 <?php 
            $arr = array();
            $arr['c1'] = '<input id="checkAll" type="checkbox" />';
            $arr['c2'] = 'No.';
            $arr['c3'] = 'C3';
            $arr['c4'] = 'C4';
            $arr['c5'] = 'C5';
            $arr['c6'] = 'C6';
            $arr['c7'] = 'C7';
            $arr['c8'] = 'C8';            
            $arr['c9'] = '';
      ?>
     <!--S Header-->
     <div id="cHeader">
		<div id="tHeader">    	
            <table width="100%" cellspacing="0" border="1" >
                <?php foreach($arr as $c=>$name){?>
                    <col class="<?=$c;?>">
                <?php }?>
                <tr>
                    <?php foreach($arr as $c=>$name){?>
                        <th ><?=$name;?></th>
                    <?php }?>
                </tr>
            </table>
        </div>
   </div>
   <!--E Header-->
   <div id="data">
   		<div id="gridView">
   		<table  width="100%" cellspacing="0" border="1">
        	<?php foreach($arr as $c=>$name){?>
            	<col class="<?=$c;?>">
            <?php }?>
        	<tbody id="grid-rows">
            <?php for($i=1; $i<31; $i++){?>
           		<tr>
                	<?php foreach($arr as $c=>$name){?>
                       	<td align="center" ><?=$name;?></td>
                    <?php }?>
                </tr>
            <?php }?>
            </tbody>
        </table>
        </div>
   </div>
</body>
</html>