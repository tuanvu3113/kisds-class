<?php   
$data = @file_get_contents('php://input');
$data = json_decode($data, true);
//$points = $data['total'];
$android = $data['Android'];
$ios = $data['iOS'];
$total = $data['total'];
$categoryAxis = $data['category'];

//test
/* $android 	= array(5,2,1,3);
$ios 		= array(7,8,4,8);
$total 		= array(12,10,5,11);
$categoryAxis = array('ngay 1','ngay 2','ngay 3','ngay 4');
 */
 /* CAT:Bar Chart */

 /* pChart library inclusions */
 include("../class/pData.class.php");
 include("../class/pDraw.class.php");
 include("../class/pImage.class.php");

 /* Create and populate the pData object */
 $MyData = new pData();  
 $MyData->addPoints($android,"Android");
 $MyData->addPoints($ios,"iOS");
 $MyData->setAxisName(0,"Pcs");
 $MyData->addPoints($categoryAxis,"Frameworks");
 $MyData->setSerieDescription("Frameworks","Framework");
 $MyData->setAbscissa("Frameworks");
 /* Create the pChart object */
 $myPicture = new pImage(900,230,$MyData);

 /* Turn of Antialiasing */
 $myPicture->Antialias = FALSE;

 /* Add a border to the picture */
 $myPicture->drawRectangle(0,0,899,229,array("R"=>0,"G"=>0,"B"=>0));

 /* Set the default font */
 $myPicture->setFontProperties(array("FontName"=>"../fonts/pf_arma_five.ttf","FontSize"=>6));

 /* Define the chart area */
 $myPicture->setGraphArea(60,40,850,200);

 /* Draw the scale */
 $scaleSettings = array("Mode"=> SCALE_MODE_ADDALL_START0,"GridR"=>200,"GridG"=>200,"GridB"=>200,"DrawSubTicks"=>TRUE,"CycleBackground"=>TRUE);
 $myPicture->drawScale($scaleSettings);

 /* Write the chart legend */
 //$myPicture->drawLegend(580,12,array("Style"=>LEGEND_NOBORDER,"Mode"=>LEGEND_HORIZONTAL));

/* Write the legend */
$TextSettings = array("R"=>50,"G"=>125,"B"=>3,"Align"=>TEXT_ALIGN_MIDDLEMIDDLE,"FontSize"=>11); 
$myPicture->drawText(450,20,"Total devices processed",$TextSettings);
 
 /* Turn on shadow computing */ 
 $myPicture->setShadow(TRUE,array("X"=>1,"Y"=>1,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>10));

 /* Draw the chart */
 $myPicture->setShadow(TRUE,array("X"=>1,"Y"=>1,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>10));
 
 $palette = array("Android"=>array("R"=>250,"G"=>5,"B"=>232,"Alpha"=>100),
                 "iOS"=>array("R"=>5,"G"=>21,"B"=>250,"Alpha"=>100));
 
 $MyData->setPalette('Android', array("R"=>12,"G"=>26,"B"=>245,'Alpha' => 100));
 $MyData->setPalette('iOS', array("R"=>232,"G"=>12,"B"=>12,"Alpha"=>100));
 
 $settings = array("Gradient"=>TRUE,"GradientMode"=>GRADIENT_EFFECT_CAN,"DisplayPos"=>LABEL_POS_OUTSIDE,"DisplayValues"=>FALSE,"DisplayShadow"=>TRUE,"Surrounding"=>10,"Rounded"=>FALSE);
 $myPicture->drawStackedBarChart($settings);
 /* Write the chart legend */
 $myPicture->drawLegend(780,215,array("Style"=>LEGEND_NOBORDER,"Mode"=>LEGEND_HORIZONTAL));
 
 /* Add total value of each column */
 $MyData->addPoints($total,"Total");
 $MyData->setSerieDrawable('Total', TRUE);
 $MyData->setSerieDrawable('Android', FALSE);
 $MyData->setSerieDrawable('iOS', FALSE);
 $MyData->setPalette('Total', array('Alpha' => 0));
 $myPicture->drawBarChart(array("DisplayValues" => TRUE, "DisplayColor"=>array('R'=>0, 'G'=>0, 'B'=>0)));

 /* Render the picture (choose the best way) */
$fileNameTmp = uniqid('', true).'.png';

//$fileNameTmp = 'test_bar.png';

$myPicture->autoOutputFile($fileNameTmp);
//$myPicture->autoOutput($fileNameTmp);
echo $_SERVER['HTTP_HOST'].'/web/sendmail/libs/pchart/chart-code/'.$fileNameTmp; exit;
 //$imagesFile = $myPicture->autoOutput("pictures/example.drawBarChart.simple.png");
?>