<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl">

<head>
    <title>PHP Page</title>

    <link rel="stylesheet" href="bootstrap.min.css">

    <!-- jQuery library -->
    <script src="jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="bootstrap.min.js"></script>

</head>

<body>
    <div class="container-fluid text-right" style="background-color:Silver;">
        <div style="float:right;">
            <img src="AUG.png" />
        </div>
        <h1><a href="Q1.htm" style="color: black;" target="_block"> جامعة الأزهر - غزة Al azhar University</a></h1>
    </div>

    <div class="container-fluid text-right" style="color:Blue;">

        <h3><a href="roshdi.php"> الرئيسية </a> | <a href="c.htm"> اتصل بنا</a></h3>


        <?php
        echo '<h1 style = "color:black;">Hello</h1>';
        ?>
        <h1 style="color:black;">
            <?php
            // echo "Hi Mom";
            echo "<h1>Roshdi Raed</h1>";
            ?>
        </h1>

    </div>


    <div class="container-fluid">

        <div class="row">

            <div class="col-sm-3" style="background-color:Silver;">

                <h2>اعلانات</h2>

                <!-- <ul style="list-style-type: none;text-align:right;    padding-right: 0;margin-bottom: 10px;">
                    <li>
                        <h3> دعوة لحضور يوم تعريفي بمنحة HESPAL </h3>
                    </li>
                </ul> -->

                <!-- <a href="">News</a> -->

                <!-- $row["title"] . -->
                <!-- $row["idno"] . -->
                <?php
                
                for ($i = 0; $i < 5; $i++) {


                    $conn = new mysqli("localhost", "root", "", "types");

                    $st = $conn->query("select * from news");

                    if ($st->num_rows > 0) {
                        while ($row = $st->fetch_assoc()) {
                            echo "<a href='Q1.htm?no=".$row["idno"] ."'>News</a>". " - " . " ▶️▶▶️▶ " . $row["txt"] . "<br>";
                            // echo "<a href="">News</a>";
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                }    

                ?>

                

            </div>

            <div class="col-sm-6">

                <strong>
                    <p style="font-size: 20px">
                        يرجى تعبئة النموذج :
                    </p>
                </strong>


                <form action="add.php" method="get">
                    <div class="form-group">
                        <label for="user">الاسم:</label>
                        <input type="text" class="form-control" id="user" name="username" >
                    </div>

                    <!-- required تستخدم في عدم قدرة المستخدم على تخطي الفراغ -->

                    <div class="form-group">
                        <label for="comment">ملاحظات:</label>
                        <textarea class="form-control" rows="5" id="comment" name="notes" ></textarea>
                    </div>



                    <div class="radio-inline">
                        <label>ذكر<input type="radio" name="optradio" value="1"> </label>
                    </div>
                    <div class="radio-inline">
                        <label>أنثى<input type="radio" name="optradio" value="2"></label>
                    </div>




                    <div class="form-group">
                        <label for="sel1">اختر المحافظة:</label>
                        <select class="form-control" id="sel1" name="sel1">
                            <option value="1">الشمال</option>
                            <option value="2">غزة</option>
                            <option value="3">الوسطى</option>
                            <option value="4">خانيونس</option>
                            <option value="5">رفح</option>
                        </select>
                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>

                </form>



            </div>


            <div class="col-sm-3" style="background-color:Silver;">

                <h2>اخبار</h2>

                <ul style="list-style-type: none;text-align:right;    padding-right: 0;margin-bottom: 10px;">
                    <!--     <li>
                        <h3> دعوة لحضور يوم تعريفي بمنحة HESPAL </h3>
                    </li>
                    
                </ul> -->
                    <?php
                    echo '<ul style="list-style-type: none;text-align:right;    padding-right: 0;margin-bottom: 10px;"></ul>';
                    for ($i = 0; $i < 5; $i++) {
                        echo '<li>
                    <h3> دعوة لحضور يوم تعريفي بمنحة HESPAL </h3>
                </li>';
                    }
                    ?>
            </div>

        </div>



    </div>


    <div class="container-fluid text-center" style="color:White;background-color:Blue;">

        <h3>جميع الحقوق محفوظة</h3>

    </div>


</body>

</html>