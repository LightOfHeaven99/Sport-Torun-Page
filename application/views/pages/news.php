  <!-- Page Content -->
  <div class="news-bg">
    <div class="container">

      <!-- Page Heading -->
      <div class="space20"></div>
      <h1>Aktualności</h1>
      <div class="space20"></div>


      <?php
        $query = $this->db->query("SELECT * FROM news;");

        foreach($query->result() as $row):
      ?>
        <div class="row">
          <div class="col-md-7">
            <a href="#">
              <!-- <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt=""> -->
              <img class="img-fluid rounded mb-3 mb-md-0" src="$post->image" alt="">
              <?php echo '<img src = "data:image/jpeg;base64,'.base64_encode( $row->image ).'" width="650" height="300"/>'; ?>
            </a>
            <p><i><?php echo  'Dodano: '.$row->postdate;?></i></p>
          </div>
          <div class="col-md-5">
            <h3><?php echo  $row->title;?></h3>
            <p><?php echo  substr($row->content, 1, 521)."...";?></p>
            <a class="btn btn-primary" href="#">Czytaj więcej</a>
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
