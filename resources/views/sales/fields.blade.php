<!-- Product Brand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Product_Brand', 'Product Brand:') !!}
    {!! Form::text('Product_Brand', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Product Model Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Product_Model', 'Product Model:') !!}
    {!! Form::text('Product_Model', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Start Of Sale Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Start_Of_Sale', 'Start Of Sale:') !!}
    {!! Form::text('Start_Of_Sale', null, ['class' => 'form-control','id'=>'Start_Of_Sale']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#Start_Of_Sale').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- End Of Sale Field -->
<div class="form-group col-sm-6">
    {!! Form::label('End_Of_Sale', 'End Of Sale:') !!}
    {!! Form::text('End_Of_Sale', null, ['class' => 'form-control','id'=>'End_Of_Sale']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#End_Of_Sale').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Sale Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Sale_Code', 'Sale Code:') !!}
    {!! Form::text('Sale_Code', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>