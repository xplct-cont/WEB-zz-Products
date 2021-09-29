<div class="table-responsive">
    <table class="table" id="sales-table">
        <thead>
            <tr>
                <th>Product Brand</th>
        <th>Product Model</th>
        <th>Start Of Sale</th>
        <th>End Of Sale</th>
        <th>Sale Code</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sales as $sales)
            <tr>
                <td>{{ $sales->Product_Brand }}</td>
            <td>{{ $sales->Product_Model }}</td>
            <td>{{ $sales->Start_Of_Sale }}</td>
            <td>{{ $sales->End_Of_Sale }}</td>
            <td>{{ $sales->Sale_Code }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['sales.destroy', $sales->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sales.show', [$sales->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('sales.edit', [$sales->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
