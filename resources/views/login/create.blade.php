<x-layout>
    <div class="container-lg mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="/login" method="post">
                    @csrf

                    <div class="form-outline mb-4">
                        <input type="text" id="username" name="username" class="form-control" required />
                        <label class="form-label" for="username">Kullanıcı Adı <i class="fas fa-user"></i></label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="password" id="password" name="password" class="form-control" required />
                        <label class="form-label" for="password">Parola <i class="fas fa-lock"></i></label>
                    </div>

                    <div class="form-outline mb-4">
                        <div class="row mb-4">
                            <div class="col d-flex justify-content-center">
                              <!-- Checkbox -->
                              <div class="form-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  value=""
                                  id="form1Example3"
                                  checked
                                />
                                <label class="form-check-label" for="form1Example3"> Beni Hatırla</label>
                              </div>
                            </div>

                            <div class="col">
                              <!-- Simple link -->
                              <a href="#!">Şifrenizi mi Unuttunuz?</a>
                            </div>
                          </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Giriş Yap</button>

                </form>
            </div>
        </div>
    </div>
</x-layout>
