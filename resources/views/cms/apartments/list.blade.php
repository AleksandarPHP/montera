@extends('cms.layout.container')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('cms') }}">POČETNA</a>
    </li>
    <li class="breadcrumb-item active">Stranice</li>
</ol>
<h1>Stranice</h1>
<hr>
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Lista</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTableSSR" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Naziv</th>
                    <th>Sprat</th>
                    <th>Status</th>
                    <th class="nosort text-center">Akcija</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Naziv</th>
                    <th>Sprat</th>
                    <th>Status</th>
                    <th class="nosort text-center">Akcija</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
$(function() {
   $(document).on('click', '.confirmation', function(e) {
       e.preventDefault();
       if (confirm('Da li ste sigurni?')) $('#delete-form'+$(this).attr('data-id')).submit();
   });
});

$(document).ready(function() {
    $('#dataTableSSR').DataTable({
    'aoColumnDefs': [{
        'bSortable': false,
        'aTargets': ['nosort']
    }],
    'language': {
        "sEmptyTable":     "Nema podataka u tabeli",
        "sInfo":           "Prikaz _START_ do _END_ od ukupno _TOTAL_ zapisa",
        "sInfoEmpty":      "Prikaz 0 do 0 od ukupno 0 zapisa",
        "sInfoFiltered":   "(filtrirano od ukupno _MAX_ zapisa)",
        "sInfoPostFix":    "",
        "sInfoThousands":  ".",
        "sLengthMenu":     "Prikaži _MENU_ zapisa",
        "sLoadingRecords": "Učitavanje...",
        "sProcessing":     "Obrada...",
        "sSearch":         "Pretraga:",
        "sZeroRecords":    "Nisu pronađeni odgovarajući zapisi",
        "oPaginate": {
            "sFirst":    "Početna",
            "sLast":     "Poslednja",
            "sNext":     "Sledeća",
            "sPrevious": "Predhodna"
        },
        "oAria": {
            "sSortAscending":  ": aktivirajte da sortirate kolonu uzlazno",
            "sSortDescending": ": aktivirajte da sortirate kolonu silazno"
        }
    },
    "bProcessing": true,
    "serverSide": true,
    "ajax": {
        url: "{{ url('cms/apartments/ajax') }}",
        type: "post",
        headers: {
            'X-CSRF-Token': "{{ csrf_token() }}"
        },
        error: function(){
            $("#dataTableSSR_processing").css("display","none");
            alert('Došlo je do greške prilikom učitavanja podataka, molimo pokušajte ponovo učitati stranicu.')
        }
    },
    "createdRow": function (row, data, index) {
        $(row).find('td:eq(2)').addClass("text-center");
        $(row).find('td:eq(3)').addClass("text-center");
        $(row).find('td:eq(4)').addClass("text-center");
    },
    "order": [[ 0, "asc"]],
    "rowCallback": function(row, data, index) {
        if(data[3] == "Izdavanje") {
            $(row).find('td:eq(3)').css('background-color', '#d2fad7');
        } else if(data[3] == "Prodaja") {
            $(row).find('td:eq(3)').css('background-color', '#d5d8f3');
        } else {
            $(row).find('td:eq(3)').css('background-color', '#f3d5d5');
        }
    }
  });
});
</script>
@endsection