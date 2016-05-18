<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>mem
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js"></script>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">MERRY KING</a>
            </div>

            <div class="header-right">

              <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>


            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <center><img src="C:\Users\Splice_NB\Desktop\Year3\DatabaseY3\project final\rere\b.jpg" class="img-thumbnail" width="100" height="100" /></center>

                            
                        </div>

                    </li>


                   <li>
                        <a href="index.html"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"  class="active-menu-top"><i class="fa fa-edit "></i>Form <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level collapse in">
                            <li>
                                <a href="staffregister.html"><i class="fa fa-circle-o"></i>Staff register</a>
                            </li>
                            <li>
                                <a href="Branch.html"><i class="fa fa-circle-o "></i>Branch</a>
                            </li>
                             <li>
                                <a href="OrderLineItem.html"><i class="fa fa-circle-o "></i>Order line item</a>
                            </li>
                             <li>
                                <a href="StepOfFood.html"><i class="fa fa-circle-o "></i>Step of food</a>
                            </li>
                             <li>
                                <a href="Promotion.html"><i class="fa fa-circle-o "></i>Promotion</a>
                            </li>
                             <li>
                                <a href="Stock.html"><i class="fa fa-circle-o "></i>Stock</a>
                            </li>
                             <li>
                                <a href="Comment.html"><i class="fa fa-circle-o "></i>Comment</a>
                            </li>
                             <li>
                                <a href="Member.html"><i class="fa fa-circle-o "></i>Member</a>
                            </li>
                            <li>
                                <a href="Menutest.php"><i class="fa fa-circle-o "></i>Menu</a>
                            </li>
                           
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-yelp "></i>Report<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="Recieve.html"><i class="fa fa-circle-o"></i>Recieve</a>
                            </li>
                            <li>
                                <a href="OrderList.html"><i class="fa fa-circle-o "></i>Order list</a>
                            </li>
                             <li>
                                <a href="StepOfFoodReport.html"><i class="fa fa-circle-o "></i>Step of food report</a>
                            </li>
                             <li>
                                <a href="BranchReport.html"><i class="fa fa-circle-o "></i>Branch report</a>
                            </li>
                            
                             <li>
                                <a href="PromotionReport.html"><i class="fa fa-circle-o "></i>Promotion report</a>
                            </li>
                            
                           
                        </ul>
                    </li>
                    <li>
                        <a href="table.html"><i class="fa fa-edit "></i>Menu<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="menutest.php"><i class="fa fa-circle-o"></i>Add menu</a>
                            </li>
                            <li>
                                <a href="OrderList.html"><i class="fa fa-circle-o "></i>Menu list</a>
                            </li>
                             <li>
                                <a class="active-menu" href="MenuReport.php"><i class="fa fa-circle-o "></i>Menu report</a>
                            </li>
                        </ul>
                    </li>
                  
                     <li>
                        <a href="gallery.html"><i class="fa fa-anchor "></i>Order<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="Recieve.html"><i class="fa fa-circle-o"></i>Add order</a>
                            </li>
                            <li>
                                <a href="OrderList.html"><i class="fa fa-circle-o "></i>Order list</a>
                            </li>
                             <li>
                                <a href="StepOfFoodReport.html"><i class="fa fa-circle-o "></i>Order report</a>
                            </li>
                        </ul>
                    </li>
                     
                    <li>
                        <a href="login.html"><i class="fa fa-sign-in "></i>Login Page</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Multilevel Link <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level ">
                            <li>
                                <a href="#"><i class="fa fa-bicycle "></i>Second Level Link</a>
                            </li>
                             <li>
                                <a href="#"><i class="fa fa-flask "></i>Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#"><i class="fa fa-plus "></i>Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-comments-o "></i>Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                   
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
                <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Menu Report</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info">



                            <div class="panel-body">
                                <!-- /. Splice edit php  -->
                                <div class="row">
                                    <div class="col-md-3">
                                        <button type="button" id="ShowData" class="btn btn-primary btn-block btn-lg">
                                            Click Here
                                        </button>
                                    </div>
                                </div>
                                </br>
                             <div class="table-responsive">
                                <table class="table table-bordered table-striped table-responsive" id="Recommend">
                                    <thead>
                                        <tr>
                                            <th>Song Name</th>
                                            <th>Singer</th>
                                            <th>Vote</th>
                                                
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                            </div>

                            

                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
<!-- Main Footer -->
    <?php include("../footer.html");?>

    <!-- Control Sidebar -->
    <?php include("../controlbar.html");?>
</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 2.1.4 -->
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<script>



$(document).ready(function() {

        $("#ShowData").on("click", function () {
            //$("#payment_table tbody > tr").remove();
            
//console.log("rrrr");
           
            loadTs();
            function loadTs(){
                //$("#payment_table tbody > tr").remove();
                var xmlhttp = new XMLHttpRequest();
                var url = "../musicRanking/searchQ.php";
                
                xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        showdailyTime(xmlhttp.responseText);
                    }
                }
                xmlhttp.open("GET", url, true);
                xmlhttp.send();
            }

            function showdailyTime (response) {
                console.log(response);
                var arr = JSON.parse(response);
                console.log(arr);
                //var len = Object.keys(obj).length;
                var i = 0;
                var tds = "<tr>";
            $("#Recommend tbody> tr").remove();

                    console.log(arr.length);
                    for (i = 0; i < arr.length; i++) {
                        if (tds != "<tr>") {tds = "<tr>";}


                       tds +=  "<td>" + arr[i].songName + "</td>";
                        tds +=  "<td>" + arr[i].singerName + "</td>";
                        tds +=  "<td>" + arr[i].vote + "</td>";
                        console.log(tds);
                    tds += "</tr>";
                    $("#Recommend").append(tds);
                        
                    }

            }
        });
    });
</script>




</body>
</html>