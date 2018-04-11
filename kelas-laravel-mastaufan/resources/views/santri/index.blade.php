<link rel="stylesheet" href="/css/bootstrap.min.css">

<h1 class="text-center"> Daftar Seluruh Santri </h1>
<div class="container">


    <a href="{{ route('santri.create')}}" class="btn btn-primary" role="button"> Tambah Data</a>
    <table class="table" border="1"> 
        <thead class="table-dark">
            <tr> 
                <th scope="col"> No </th>
                <th scope="col"> Nama </th>
                <th scope="col"> umur </th>
                <th scope="col"> alamat </th>
                <th scope="col"> Jenis Kelamin </th>
                <th scope="col">Action</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($santris as $key => $santri)
            <tr>
                <td>{{ $key+1 }} </td>
                <td>{{ $santri->nama }} </td>
                <td>{{ $santri->umur }} </td>
                <td>{{ $santri->alamat }} </td>
                <td>{{ $santri->jenis_kelamin }} </td>
                <td>
                        <a class="btn btn-success" role="button" href="{{ route('santri.show', $santri->id) }}"> Detail </a>
                    
                        <a  class="btn btn-primary" href="{{ route('santri.edit', $santri->id) }}" role="button"> Edit</a>
                </td>
                <td>
                    <form action="{{ route('santri.destroy', $santri->id) }}" method="post">
                        @csrf
                        @method('DELETE')
    
                        <button class="btn btn-danger" type="submit"> Deleted </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
