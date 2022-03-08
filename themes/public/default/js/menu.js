<!--

                                /*
                                Configure menu styles below
                                NOTE: To edit the link colors, go to the STYLE tags and edit the ssm2Items colors
                                */
                                YOffset=80; // no quotes!!
                                XOffset=-50;
                                staticYOffset=170; // no quotes!!  //more and more the same as "YOffset=180" is it more and more prompt
                                slideSpeed=10 // no quotes!!
                                waitTime=100; // no quotes!! this sets the time the menu stays out for after the mouse goes off it.
                                menuBGColor="#FFFF99"; //border
                                menuIsStatic="yes"; //this sets whether menu should stay static on the screen
                                menuWidth=350; // Must be a multiple of 10! no quotes!!
                                menuCols=2;
                                hdrFontFamily="verdana";
                                hdrFontSize="2";
                                hdrFontColor="white";
                                hdrBGColor="#FF0000"; //title of hide bar
                                hdrAlign="center";  //title of hide bar
                                hdrVAlign="center";
                                hdrHeight="15";
                                linkFontFamily="Verdana";
                                linkFontSize="2";
                                linkBGColor="white";
                                linkOverBGColor="#FFFFff"; // bgr of content
                                linkTarget="_top";
                                linkAlign="Left"; // content
                                barBGColor="#FF0000";  //title of show bar
                                barFontFamily="Verdana";
                                barFontSize="2";
                                barFontColor="white";
                                barVAlign="center";
                                barWidth=18; // no quotes!! //title of show bar
                                barText="> Thông báo <"; // <IMG> tag supported. Put exact html for an image to show.
                                ///////////////////////////
                                ssmItems[0]=["Thông báo trạng thái Gửi/Nhận vật tư"] //create header
                                ssmItems[1]=["Danh sách vật tư được gửi bởi:<br><br>&nbsp;&nbsp;thaopham@greystonevn.com<br>&nbsp;&nbsp;&nbsp;&nbsp;Tổng cộng: 1 Vật tư<br>&nbsp;&nbsp;&nbsp;&nbsp;Ngày gửi: 12-01-2013 ~ 12-01-2013<br><br>&nbsp;&nbsp;nhanduong@greystonevn.com<br>&nbsp;&nbsp;&nbsp;&nbsp;Tổng cộng: 2 Vật tư<br>&nbsp;&nbsp;&nbsp;&nbsp;Ngày gửi: 24-01-2013 ~ 24-01-2013<br><br>&nbsp;&nbsp;tranta@greystonevn.com<br>&nbsp;&nbsp;&nbsp;&nbsp;Tổng cộng: 3 Vật tư<br>&nbsp;&nbsp;&nbsp;&nbsp;Ngày gửi: 24-01-2013 ~ 24-01-2013<br><br>&nbsp;&nbsp;nhanduong@greystonevn.com<br>&nbsp;&nbsp;&nbsp;&nbsp;Tổng cộng: 2 Vật tư<br>&nbsp;&nbsp;&nbsp;&nbsp;Ngày gửi: 19-11-2015 ~ 19-11-2015", "#", ""]
                                buildMenu();
                                