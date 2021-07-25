<x-admin-layout>
    <div class="container">
        <h1>Admin Sayfası</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Başlık</th>
                    <th scope="col">Yazar</th>
                    <th scope="col">Yayınlandığı Tarih</th>
                    <th scope="col">Detay | Düzenle | Sil</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>Enes Terzi</td>
                        <td>{{ $post->created_at }}</td>
                        <td>
                            <a href="#" class="btn btn-info btn-floating"><i class="fas fa-info"></i></a>
                            <a href="#" class="btn btn-warning btn-floating"><i class="fas fa-pen"></i></a>
                            <a href="#" class="btn btn-danger btn-floating"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-admin-layout>
