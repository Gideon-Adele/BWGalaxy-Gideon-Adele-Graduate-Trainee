                <table class="table table-responsive table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Member's Name</th>
                                <th>Gender</th>
                                <th>Speclization</th>
                                <th>ID Number</th>
                                <th>Email Address</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $query ="SELECT * FROM bw_galaxy.member";
                        $select_member= mysqli_query($connection, $query);
                        foreach ($select_member as $value) {
                            $id=$value['id'];
                            $member_name=$value['member_name'];
                            $gender=$value['gender'];
                            $specialization=$value['specialization'];
                            $licensenumber=$value['licensenumber'];
                            $email=$value['email'];
                           
                            

                            echo "<tr>";
                                echo "<td>{$id}</td>";
                                echo "<td>{$member_name}</td>";      
                                echo "<td>{$gender}</td>";
                                echo "<td>{$specialization}</td>";
                                echo "<td>{$licensenumber}</td>";
                                echo "<td>{$email}</td>";                                
                                echo "<td><a href='member.php?source=assign_member&assign_member={$id}'>Assign Task</a></td>";
                                echo "<td><a href='member.php?source=view_all_member&delete={$id}'>Delete</a></td>";
                            echo "</tr>";


                        }
                ?>
                <?php 
                    
                    if (isset($_GET['delete'])) {
                        $deleteID = $_GET['delete'];
                        $query = "DELETE FROM bw_galaxy.member WHERE id = '$deleteID'";
                        $delete_query = mysqli_query($connection, $query);
                        if (!$delete_query) {
                            die("QUERY FAILED".mysqli_error($connection));
                        }
                    }


                ?>
                        </tbody>
                    </table>

               