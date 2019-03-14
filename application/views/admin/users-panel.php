<!-- Page Content -->
<div class="admin-bg">
  <div class="container">
    <div style="height: 20px;"></div>
    <h1>DODAJ UŻYTKOWNIKA</h1>
    <div style="height: 10px;"></div>
    <?php
    $attributes = array('class' => 'form-signin');
    echo form_open_multipart('useradded', $attributes);
    ?>

    <?php
    //echo $this->session->flashdata('login_info');
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
      <label for="display-login" style="padding-left: 3px; padding-top: 7px;">Wyświetlanie loginu</label>

    </div>
    <div class="row align-items-center remember">

      <?php
        $data = array(
          'type'          => 'checkbox',
          'name'          => 'is_active',
          'id'            => 'is_active'
        );
        echo form_input($data);
      ?>
      <label for="is_active" style="padding-left: 3px; padding-top: 7px;">Czy aktywny</label>

    </div>
    <div class="row align-items-center remember">

      <?php
        $data = array(
          'type'          => 'checkbox',
          'name'          => 'is_admin',
          'id'            => 'is_admin'
        );
        echo form_input($data);
      ?>
      <label for="is_admin" style="padding-left: 3px; padding-top: 7px;">Czy admin</label>

    </div>

    <div class="form-group">

      <?php
        $data = array(
          'type'          => 'submit',
          'name'          => 'signup-submit',
          'class'         => 'btn float-right signup_btn',
          'value'         => 'Dodaj użytkownika'
        );
        echo form_submit($data);
      ?>

    </div>

    <div class="space50"></div>
  </div>
</div>
