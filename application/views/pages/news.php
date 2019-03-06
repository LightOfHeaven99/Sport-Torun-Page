<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Page Content -->
  <div class="news-bg">
    <div class="container">

      <!-- Page Heading -->
      <div class="space20"></div>
      <h1>Aktualności</h1>
      <?php if($this->session->userdata('is_admin') == TRUE) : ?>
        <a href="news-panel" class="btn btn-primary">Dodaj nowy post</a>
      <?php endif; ?>
      <div class="space10"></div>

      <script>
        /* Open when someone clicks on the span element */
        function openNav() {
          updateDiv();
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


        <div class="row">
          <div class="col-md-6">
            <!-- <a onclick="openNav()"> -->
              <a>
              <img class="img-fluid rounded mb-3 mb-md-0" src="$post->image" alt="">
              <?php echo '<img src = "data:image/jpeg;base64,'.base64_encode( $row->image ).'" width="650" height="300" class="responsive"/>'; ?>
            </a>
            <div class="col">
              <p><i><?php echo 'Dodano: '.$row->postdate;?></i></p>
            </div>
          </div>
          <div class="col-md-6">
            <br>
            <h3><?php echo $row->title;?></h3>
            <p style="text-align: justify;"><?php if(strlen($row->content) > 520):
            echo substr($row->content, 0, 520)."...";?></p>
            <!-- <a class="btn btn-primary" onclick="openNav()">Czytaj więcej</a> -->
            <?php else:
              echo $row->content;?></p>
            <?php endif; ?>
            <br>

            <div class="w3-justify" style="vertical-align: bottom;">
              <br>
              <?php if($this->session->userdata('logged_in') == TRUE) : ?>
                <?php if($row->voting == 1) : ?>
                  <p class="w3-left"><button class="w3-button w3-indigo w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Polub</b></button></p>
                <?php endif; ?>
                <?php if($row->commenting == 1) : ?>
                  <p class="w3-left"><button class="w3-button w3-indigo w3-border" onclick="myFunction('demo1')" id="myBtn"><b><i class="fa fa-comment"></i> Skomentuj</b></button></p>
                <?php endif; ?>
                <?php if($row->mailing == 1) : ?>
                  <p class="w3-left"><button class="w3-button w3-indigo w3-border" onclick="mailFunction()"><b><i class="fa fa-envelope"></i> Zapytaj</b></button></p>
                <?php endif; ?>
                <?php if($this->session->userdata('is_admin') == TRUE) : ?>
                  <p class="w3-left"><a class="w3-button w3-indigo w3-border" style="color: #DD4E4E; background-color: #DD4E4E;" onclick="editNewsAlert($row->id)"><b>Edytuj</b></a></p>
                  <p class="w3-left"><a href ="newsdeleted/$row->id" class="w3-button w3-indigo w3-border" style="color: #DD4E4E; background-color: #DD4E4E;" onclick="return confirm('Jesteś pewien, że chcesz usunąć ten post?');"><b>Usuń</b></a></p>
                <?php endif; ?>
                <?php if($row->voting == 0 && $row->commenting == 0 && $row->mailing == 0) : ?>
                  <br><br><br><p style = "vertical-align: bottom; text-align: center; color: gray;"><i>Ocenianie postu zablokowane.</i></p>
                <?php endif; ?>
              <?php else : ?>
                <p style="vertical-align: bottom; text-align: center;"><i><a href="login" style = "color: #364FD2;">Zaloguj się</a>, aby wyrazić opinię.</i></p>
              <?php endif; ?>

              <div class="w3-row w3-margin-bottom" id="demo1" style="display:none">
              </div>

            </div>
          </div>
        </div>

        <!-- The overlay -->
        <div id="myNav" class="overlay">
          <!-- Button to close the overlay navigation -->
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <!-- Overlay content -->
          <div class="overlay-content">
              <img class="img-fluid rounded mb-3 mb-md-0 responsive" onclick="closeNav()" src="$post->image" alt="">
              <?php echo '<img src = "data:image/jpeg;base64,'.base64_encode( $row->image ).'" "/>'; ?>
              <br><h3 style="color: white;"><?php echo $row->title;?></h3><br>
              <p style="color: white; text-align: justify; padding-left: 30px; padding-right: 30px;"><?php echo $row->content;?></p>
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


<script>
document.getElementById("myBtn").click();

function likeFunction(x) {
  x.style.fontWeight = "bold";
  x.innerHTML = "✓ Polubiono";
}

function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

function mailFunction() {

}

function updateDiv() {
    $( "#here" ).load(window.location.href + " #here" );
}

function editNewsAlert(id) {
  alert("Funkcja edycji zostanie dodana później.");
}

function deleteNewsAlert(id) {
  if( confirm("Uwaga! Czy na pewno chcesz usunąć post?") ) {
    //header('Location: ' . site_url('newsdeleted/' . $n['id']));
    //redirect('newsdeleted/' . $n['id']);
    window.location.href = "newsdeleted/" + id;
    updateDiv();
    //return true;
  } else {
    //return false;
  }
}
</script>
