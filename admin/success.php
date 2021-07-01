<?php
                if(isset($_REQUEST['addcategory'])){
                    if($_REQUEST['addcategory'] == "success"){
                        echo "<div class='alert alert-success'>
                                <strong> successfully </strong>category added.
                            </div>";
                    }
                    else if($_REQUEST['addcategory'] == "error"){
                        echo "<div class='alert alert-danger'>
                            <strong> Error! </strong>category was not added.
                        </div>";
                    }
                }
                ?>