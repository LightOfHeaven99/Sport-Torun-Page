<!-- Recovery password window -->
<div class="login-bg">
<div class="container">
  <div class="space50"></div>
  <div class="space50"></div>
  <div class="d-flex justify-content-center">

    <?php
      $attributes = array('class' => 'form-signin');
      echo form_open('accountactivation', $attributes);
    ?>

    <div class="card">
      <div class="card-header">
        <h3>Wprowadź kod aktywacyjny</h3>
        <p>Wysłany na <font style="color: #364FD2;"> <?= $this->session->userdata('email'); ?></font></p></br>
      </div>
      <div class="card-body">
        <div class="input-group form-group">
          <?php
            $data = array(
              'type'          => 'text',
              'style'         => 'padding: 15px 13px 15px 15px;
                                  background-color: white;
                                  -moz-border-radius: 4px 4px 4px 4px;
                                  -webkit-border-radius: 4px 4px 4px 4px;
                                  border-radius: 4px 4px 4px 4px;',
              'name'          => 'enter-code',
              'id'            => 'enter-code',
              'class'         => 'form-control',
              'placeholder'   => 'Kod'
              //'required'      => 'required'
            );
            echo form_input($data);
          ?>
        </div>
        <div class="form-group">
          <?php
            $data = array(
              'type'          => 'submit',
              'name'          => 'reset-submit',
              'id'						=> 'reset-submit',
              'class'         => 'btn float-right logout_btn',
              'value'         => 'Aktywuj'
            );
            echo form_submit($data);
          ?>
        </div>

        <?php echo form_close(); ?>

        <div class="space20"></div>


        <?php
          $attributes = array('class' => 'form-signin');
          echo form_open('logout', $attributes);

            $data = array(
              'type'          => 'submit',
              'name'          => 'logout-submit',
              'class'         => 'btn float-right logout_btn',
              'value'         => 'Wyloguj'
            );
            echo form_submit($data);

            echo form_close();
          ?>
      </div>
    </div>
  </div>
  <div class="space200"></div>
  <div class="space100"></div>
</div>
</div>
