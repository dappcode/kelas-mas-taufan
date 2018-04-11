<h1> Data Input Santri </h1>
<form action="{{ route('santri.store')}}" method="post"><br>

    {{ csrf_field() }}

    @csrf
    <input type="text" name="nama" placeholder="Your Name"><br>
    @if ($errors->has('nama'))
        <strong>{{ $errors->first('nama') }}</strong><br>
    @endif
    <input type="text" name="umur" placeholder="Your Age"><br>
    @if ($errors->has('umur'))
        <strong>{{ $errors->first('umur') }}</strong><br>
    @endif
    <textarea name="alamat" rows="8" cols="80" placeholder="Your Address"></textarea><br>
    @if ($errors->has('alamat'))
        <strong>{{ $errors->first('alamat') }}</strong><br>
    @endif
    <input type="text" name="jenis_kelamin" placeholder="Your Gender"><br>
    @if ($errors->has('jenis_kelamin'))
        <strong>{{ $errors->first('jenis_kelamin') }}</strong><br>
    @endif
    <button type="submit" name="button">Save!</button>
    <button type="submit" name="button"> <a href="{{ route('santri.index')}}"> Back </a></button>
</form>

