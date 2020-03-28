<div id="myebooks" style="display: none;">
          <div id="templatemo_content_right">
            <h1>Add a New Book</h1>
            <form method="POST" action="adminHome.php" enctype="multipart/form-data">

              <div class="input-group">
                <h2><label>Book Name</label></h2>
                <input type="text" name="bookname" style="border-radius: 20px; height: 20px; " required>
              </div><br>

              <div class="input-group">
                <h2><label>Cost</label></h2>
                <input type="text" name="cost" style="border-radius: 20px; height: 20px; " required>
              </div><br>

              <div class="input-group">
                <h2><label>Author</label></h2>
                <input type="text" name="author" style="border-radius: 20px; height: 20px; " required>
              </div><br>

              <div class="input-group">
                <h2><label>Category</label></h2>
                <input type="text" name="category" style="border-radius: 20px; height: 20px; " required>
              </div><br>

              <div class="input-group">
                <h2><label>Rating</label></h2>
                <input type="text" name="rating" placeholder="Rating on a scale of 1-5 (whole nos.)" style="border-radius: 20px; height: 20px; " required>
              </div><br>

              <div class="input-group">
                <h2><label>Upload PDF</label></h2>
                <input type="file" name="pdffile" style="border-radius: 20px; height: 20px; " required>
              </div><br>

              <div class="input-group">
                <h2><label>Upload Cover image</label></h2>
                <input type="file" name="coverimg" style="border-radius: 20px; height: 20px; " required>
              </div><br>

              <div class="input-group">
                <h2><label>Book Description</label></h2>
                <textarea name="description" style="border-radius: 20px; height: 20px; " required></textarea>
              </div><br>

              <div class="input-group">
                <button type="submit" name="addbook" class="btn" style="border-radius: 20px; height: 20px; ">Add Book</button>
              </div><br>
            </form>
            <a href="subpage.php"><img src="website/images/templatemo_ads.jpg" alt="ads" /></a>
          </div> 
        </div><!-- end of content right -->

        <div id="cart" style="display: none;">
          <div id="templatemo_content_right">
            <h1>Update Existing Book</h1>
          </div>
        </div>

        <div id="orderhistory" style="display: none;">
          <div id="templatemo_content_right">
            <h1>Remove Book</h1>

            <div id="templatemo_product_box">
              <?php
                $homeResult = mysqli_query($db, "SELECT DISTINCT category FROM books");
                $arr_options = "<option disabled selected>--select--</option>";
                if (mysqli_num_rows($homeResult) > 0) {
                  while ($row = mysqli_fetch_assoc($homeResult)) {
                    $arr_options .= '<option value="'.$row['category'].'">'.$row['category'].'</option>';
                  }
                }?>
              <form>
                Select Book Category:
                <select name="delBookCat" onchange="this.form.submit()"><?php echo "$arr_options";?></select>
              </form>
              <div class="cleaner_with_height">&nbsp;</div>
            </div>

            <?php
              if(isset($_GET["delBookCat"])){
                echo "<script>
                        var e = document.getElementById('viewbookbycat');
                        var f = document.getElementById('myebooks');
                        var g = document.getElementById('cart');
                        var h = document.getElementById('orderhistory');
                        e.style.display = 'none';
                        f.style.display = 'none';
                        g.style.display = 'none';
                        h.style.display = 'block';
                      </script>";
                $bcat=$_GET["delBookCat"];
                //echo "Selected category is: ".$bcat;
                $homeResult = mysqli_query($db, "SELECT * FROM books WHERE category='$bcat'");
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
                            <div class='buy_now_button'>
                              <form action='adminHome.php' method='POST'>
                              <button type='submit' name='btnrembookid' value='".$row["id"]."'>Remove Book</button>
                              </form>
                            </div>
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
                            <div class='buy_now_button'>
                              <form action='adminHome.php' method='POST'>
                              <button type='submit' name='btnrembookid' value='".$row["id"]."'>Remove Book</button>
                              </form>
                            </div>
                          </div>
                          <div class='cleaner'>&nbsp;</div>
                        </div>
                        <div class='cleaner_with_width'>&nbsp;</div>";
                    }
                    $i += 1;
                  }
                  echo "<div class='cleaner_with_height'>&nbsp;</div>";;
                }
              }
            ?>

          </div>
        </div>