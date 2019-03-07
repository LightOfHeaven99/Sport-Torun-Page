	<!-- Recovery password window -->
	<div class="login-bg">
	<div class="container">
		<div class="space50"></div>
		<div class="space50"></div>
		<div class="d-flex justify-content-center">

			<?php
				$attributes = array('class' => 'form-signin');
				echo form_open('codesent', $attributes);
			?>

			<div class="card">
        <div class="card-header">
          <h3>Odzyskaj konto</h3>
					<a href="login" style="color: #364FD2;">Wróc do logowania</a></br>
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
								'name'          => 'reset-email',
								'id'            => 'reset-email',
								'class'         => 'form-control',
								'placeholder'   => 'E-mail'
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
								'class'         => 'btn float-right reset_code_btn',
								'value'         => 'Wyślij kod'
							);
							echo form_submit($data);
						?>
          </div>
          <div class="space20"></div>
        </div>
      </div>

			<?php echo form_close(); ?>

    </div>
		<div class="space200"></div>
		<div class="space100"></div>
  </div>
</div>
