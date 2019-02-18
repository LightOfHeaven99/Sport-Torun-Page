  <!-- Page Content -->
  <form acton="action_page.php">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 left">
        <br/>
        <h1><font color="#3d46c2">Kontakt</font></h1>
        <p><font size="4">E-mail: biuro.tls-torun@torun.pl</p>
          <p><b>Łukasz Bania</b> - koordynator rozgrywek.</p>
          <p>kom. (+48) 612 231 512</p><br/>
          <div class="row">
            <div class="col-md-3">
              <label for="name-surname">Imię i nazwisko (<font color="red">*</font>)</label>
              <input type="text" name="name-surname" required><br/>

              <label for="email">E-mail (<font color="red">*</font>)</label>
              <input type="text" name="email" required><br>

              <label for="phone">Telefon</label>
              <input type="text" name="phone" optional><br/>

              <label for="topic">Temat (<font color="red">*</font>)</label>
              <input type="text" name="topic" required><br/>

            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <label for="message">Wiadomość (<font color="red">*</font>)</label>
                <div class="message">
                  <input type="text" name="message" required>
                <!--  <textarea placeholder="Enter Your text here..."></textarea> -->
                </div>
            </div>
          </div>
          <br>
          <p>Pola oznaczone (<font color="red">*</font>) są wymagane.</p><br>

          <button type="submit" class="registerbtn">Wyślij wiadomość!</button>

        <ul class="list-unstyled">
		  <li> <br/> </li>
        </ul>
      </div>
    </div>
  </div>
