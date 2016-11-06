 <div id="modal2" class="modal">
      <div class="modal-content">
        <h4>Sign up!</h4>
        <div class="row">
    <form class="col s12"  method="POST" action="process/process_signup.php">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate" name="fname">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="lname">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="username" type="text" class="validate" name="username">
          <label for="username" data-error="wrong" data-success="right">Username:</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email">
          <label for="email" data-error="wrong" data-success="right">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="password">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="conf_password">
          <label for="password">Confirm Password</label>
        </div>
      </div>
      <button class="modal-action btn waves-effect waves-light" type="submit" name="action">Submit
          <i class="material-icons right">send</i>
        </button> 
    </form>
  </div>
      </div>
      <div class="modal-footer">
      &nbsp;&nbsp;
        
        <a href="#!" class=" modal-action modal-close waves-effect waves-light btn btn-flat">Close</a>
      </div>
    </div>