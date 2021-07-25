<x-layout>
    <div class="container-lg mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="/register" method="post">
                    @csrf

                    <div class="form-outline mb-4">
                        <input type="text" id="name" name="name" class="form-control" />
                        <label class="form-label" for="name">İsim</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" id="username" name="username" class="form-control" />
                        <label class="form-label" for="username">Kullanıcı Adı</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="email" id="email" name="email" class="form-control" />
                        <label class="form-label" for="email">Email Adresiniz</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="password" id="password" name="password" class="form-control" />
                        <label class="form-label" for="password">Parola</label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Kayıt Ol</button>

                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                </form>
            </div>
        </div>
    </div>
</x-layout>
