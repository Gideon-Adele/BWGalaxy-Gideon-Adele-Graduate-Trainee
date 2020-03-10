         
                <table class="table table-responsive table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Due Date</th>
                                <th>Task assigned by</th>                                
                                <th>Short Description</th>
                                <th>Detailed Description</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php

                        $query = "SELECT * FROM bw_galaxy.member WHERE id = '$id'";
                        $select_mem_data= mysqli_query($connection, $query);
                        foreach ($select_mem_data as $value){
                            $id=$value['id'];
                            $member_name=$value['member_name'];
                            $ass_date=$value['ass_date'];
                            $due_date=$value['due_date'];
                            $task_name=$value['task_name'];
                            $s_descrip=$value['s_descrip'];
                            $d_descrip=$value['d_descrip'];

                            echo "<tr>";
                                echo "<td>{$ass_date}</td>";
                                echo "<td>{$due_date}</td>";
                                echo "<td>{$task_name}</td>";
                                echo "<td>{$s_descrip}</td>";
                                echo "<td>{$d_descrip}</td>";                               
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
                        }else{
                            header("location: patient_data.php?source=view_all_patient");
                        }
                    }


                ?>
                        </tbody>
                    </table>

               