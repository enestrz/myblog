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
                            <a href="/blogs/{{ $post->slug }}" class="btn btn-info btn-floating"><i
                                    class="fas fa-info"></i></a>

                            <a href="#" class="btn btn-warning btn-floating"><i class="fas fa-pen"></i></a>

                            <button type="button" class="btn btn-danger btn-floating" data-mdb-toggle="modal"
                                data-mdb-target="#exampleModal" data-mdb-whatever="{{ $post->id }}">
                                <i class="fas fa-trash"></i>
                            </button>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div
  class="modal fade"
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">Dikkat</h5>
        <button
          type="button"
          class="btn-close"
          data-mdb-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
          <p class="lead"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
            Kapat
          </button>
        <form id="deleteForm" class="d-inline" method="POST">
            @method('DELETE')
            @csrf
          <button type="submit" class="btn btn-danger">Onayla</button>
        </form>
      </div>
    </div>
  </div>
</div>


    <script>
const exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.mdb.modal', (event) => {
  // Button that triggered the modal
  const button = event.relatedTarget
  // Extract info from data-mdb-* attributes
  const recipient = button.getAttribute('data-mdb-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  const modalTitle = exampleModal.querySelector('.modal-body .lead')
  const modalBodyInput = exampleModal.querySelector('.modal-footer form')

  modalTitle.textContent = `${recipient} numaralı blog gönderisini silmek istiyor musunuz?`
  modalBodyInput.action = "/admin-panel/"+recipient
});
    </script>
</x-admin-layout>
