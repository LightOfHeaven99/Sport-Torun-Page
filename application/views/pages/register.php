<!-- Signup window -->
<div class="login-bg">
<div class="container">

  <?php
    $attributes = array('class' => 'form-signin');
    echo form_open('register', $attributes);
  ?>

  <div class="space50"></div>
  <div class="d-flex justify-content-center">
    <div class="card-signup">
      <div class="card-header">
        <h3>Zarejestruj się</h3>
        <a href="login" style="color: #364FD2;">Wróc do logowania</a></br>
      </div>
      <div class="card-body">
        <h3 style="color:white"><b>Podaj dane</b></h3>
        <?php
          //echo $this->session->flashdata('register_info');
          echo validation_errors('<div class="alert alert-danger">', '</div>');
        ?>
          <div class="input-group form-group">

            <?php
              $data = array(
                'type'          => 'text',
                'style'         => 'padding: 15px 13px 15px 15px;
                                    background-color: white;
                                    -moz-border-radius: 4px 0px 0px 4px;
                                    -webkit-border-radius: 4px 0px 0px 4px;
                                    border-radius: 4px 0px 0px 4px;',
                'name'          => 'first-name',
                'id'            => 'first-name',
                'class'         => 'form-control',
                'placeholder'   => 'Imię'
                //'required'      => 'required'
              );
              $val = set_value('first-name');
              echo form_input($data, $val);
            ?>

            <?php
              $data = array(
                'type'          => 'text',
                'style'         => 'padding: 15px 13px 15px 0px;
                                    background-color: white;
                                    -moz-border-radius: 0px 4px 4px 0px;
                                    -webkit-border-radius: 0px 4px 4px 0px;
                                    border-radius: 0px 4px 4px 0px;',
                'name'          => 'last-name',
                'id'            => 'last-name',
                'class'         => 'form-control',
                'placeholder'   => 'Nazwisko'
                //'required'      => 'required'
              );
              $val = set_value('last-name');
              echo form_input($data, $val);
            ?>

          </div>
          <div class="input-group form-group">

            <?php
              $data = array(
                'type'          => 'text',
                'style'         => 'padding: 15px 13px 15px 15px;
                                    background-color: white;
                                    -moz-border-radius: 4px 4px 4px 4px;
                                    -webkit-border-radius: 4px 4px 4px 4px;
                                    border-radius: 4px 4px 4px 4px;',
                'name'          => 'uid',
                'id'            => 'uid',
                'class'         => 'form-control',
                'placeholder'   => 'Login'
                //'required'      => 'required'
              );
              $val = set_value('uid');
              echo form_input($data, $val);
            ?>

          </div>
          <div class="input-group form-group">

            <?php
              $data = array(
                'type'          => 'password',
                'style'         => 'padding: 15px 13px 15px 15px;
                                    background-color: white;
                                    -moz-border-radius: 4px 4px 4px 4px;
                                    -webkit-border-radius: 4px 4px 4px 4px;
                                    border-radius: 4px 4px 4px 4px;',
                'name'          => 'pwd',
                'id'            => 'pwd',
                'class'         => 'form-control',
                'placeholder'   => 'Hasło'
                //'required'      => 'required'
              );
              echo form_input($data);
            ?>

          </div>
          <div class="input-group form-group">

            <?php
              $data = array(
                'type'          => 'password',
                'style'         => 'padding: 15px 13px 15px 15px;
                                    background-color: white;
                                    -moz-border-radius: 4px 4px 4px 4px;
                                    -webkit-border-radius: 4px 4px 4px 4px;
                                    border-radius: 4px 4px 4px 4px;',
                'name'          => 'pwd-repeat',
                'id'            => 'pwd-repeat',
                'class'         => 'form-control',
                'placeholder'   => 'Powtórz hasło'
                //'required'      => 'required'
              );
              echo form_input($data);
            ?>

          </div>
          <div class="input-group form-group">

            <?php
              $data = array(
                'type'          => 'email',
                'style'         => 'padding: 15px 13px 15px 15px;
                                    background-color: white;
                                    -moz-border-radius: 4px 4px 4px 4px;
                                    -webkit-border-radius: 4px 4px 4px 4px;
                                    border-radius: 4px 4px 4px 4px;',
                'name'          => 'email',
                'id'            => 'email',
                'class'         => 'form-control',
                'placeholder'   => 'E-mail'
                //'required'      => 'required'
              );
              $val = set_value('email');
              echo form_input($data, $val);
            ?>

          </div>
          <div class="row align-items-center remember">

            <?php
              $data = array(
                'type'          => 'checkbox',
                'name'          => 'display-login',
                'id'            => 'display-login'
              );
              echo form_input($data);
            ?>
            <label for="display-login" style="padding-left: 3px; padding-top: 7px;">Chcę być widoczny jako mój login</label>

          </div>

          <div class="form-group">

            <?php
              $data = array(
                'type'          => 'submit',
                'name'          => 'signup-submit',
                'class'         => 'btn float-right signup_btn',
                'value'         => 'Dołącz'
              );
              echo form_submit($data);
            ?>

          </div>
					<div class="space20"></div>
      </div>
    </div>
  </div>

  <?php echo form_close(); ?>

  <div class="space50"></div>
  <div class="space30"></div>

  </div>
</div>
