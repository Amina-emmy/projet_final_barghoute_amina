
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#shewmail{{ $mail->id }}">
    Show Mail
</button>

<!-- Modal -->
<div class="modal fade" id="shewmail{{ $mail->id }}" tabindex="-1" aria-labelledby="shewmail{{ $mail->id }}Label"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="shewmail{{ $mail->id }}Label">Email Content</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4>From: {{ $mail->email }}</h4>
                <h4>Message: </h4>
                <h5>{{ $mail->messageText }}</h5>
            </div>
        </div>
    </div>
</div>
