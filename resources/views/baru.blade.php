<form method="POST" action="/data">
    @csrf
    Nama :
    <input name="name" id="name" type="text">

    Alamat :

    <input name="address" id="address" type="text">
    <button>Kirim</button>
</form>
