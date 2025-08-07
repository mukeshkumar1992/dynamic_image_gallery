<?php
                $ret = mysqli_query($conn, "SELECT * FROM gallery_imges ORDER BY ID DESC");
                $cnt = 1;
                $row = mysqli_num_rows($ret);
                if ($row > 0) {
                    while ($row = mysqli_fetch_array($ret)) {

                ?>
                        <div class="col-12 col-sm-6 col-md-4 mb-3">
                            <img src="./admin/profilepics/<?php echo $row['ProfilePic']; ?>" class="img-fluid imagess">
                        </div>
                <?php
                    }
                } else {
                    echo '<h4 class="text-center text-danger">No Records Found</h4>';
                }
                ?>