<?php
                    session_start();
                    if(isset($_SESSION['success'])){
                        echo '<p class="alert alert-success">'.$_SESSION['success'].'</p>';
                        unset($_SESSION['success']);
                    }
                        if(isset($_SESSION['error'])){
                            echo '<p class="alert alert-error">'.$_SESSION['error'].'</p>';
                            unset($_SESSION['error']);
                        }

                    ?>