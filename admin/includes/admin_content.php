<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Blank Page
                            <small>Subheading</small>
                        </h1>

                        <?php 

                        $user = User::find_by_id(4);

                        // echo $user->first_name;

                        $photo = Photo::find_by_id(13);

                        // echo $photo->title;

                            // $user = new User();

                            // $user->username = "Jill";
                            // $user->password = "12134";
                            // $user->first_name = "Jill";
                            // $user->last_name = "Jackslut";

                            // $user->create();

                            // if(!$user->create()) {
                            //     die("Query Failed" . mysqli_error($database->connection));
                            // }

                            // $user = User::find_user_by_id(5);
                            // $user->first_name = "Ted";
                            // $user->last_name = "Williams";

                            // $user->update();

                            // $user = User::find_user_by_id(2);

                            // $user->delete();

                            
                            // $user = new User;
                            //     $user->username = "dickbiggins";
                            //     $user->password = "123";
                            //     $user->first_name = "Dick";
                            //     $user->last_name = "Biggins";
                            // $user->save();
                            
                            // $users = User::find_all();

                            //     foreach($users as $user) {
                            //         echo $user->username;
                            //     }

                                // $photos = Photo::find_all();

                                // foreach($photos as $photo) {
                                //     echo $photo->title;
                                // }

                            // $photo = new Photo();

                            // $photo->title= "Jill";
                            // $photo->size = "20";

                            // $photo->create();

                                    
                        ?>

                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>

