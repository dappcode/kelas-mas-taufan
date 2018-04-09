<h1> Data Input Santri <h1>
<form action="{{ route('santri.store')}}" method="post"><br>

    {{ csrf_field() }}

    <input type="text" name="nama" placeholder="Your Name"><br>
    <input type="text" name="umur" placeholder="Your Age"><br>
    <textarea name="alamat" rows="8" cols="80" placeholder="Your Address"></textarea><br>
    <input type="text" name="jenis_kelamin" placeholder="Your Gender"><br>
    <button type="submit" name="button">Save!</button>
</form>
