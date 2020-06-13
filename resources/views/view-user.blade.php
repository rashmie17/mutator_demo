<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(count($employees) > 0)
                <div class="card">
                    <div class="card-header">Employee list</div>
                    <div class="card-body">
                        <table class="table table-bordered table-condensed">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>LOCATION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($employees as $employee)
                                    <tr>
                                        <td>{{$employee->name}}</td>
                                        <td>{{$employee->location}}</td>
                                    </tr>
                                @endforeach
                            <tbody>
                        </table>
                    </div>
                </div>
            @else
                No Data found.
            @endif
        </div>
    </div>
</div>

