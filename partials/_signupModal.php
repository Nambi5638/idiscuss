<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">iDiscuss - Signup</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="/forums/partials/_handleSignup.php" method="post">

                <div class="modal-body">

                    <div class="form-group">
                        <label for="email">Username</label>
                        <input type="text" class="form-control" id="signupEmail" name="signupEmail"
                            aria-describedby="emailHelp" placeholder="Enter username">

                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="signupPassword" name="signupPassword"
                            placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" class="form-control" id="signupcPassword" name="signupcPassword"
                            placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>