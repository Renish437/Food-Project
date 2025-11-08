  <div class="modal theme-modal fade" id="staticBackdrop" tabindex="-1" role="dialog" aria-modal="true">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Logging Out</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mb-0">Are you sure you want to log out?</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-cancel" type="button" data-bs-dismiss="modal" aria-label="Close">No</button>
                       <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                             <button class="btn btn-submit" type="submit" data-bs-dismiss="modal" aria-label="Close">Yes</button>
                        </form>

                </div>
            </div>
        </div>
    </div>
