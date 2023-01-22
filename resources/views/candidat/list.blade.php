@extends('base')

@section('title', config('app.name'). '| Liste des candidats')

@section('content')

<!--Title-->
<h1 class="flex items-center font-sans font-bold break-normal text-indigo-500 px-2 py-8 text-xl md:text-2xl">
    Liste des candidats
</h1>

<!--Card-->
<div id='candidat' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

    <table id="candidatT" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
        <thead>
            <tr>
                <th data-priority="1">Nom</th>
                <th data-priority="2">Prénom</th>
                <th data-priority="3">Numéro de téléphone</th>
                <th data-priority="4">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listCandidats as $candidat)
            <tr>
                <td>{{ $candidat->nom }}</td>
                <td>{{ $candidat->prenom }}</td>
                <td>{{ $candidat->numero }}</td>
                <td>{{ $candidat->email }}</td>
            </tr>
            @endforeach
        </tbody>

    </table>


</div>
<!--/Card-->

<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!--Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
    $(document).ready(function() {

        var table = $('#candidatT').DataTable({
                responsive: true
            })
            .columns.adjust()
            .responsive.recalc();
    });
</script>

@endsection