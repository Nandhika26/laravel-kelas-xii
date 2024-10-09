<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    .form-control:disabled,
    .form-control[readonly] {
        background-color: #FFF;
        opacity: 1;
    }

    .btn-custom {
        background-color: #FF8D1B;
        color: #FFF;
        transition: .7s;
        border: none;
    }

    .btn-custom:hover {
        background-color: black;
        transition: .7s;
        color: #FFF;
    }

    .form-select,
    .form-floating textarea {
        border: 1px solid #FF8D1B;
    }

    .input-group-text {
        background-color: #FF8D1B;
        color: #FFF;
        border: 1px solid #FF8D1B;
    }

    .form-floating label {
        color: #FF8D1B;
    }

    .form-floating input:focus,
    .form-floating textarea:focus,
    .form-select:focus {
        border-color: #FF8D1B;
        box-shadow: 0 0 0 0.25rem rgba(255, 141, 27, 0.25);
    }

    .form-container {
        position: relative;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .flex-row {
        display: flex;
        gap: 20px;
    }

    .flex-row .form-floating {
        flex: 1;
    }

    .form-container form {
        background-color: rgb(248, 248, 248);
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="container form-container">
    <div class="form-background-blur"></div>
    <div class="col-md-8">
        <div class="all-comments">
            <div class="all-comments-info">
                <div class="agile-info-wthree-box">
                    <form action="{{ route('kritik.update', $kritik->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="flex-row mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Name"
                                    value="{{ $kritik->user->name }}" readonly>
                                <label for="floatingInput">Name</label>
                            </div>
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingEmail" placeholder="Email"
                                    value="{{ $kritik->user->email }}" readonly>
                                <label for="floatingEmail">Email</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Rating</label>
                            <select class="form-select" id="inputGroupSelect01" name="rating">
                                <option value="1" {{ $kritik->rating == 1 ? 'selected' : '' }}>1 Star</option>
                                <option value="2" {{ $kritik->rating == 2 ? 'selected' : '' }}>2 Stars</option>
                                <option value="3" {{ $kritik->rating == 3 ? 'selected' : '' }}>3 Stars</option>
                                <option value="4" {{ $kritik->rating == 4 ? 'selected' : '' }}>4 Stars</option>
                                <option value="5" {{ $kritik->rating == 5 ? 'selected' : '' }}>5 Stars</option>
                            </select>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" name="comment" id="floatingTextarea2"
                                style="height: 100px" required>{{ $kritik->comment }}</textarea>
                            <label for="floatingTextarea2">Comments</label>
                        </div>
                        <button type="submit" class="btn btn-custom">EDIT</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>