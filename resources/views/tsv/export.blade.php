@php(header("Content-Type: application/xls"))
@php(header("Content-Disposition: attachment; filename=tsv_parsed.xls"))
@php(header("Pragma: no-cache"))
@php(header("Expires: 0"))

<table class="table table-striped">
    <tbody>
    @foreach($parsed as $p)
    <tr>
       @foreach($p as $data)
       <td>{{ $data }}</td>
       @endforeach
    </tr>
    @endforeach
    </tbody>
</table>
