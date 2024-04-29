<form action="{{ route('send-email') }}" method="POST">
    @csrf
    <button
        class="btn btn-primary">Send Ticket Email
    </button>
</form>
