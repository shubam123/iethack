    <div id="modal1" class="modal">
      <div class="modal-content">
        <h4>Modal Header</h4>
        <div class="row">
          <form class="col s12" method="POST" action="process/process_login.php">
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_prefix" type="text" class="validate" name="username">
                <label for="icon_prefix">Username</label>
              </div>
              <div class="input-field col s12">
                <i class="material-icons prefix">lock_outline</i>
                <input id="icon_telephone" type="tel" class="validate" name="password">
                <label for="icon_telephone">Password</label>
              </div>
            </div>
             <button class="modal-action modal-close btn waves-effect waves-light" type="submit" name="action">Login!
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