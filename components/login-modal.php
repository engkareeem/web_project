
<div class="modal fade" tabindex="-1" id="login-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <span class="icon material-icons close-button" data-bs-dismiss="modal">close</span>
            </div>
            <div class="modal-body">
                <div class="body-header">
                    <span class="icon material-icons person-icon">person</span>
                    <span class="content-title">Log-In</span>
                </div>

                <form>
                    <div class="mb-3">
                        <label for="signin:email-input" class="form-label">Email Address</label>
                        <div class="icon-text-field">
                            <span class="icon material-icons text-field-icon">alternate_email</span>
                            <input type="email" placeholder="Email" id="signin:email-input" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="signin:password-input" class="form-label">Password</label>
                        <div class="icon-text-field">
                            <span class="icon material-icons text-field-icon">lock</span>
                            <input type="password" placeholder="Password" id="signin:password-input">
                        </div>
                    </div>
                    <button type="submit" class="primary-btn">Submit</button>
                </form>
                <div class="medal-footer">
                    Don't have an account? &nbsp <span class="switch-to-signup" data-bs-toggle="modal" data-bs-target="#signup-modal"> Sign Up</span>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    const loginModal = document.getElementById('login-modal')
    loginModal.addEventListener('shown.bs.modal', () => {

    })
</script>