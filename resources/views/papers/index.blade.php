@extends('layouts.main')

@section('content')

<div class="container content">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header"><h2>Papers</h2></div>
                <div class="card-body">
                    <table class="table table-striped" style="font-size: .7em; text-align: left;">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Author</th>
                                <th scope="col">Year</th>
                                <th scope="col">Title</th>
                                <th scope="col">Journal</th>
                                <th scope="col">Full text</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <th scope="row">Dimitrov, Deltshev & Lazarov</th>
                                <td>2017</td>
                                <td>
                                    Description of <i>Histopona breviemboli</i> sp. n. from the Balkan Peninsula (Arachnida, Araneae, Agelenidae)
                                </td>
                                <td>Zootaxa 4311(2): 283-286. doi:10.11646/zootaxa.4311.2.10</td>
                                <td><a href="/articles/Dimitrov_et_al_2017.pdf" target="_blank">Open</a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection