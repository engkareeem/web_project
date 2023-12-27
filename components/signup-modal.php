<div class="modal fade" tabindex="-1" id="signup-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <span class="icon material-icons close-button" data-bs-dismiss="modal">close</span>
            </div>
            <div class="modal-body">
                <div class="body-header">
                    <span  class="icon material-icons person-icon">person</span>
                    <span class="content-title">Sign-Up</span>
                </div>

                <form>
                    <div class="mb-3">
                        <label for="signup:username-input" class="form-label">Username</label>
                        <div class="icon-text-field">
                            <span class="icon material-icons text-field-icon">badge</span>
                            <input type="text" placeholder="Username" id="signup:username-input" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="signup:email-input" class="form-label">Email Address</label>
                        <div class="icon-text-field">
                            <span class="icon material-icons text-field-icon">alternate_email</span>
                            <input type="email" placeholder="Email" id="signup:email-input" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="signup:password-input" class="form-label">Password</label>
                        <div class="icon-text-field">
                            <span class="icon material-icons text-field-icon">lock</span>
                            <input type="password" placeholder="Password" id="signup:password-input">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="signup:confirm-password-input" class="form-label">Confirm Password</label>
                        <div class="icon-text-field">
                            <span class="icon material-icons text-field-icon">lock</span>
                            <input type="password" placeholder="Password" id="signup:confirm-password-input">
                        </div>
                    </div>
                    <button type="submit" class="primary-btn">Submit</button>
                </form>
                <div class="medal-footer">
                    Already have an account &nbsp <span class="switch-to-signin" data-bs-toggle="modal" data-bs-target="#login-modal"> Login</span>
                </div>
            </div>

        </div>
    </div>
</div>


<script>
    const signUpModal = document.getElementById('signup-modal')
    signUpModal.addEventListener('shown.bs.modal', () => {

    })
</script>