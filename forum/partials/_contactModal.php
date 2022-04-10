<!-- Modal -->
<?php

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){ 
    echo '
    <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
              
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
        <form action="/forum/partials/_handleContact.php" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <label for="contactQuery">Enter your Query. Our team,will mail you soon!!</label>
                    <input type="text" class="form-control" id="contactQuery" name="contactQuery" maxlength="400" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Don\'t enter more than 400 words.</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div>
</div>';
}
else
{
  echo '
  <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="contactModalLabel">Login to Contact</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
          </form>
      </div>
  </div>
</div>
  ';
}