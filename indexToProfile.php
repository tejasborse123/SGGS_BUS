<?php
              session_start();
              if( isset  ($_COOKIE['username'])  )
              {
                     if( isset  ($_COOKIE['password']))
                     {
                          header("Location: profile.html");
                     }
              }
              else{
                echo '<script>alert("Login to Continue..");</script>';
                echo '<script>window.location.href = "entry.html";</script>';
                //header("Location: entry.html ");
            }

?>\