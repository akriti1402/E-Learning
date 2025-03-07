<?php
include("header.php");
include("connection.php");
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- Jquery CDN  -->
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

<!-- Jquery CDN  -->
<div class="page-content instructor-page-content">


    <!-- sidebar -->
    <div class="container1" style="margin: 0 1rem; ">
        <div class="row">
            <!-- SideBar -->
            <?php include("sidebar.php");
            ?>
            <!-- <div class="col-xl-9 col-lg-8 col-md-12">
                <div class="row">
                    <div class="row">
                        <div class="col-md-3 d-flex">
                            <a href="addCourse.php">
                                <div class="mx-2 instructor-card w-100">
                                    <div class="cont">
                                        <button type="button" class="btn btn-primary">
                                            Add Course
                                        </button>
                                    </div>
                                </div>
                            </a>
                            <a href="addSem.php">
                                <div class="mx-2 instructor-card w-100">
                                    <div class="cont">
                                        <button type="button" class="btn btn-primary">
                                            Add Sem
                                        </button>
                                    </div>
                                </div>
                            </a>
                            <a href="addSub.php">
                                <div class="mx-2 instructor-card w-100">
                                    <div class="cont">
                                        <button type="button" class="btn btn-primary">
                                            Add Subject
                                        </button>
                                    </div>
                                </div>
                            </a>
                            <a href="addUnit.php">
                                <div class="mx-2 instructor-card w-100">
                                    <div class="cont">
                                        <button type="button" class="btn btn-primary">
                                            Add Unit
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        -->

            <div class="col-xl-9 col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 d-flex">
                        <div class="card instructor-card w-100">
                            <div class="card-body">
                                <div class="instructor-inner">
                                    <h6>STUDENTS</h6>
                                    <?php
                                    // Query to count the number of students
                                    $count_student = "SELECT COUNT(email) FROM signup";
                                    $count_student_run = mysqli_query($conn, $count_student);
                                    $student_num = mysqli_fetch_assoc($count_student_run);
                                    $no_of_student = $student_num['COUNT(email)'];
                                    ?>
                                    <h4 class="instructor-text-info"><?php echo $no_of_student; ?></h4>
                                    <p>Total no. of Students</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="card instructor-card w-100">
                            <div class="card-body">
                                <div class="instructor-inner">
                                    <h6>COURSES</h6>
                                    <?php
                                    // Query to count the number of courses
                                    $count_courses = "SELECT COUNT(course) FROM course";
                                    $count_courses_run = mysqli_query($conn, $count_courses);
                                    $course_num = mysqli_fetch_assoc($count_courses_run);
                                    $no_of_courses = $course_num['COUNT(course)'];
                                    ?>
                                    <h4 class="instructor-text-info"><?php echo $no_of_courses; ?></h4>
                                    <p>Total no. of Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="card instructor-card w-100">
                            <div class="card-body">
                                <div class="instructor-inner">
                                    <h6>Forum Questions</h6>
                                    <?php
                                    $count_forum = "SELECT COUNT(`question`) AS `Total_Q` FROM `Forum_question`";
                                    $count_forum_run = mysqli_query($conn, $count_forum);
                                    $forum_num = mysqli_fetch_assoc($count_forum_run);
                                    $no_of_forum = $forum_num['Total_Q'];
                                    ?>
                                    <h4 class="instructor-text-warning"><?php echo $no_of_forum; ?></h4>
                                    <p>Total No. of discussed questions</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="settings-widget">
                            <div class="settings-inner-blk p-0">
                                <div class="sell-course-head comman-space">
                                    <h3>My Courses</h3>
                                </div>
                                <div class="comman-space pb-0">
                                    <div class="settings-tickets-blk course-instruct-blk table-responsive">

                                        <table class="table table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th>COURSES</th>
                                                    <th>DESCRIPTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                // Query to fetch course data
                                                $sel_cources = "SELECT * FROM `course` LIMIT 5";
                                                $sel_cources_run = mysqli_query($conn, $sel_cources);
                                                while ($course_data = mysqli_fetch_assoc($sel_cources_run)) {

                                                ?>
                                                    <tr>
                                                        <td>
                                                            <div class="sell-table-group d-flex align-items-center">
                                                                <div class="sell-group-img">
                                                                    <a href="course-details.html">
                                                                        <!-- Image of the course -->
                                                                        <img src="assets/img/course/course-10.jpg" class="img-fluid " alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="sell-tabel-info">
                                                                    </p>
                                                                    <!-- Course name -->
                                                                    <p><a href="course-details.html"><?php echo $course_data['course'] ?></a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <!-- Description -->
                                                        <td><?php echo $course_data['description'] ?></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="settings-widget">
                            <div class="settings-inner-blk p-0">
                                <div class="sell-course-head comman-space">
                                    <h3>Students</h3>
                                </div>
                                <div class="comman-space pb-0">
                                    <div class="settings-tickets-blk course-instruct-blk table-responsive">

                                        <table class="table table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <!-- <th>Profile</th> -->
                                                    <th>Rankers ID</th>
                                                    <th>Email</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $Stsql = "SELECT * FROM `signup` WHERE `user_type` = 'user'";
                                                $strun = mysqli_query($conn, $Stsql);
                                                while ($strow =  mysqli_fetch_assoc($strun)) {


                                                ?>
                                                    <tr>
                                                        <td><?php echo $strow['rankers_id']; ?></td>
                                                        <td><?php echo $strow['email']; ?></td>
                                                        <td><?php echo $strow['name']; ?></td>
                                                        <td><?php echo $strow['phone']; ?></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        function addCourse() {
            var courseName = $('#courseName').val();
            $.ajax({
                url: addCourse_ajax.php,
                type: 'post',
                data: {
                    courseName: courseName
                },
                success: function() {
                    alert('Course added successfully');
                }
            })
        }
    </script>
    <?php include("footer.php"); ?>