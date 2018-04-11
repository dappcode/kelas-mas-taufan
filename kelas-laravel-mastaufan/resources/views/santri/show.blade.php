<h1>Data diri {{ $santri->nama }}</h1>

Age : {{ $santri->umur }} <br>
Address : {{ $santri->alamat }} <br>
Gender : {{ $santri->jenis_kelamin }} <br>

<hr>

<a href="{{ route('santri.index') }}"> Back </a>
