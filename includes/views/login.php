<!-- The Modal -->
<div class="modal fade" id="loginModal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">

            <div id="loginDiv">
                <div class="text-center">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <p style="font-size:10px">Login to start planning your next trip.</p>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="login-email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="login-password" placeholder="Password">
                </div>

                <button onclick="login()" data-dismiss="modal" aria-label="Close" class="btn btn-primary btn-block">Login</button>

                <small class="form-text text-muted">Don't have an account? <a id="signupBtn" class="signup-btn">Sign Up</a></small>
            </div>

            <div id="signupDiv">
                <div class="text-center">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <p style="font-size:10px">Signup to start planning your next trip.</p>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Full Name</label>
                    <input type="text" class="form-control" id="signup-name" aria-describedby="emailHelp" placeholder="Enter Fullname">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="signup-email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="signup-pass" placeholder="Password">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" id="signup-pass-conf" placeholder="Confirm Password">
                </div>
                
                <button onclick="signup()" data-dismiss="modal" aria-label="Close" class="btn btn-primary btn-block">Signup</button>

                <small class="form-text text-muted">Already have an account? <a id="loginBtn" class="signup-btn">Login</a></small>
            </div>
        </div>

    </div>
  </div>
</div>