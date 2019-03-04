  <!-- Page Content -->
  <div class="news-bg">
    <div class="container">

      <!-- Page Heading -->
      <div class="space20"></div>
      <h1>Aktualności</h1>
      <div class="space20"></div>

      <script>
        /* Open when someone clicks on the span element */
        function openNav() {
          document.getElementById("myNav").style.width = "100%";
        }

        /* Close when someone clicks on the "x" symbol inside the overlay */
        function closeNav() {
          document.getElementById("myNav").style.width = "0%";
        }
      </script>

      <?php
        $query = $this->db->query("SELECT * FROM news ORDER BY id DESC");

        foreach($query->result() as $row):
      ?>
        <!-- The overlay -->
        <div id="myNav" class="overlay">
          <!-- Button to close the overlay navigation -->
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

          <!-- Overlay content -->
          <div class="overlay-content">
              <img class="img-fluid rounded mb-3 mb-md-0" src="$post->image" alt="">
              <?php echo '<img src = "data:image/jpeg;base64,'.base64_encode( $row->image ).'" width="650" height="300"/>'; ?>
              <h3 style="color: white;"><?php echo $row->title;?></h3>
              <h3 style="color: white;">______________________________________________________________________________________________________________________________________________________</h3>
              <p style="color: white; text-align: justify;"><?php echo $row->content;?></p>
              <br>
              <h3 style="color: white;"><?php echo $row->title;?></h3>
              <h3 style="color: white;">______________________________________________________________________________________________________________________________________________________</h3>
              <p style="color: white; text-align: justify;"><?php echo $row->content;?></p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-7">
            <a href="#">
              <!-- <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt=""> -->
              <img class="img-fluid rounded mb-3 mb-md-0" src="$post->image" alt="">
              <?php echo '<img src = "data:image/jpeg;base64,'.base64_encode( $row->image ).'" width="650" height="300"/>'; ?>
            </a>
            <p><i><?php echo 'Dodano: '.$row->postdate;?></i></p>
          </div>
          <div class="col-md-5">
            <br>
            <h3><?php echo $row->title;?></h3>
            <p style="text-align: justify;"><?php if(strlen($row->content) > 520):
            echo substr($row->content, 0, 520)."...";?></p>
            <a class="btn btn-primary" onclick="openNav()">Czytaj więcej</a>
            <?php else:
              echo $row->content;?></p>
            <?php endif; ?>
            <br>
          </div>
        </div>
        <hr>
     <?php endforeach;?>




      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <!-- <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li> -->
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>
  </div>
