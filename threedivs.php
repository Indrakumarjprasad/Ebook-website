<div id="myebooks" style="display: none;">
          <div id="templatemo_content_right">
            <h1>My Library</h1>
            <?php
                $homeResult = mysqli_query($db, "SELECT * FROM books, userlibrary WHERE userlibrary.username='".$_SESSION["username"]."' AND books.id=userlibrary.bookid");
                $rescount = mysqli_num_rows($homeResult);
                $i=1;
                if ($rescount > 0) {
                  while ($row = mysqli_fetch_assoc($homeResult)) {
                    $rating = $row["rating"];
                    if($i%2==0){
                      echo "<div class='templatemo_product_box'>
                            <h1>".$row["bookname"]."</h1>
                            <img src='".$row["coverimg"]."'/>
                            <div class='product_info'>";
                            for ($chkst=0; $chkst < $rating; $chkst++) { 
                              echo "<span class='fa fa-star checked'></span>";
                            }
                            for ($unchkst=0; $unchkst < (5-$rating); $unchkst++) { 
                              echo "<span class='fa fa-star'></span>";
                            }
                            echo "<h3>".$row["author"]."</h3>
                            <div class='buy_now_button'><a href='".$row["path"]."'>Read</a></div>
                          </div>
                          <div class='cleaner'>&nbsp;</div>
                        </div>
                        <div class='cleaner_with_height'>&nbsp;</div>";
                    }
                    else{
                      echo "<div class='templatemo_product_box'>
                            <h1>".$row["bookname"]."</h1>
                            <img src='".$row["coverimg"]."'/>
                            <div class='product_info'>";
                            for ($chkst=0; $chkst < $rating; $chkst++) { 
                              echo "<span class='fa fa-star checked'></span>";
                            }
                            for ($unchkst=0; $unchkst < (5-$rating); $unchkst++) { 
                              echo "<span class='fa fa-star'></span>";
                            }
                            echo "<h3>".$row["author"]."</h3>
                            <div class='buy_now_button'><a href='".$row["path"]."'>Read</a></div>
                          </div>
                          <div class='cleaner'>&nbsp;</div>
                        </div>
                        <div class='cleaner_with_width'>&nbsp;</div>";
                    }
                    $i += 1;
                  }
                  echo "<div class='cleaner_with_height'>&nbsp;</div>";;
                }
              
            ?>
            <a href="subpage.php"><img src="website/images/templatemo_ads.jpg" alt="ads" /></a>
          </div> 
        </div><!-- end of content right -->

        <div id="cart" style="display: none;">
          <div id="templatemo_content_right">
            <h1>My Cart</h1>
            <table border="1px" style="background: #fff; color: #000">
              <th>Book Name</th>
              <th>Rate</th>
              <th>Qty</th>
              <th>Total</th>
              <th>Action</th>
              <?php
                $cartres = mysqli_query($db, "SELECT * FROM books,cart WHERE username='".$_SESSION["username"]."' AND bookid=id");
                if(mysqli_num_rows($cartres) > 0){
                  $gtot=0;
                  while($cartrow = mysqli_fetch_assoc($cartres)){
                    echo "<tr style='text-align: right;'>
                            <td>".$cartrow["bookname"]."</td>
                            <td>".$cartrow["cost"]."</td>
                            <td>1</td>
                            <td>".($cartrow["cost"]*1)."</td>
                            <td><a href='Home.php?action=delete&id=".$cartrow["bookid"]."'>Remove</a></td>
                          </tr>";
                    $gtot += ($cartrow["cost"]*1);
                  }
                  echo "<tr>
                          <td colspan=3 style='background: green;'><strong>Grand Total:</strong></td>
                          <td><strong>&#8377; ".$gtot."/-</strong></td>
                          <td><button><a style='color: #000;' href='checkout.php?gtot=".$gtot."'>Checkout</a></button></td>
                        </tr>";
                }
              ?>
            </table>
          </div>
        </div>

        <div id="orderhistory" style="display: none;">
          <div id="templatemo_content_right">
            <h1>Order History</h1>
            <table border="1px" style="background: #fff; color: #000">
              <th>Order Date/Time</th>
              <th>Book Title</th>
              <th>Price</th>
              <th>Action</th>
              <?php
                $orderres = mysqli_query($db, "SELECT * FROM orderhistory WHERE username='".$_SESSION["username"]."'");
                if(mysqli_num_rows($orderres) > 0){
                  while($orderrow = mysqli_fetch_assoc($orderres)){
                    $orderbookres = mysqli_query($db, "SELECT * FROM books WHERE id=".$orderrow["bookid"]);
                    $orderbookresrow = mysqli_fetch_assoc($orderbookres);
                    echo "<tr>
                            <td>".$orderrow["orderdate"]."</td>
                            <td>".$orderbookresrow["bookname"]."</td>
                            <td>".$orderbookresrow["cost"]."</td>
                            <td><a href='bookdetails.php?bookid=".$orderrow["bookid"]."'>Give Review</a></td>
                          </tr>";
                  }
                }
              ?>
            </table>
          </div>
        </div>

        <div id="testresults" style="display: none;">
          <div id="templatemo_content_right">
            <h1>Test Results</h1>
            <table border="1px" style="background: #fff; color: #000">
              <th>Test Date/Time</th>
              <th>Test Name</th>
              <th>Score</th>
              <?php
                $orderres = mysqli_query($db, "SELECT * FROM testscores WHERE username='".$_SESSION["username"]."'");
                if(mysqli_num_rows($orderres) > 0){
                  while($orderrow = mysqli_fetch_assoc($orderres)){
                    echo "<tr>
                            <td>".$orderrow["testdate"]."</td>
                            <td>".$orderrow["testname"]."</td>
                            <td>".$orderrow["score"]."/10</td>
                          </tr>";
                  }
                }
              ?>
            </table>
          </div>
        </div>